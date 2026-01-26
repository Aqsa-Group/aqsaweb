<?php

namespace App\Livewire\Management;

use Livewire\Component;
use App\Models\Management\User as PanelUser;
use App\Models\Management\Department;
use Illuminate\Support\Facades\Hash;
use Livewire\WithPagination;
use App\Models\Management\Employee;


class User extends Component
{
    use WithPagination;

    public $user_id;
    public $name, $username, $password;
    public $department, $section, $role, $job;

    public $departmentsList = [];
    public $employee_id;
    public $employees = [];


    protected $rules = [
        'employee_id' => 'required|exists:employees,id',
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
        'employee_id',
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

        $employee = Employee::findOrFail($this->employee_id);

        PanelUser::create([
            'employee_id' => $employee->id,
            'name'        => $employee->name,
            'username'    => $this->username,
            'password'    => Hash::make($this->password ?? '123456'),
            'department'  => $this->department,
            'section'     => $this->section,
            'role'        => $this->role,
            'job'         => $this->job,
        ]);

        $this->resetForm();

        session()->flash('success', 'User created successfully');
    }


    public function mount()
    {
        $this->departmentsList = Department::orderBy('name', 'asc')->pluck('name')->toArray();
        $this->employees = Employee::orderBy('name')->get();
    }


   public function edit($id)
{
    $user = PanelUser::with('employee')->findOrFail($id);

    $this->user_id     = $user->id;
    $this->employee_id = $user->employee_id; 
    $this->username    = $user->username;
    $this->department  = $user->department;
    $this->section     = $user->section;
    $this->role        = $user->role;
    $this->job         = $user->job;

    $this->password = null;
}

public function update()
{
    $this->validate();

    $user = PanelUser::findOrFail($this->user_id);
    $employee = Employee::findOrFail($this->employee_id);

    $updateData = [
        'employee_id' => $employee->id,
        'name'        => $employee->name, 
        'username'    => $this->username,
        'department'  => $this->department,
        'section'     => $this->section,
        'role'        => $this->role,
        'job'         => $this->job,
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
