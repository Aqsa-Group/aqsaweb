<?php

namespace App\Livewire\AdminDashboard;

use Livewire\Component;

class AttendanceLeave extends Component
{
    public bool $showForm = false;
    public string $formType = 'attendance';

    public string $fullName = '';
    public string $checkIn = '';
    public string $checkOut = '';
    public string $date = '';
    public string $status = 'Present';
    public string $days = '1';
    public string $leaveType = 'Sick';

    public array $records = [
        [
            'name' => 'MohammadReza Ahmadi',
            'position' => 'Logistic Manager',
            'type' => 'Attendance',
            'status' => 'Present',
            'time' => '8:00 AM To 5:00 PM',
            'date' => '1 Feb, 2020',
        ],
        [
            'name' => 'Mohammad Eesa',
            'position' => 'IT Manager',
            'type' => 'Attendance',
            'status' => 'Present',
            'time' => '8:00 AM To 5:00 PM',
            'date' => '5 Feb, 2020',
        ],
        [
            'name' => 'MohammadReza Ahmadi',
            'position' => 'Developer',
            'type' => 'Attendance',
            'status' => 'Present',
            'time' => '8:00 AM To 5:00 PM',
            'date' => '9 Feb, 2020',
        ],
        [
            'name' => 'Mahmood Asgharzada',
            'position' => 'Graphic Designer',
            'type' => 'Attendance',
            'status' => 'Present',
            'time' => '8:00 AM To 5:00 PM',
            'date' => '7 Feb, 2020',
        ],
    ];

    public function toggleForm(): void
    {
        $this->showForm = ! $this->showForm;
        $this->formType = 'attendance';
        $this->resetFormFields();
    }

    public function cancelForm(): void
    {
        $this->showForm = false;
        $this->typeSelected = false;
        $this->formType = 'attendance';
        $this->resetFormFields();
    }

    public function save(): void
    {
        $this->validate([
            'fullName' => 'required|string|max:255',
            'date' => 'required|date',
        ]);

        if ($this->formType === 'attendance') {
            $this->validate([
                'checkIn' => 'required',
                'checkOut' => 'required',
                'status' => 'required|string',
            ]);

            $this->records[] = [
                'name' => $this->fullName,
                'position' => 'Staff',
                'type' => 'Attendance',
                'status' => $this->status,
                'time' => $this->formatTime($this->checkIn) . ' To ' . $this->formatTime($this->checkOut),
                'date' => date('j M, Y', strtotime($this->date)),
            ];
        } else {
            $this->validate([
                'days' => 'required',
                'leaveType' => 'required|string',
                'status' => 'required|string',
            ]);

            $this->records[] = [
                'name' => $this->fullName,
                'position' => 'Staff',
                'type' => 'Leave',
                'status' => $this->status,
                'time' => $this->days . ' Day(s) - ' . $this->leaveType,
                'date' => date('j M, Y', strtotime($this->date)),
            ];
        }

        $this->cancelForm();
    }
    public function setFormType(string $type): void
{
    $this->formType = $type;

    if ($type === 'attendance') {
        $this->status = 'Present';
    } else {
        $this->status = 'On Leave';
    }
}

    private function resetFormFields(): void
    {
        $this->fullName = '';
        $this->checkIn = '';
        $this->checkOut = '';
        $this->date = '';
        $this->status = 'Present';
        $this->days = '1';
        $this->leaveType = 'Sick';
    }

    private function formatTime(string $time): string
    {
        return date('g:i A', strtotime($time));
    }

    public function render()
    {
        return view('livewire.admin-dashboard.attendance-leave');
    }
}
