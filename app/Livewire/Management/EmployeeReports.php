<?php

namespace App\Livewire\Management;

use App\Models\Management\EmployeeReports as Report;
use App\Models\Management\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;
use Carbon\Carbon;


class EmployeeReports extends Component
{
    use WithFileUploads;

    public $reports;
    public $report_id;
    public $user_id;
    public $title;
    public $description;
    public $file;
    public $date;
    public $existing_file;

    public $search = '';
    public $users = [];

    protected $rules = [
        'user_id' => 'required|exists:panel_users,id',
        'title' => 'required|string|max:255',
        'description' => 'nullable|string',
        'file' => 'nullable|file|max:10240',
        'date' => 'required|date',
    ];


    public function mount()
    {
        $this->date = now()->format('Y-m-d');

        $this->user_id = Auth::guard('management')->id();

        $this->loadReports();
    }

    public function loadReports()
    {
        $timezone = 'Asia/Kabul';
        $now = Carbon::now($timezone);

        $currentUser = Auth::guard('management')->user();
        $rolesAllowed = ['Administrator', 'Manager', 'HR Manager'];

        $query = Report::with('user');

        // جستجو
        if ($this->search) {
            $query->where(function ($q) {
                $q->where('title', 'like', '%' . $this->search . '%')
                    ->orWhere('description', 'like', '%' . $this->search . '%')
                    ->orWhereHas('user', function ($q) {
                        $q->where('name', 'like', '%' . $this->search . '%')
                            ->orWhere('lastname', 'like', '%' . $this->search . '%');
                    });
            });
        }

        if (!in_array($currentUser->role, $rolesAllowed)) {
            $todayStart = $now->copy()->startOfDay();
            $todayEnd   = $now->copy()->endOfDay();

            $query->where('user_id', $currentUser->id)
                ->whereBetween('date', [$todayStart, $todayEnd]);
        }

        $query->orderBy('date', 'desc')->orderBy('created_at', 'desc');

        $this->reports = $query->get();
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);

        if ($propertyName === 'search') {
            $this->loadReports();
        }
    }

    public function store()
    {
        $currentUser = Auth::guard('management')->user();
        $rolesAllowed = ['Administrator', 'Manager', 'HR Manager'];

        if (!in_array($currentUser->role, $rolesAllowed)) {
            $timezone = 'Asia/Kabul';
            $todayStart = Carbon::now($timezone)->startOfDay();
            $todayEnd   = Carbon::now($timezone)->endOfDay();

            $existingReport = Report::where('user_id', $currentUser->id)
                ->whereBetween('date', [$todayStart, $todayEnd])
                ->first();

            if ($existingReport) {
                session()->flash('error', 'You have already submitted a report today!');
                return;
            }
        }

        $validatedData = $this->validate();

        // Handle file upload
        if ($this->file) {
            $fileName = time() . '_' . $this->file->getClientOriginalName();
            $filePath = $this->file->storeAs('employee_reports', $fileName, 'public');
            $validatedData['file'] = $filePath;
        }

        Report::create($validatedData);

        $this->resetForm();
        $this->loadReports();

        session()->flash('success', 'Report created successfully!');
    }


    public function edit($id)
    {
        $report = Report::findOrFail($id);

        $this->report_id = $report->id;
        $this->user_id = $report->user_id;
        $this->title = $report->title;
        $this->description = $report->description;
        $this->existing_file = $report->file;
        $this->date = $report->date->format('Y-m-d');
    }

    public function update()
    {
        $validatedData = $this->validate();

        $report = Report::findOrFail($this->report_id);

        if ($this->file) {
            if ($report->file && Storage::disk('public')->exists($report->file)) {
                Storage::disk('public')->delete($report->file);
            }

            $fileName = time() . '_' . $this->file->getClientOriginalName();
            $filePath = $this->file->storeAs('employee_reports', $fileName, 'public');
            $validatedData['file'] = $filePath;
        } else {
            $validatedData['file'] = $report->file;
        }

        $report->update($validatedData);

        $this->resetForm();
        $this->loadReports();

        session()->flash('success', 'Report updated successfully!');
    }

    public function delete($id)
    {
        $report = Report::findOrFail($id);

        // Delete file if exists
        if ($report->file && Storage::disk('public')->exists($report->file)) {
            Storage::disk('public')->delete($report->file);
        }

        $report->delete();

        $this->loadReports();

        session()->flash('success', 'Report deleted successfully!');
    }

    public function resetForm()
    {
        $this->reset([
            'report_id',
            'user_id',
            'title',
            'description',
            'file',
            'date',
            'existing_file'
        ]);

        $this->date = now()->format('Y-m-d');
        $this->resetErrorBag();
    }

    public function render()
    {
        return view('livewire.management.employee-reports');
    }
}
