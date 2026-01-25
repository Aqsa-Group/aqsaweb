<?php

namespace App\Livewire\Management;

use Livewire\Component;
use App\Models\Management\User as PanelUser;
use App\Models\Management\Department;
use Illuminate\Support\Facades\Hash;
use Livewire\WithPagination;

class User extends Component
{
    use WithPagination;
    
    public $user_id;
    public $name, $username, $password;
    public $department, $section, $role, $job;

    public $departmentsList = [];
    

    protected $rules = [
        'name' => 'required|string|max:255',
        'username' => 'required|string|max:255',
        'department' => 'nullable|string|max:255',
        'section' => 'nullable|string|max:255',
        'role' => 'required|string|max:255',
        'job' => 'nullable|string|max:255',
    ];

    public function resetForm()
    {
        $this->reset([
            'user_id',
            'name',
            'username',
            'password',
            'department',
            'section',
            'role',
            'job',
        ]);
    }

    public function store()
    {
        $this->validate();

        PanelUser::create([
            'name' => $this->name,
            'username' => $this->username,
            'password' => Hash::make($this->password ?? '123456'),
            'department' => $this->department,
            'section' => $this->section,
            'role' => $this->role,
            'job' => $this->job,
        ]);

        $this->resetForm();

        session()->flash('success', 'User created successfully');
    }

    public function mount()
    {
        $this->departmentsList = Department::orderBy('name', 'asc')->pluck('name')->toArray();
    }

    public function edit($id)
    {
        $user = PanelUser::findOrFail($id);

        $this->user_id = $user->id;
        $this->name = $user->name;
        $this->username = $user->username;
        $this->department = $user->department;
        $this->section = $user->section;
        $this->role = $user->role;
        $this->job = $user->job;
    }

    public function update()
    {
        $this->validate();

        $user = PanelUser::findOrFail($this->user_id);

        $updateData = [
            'name' => $this->name,
            'username' => $this->username,
            'department' => $this->department,
            'section' => $this->section,
            'role' => $this->role,
            'job' => $this->job,
        ];

        if ($this->password) {
            $updateData['password'] = Hash::make($this->password);
        }

        $user->update($updateData);

        $this->resetForm();

        session()->flash('success', 'User updated successfully');
    }

    public function delete($id)
    {
        PanelUser::findOrFail($id)->delete();
        
        if (PanelUser::count() <= ($this->getPage() - 1) * 10 && $this->getPage() > 1) {
            $this->previousPage();
        }
        
        session()->flash('success', 'User deleted successfully');
    }

    public function render()
    {
        return view('livewire.management.user', [
            'users' => PanelUser::latest()->paginate(10)
        ]);
    }
}