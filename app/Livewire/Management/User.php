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
    public $employee_name;

    public $departmentsList = [];
    public $employee_id;
    public $employees = [];
    public $search = '';

    protected $rules = [
        'employee_id' => 'required|exists:employees,id',
        'username' => 'required|string|max:255|unique:management_users,username,' . 'user_id',
        'password' => 'nullable|min:6',
        'role' => 'required|string|max:255',
        'job' => 'nullable|string|max:255',
    ];

    public function mount()
    {
        $this->departmentsList = Department::orderBy('name', 'asc')->pluck('name')->toArray();
        $this->loadEmployees();
        $this->resetForm();
    }

    public function loadEmployees()
    {
        $this->employees = Employee::orderBy('name')
            ->get();
    }

    // این متد به طور خودکار هنگام تغییر employee_id فراخوانی می‌شود
    public function updatedEmployeeId($value)
    {
        $this->loadEmployeeDetails($value);
    }

    // یا یک متد جداگانه برای تغییر دستی
    public function onEmployeeSelected($employeeId)
    {
        $this->employee_id = $employeeId;
        $this->loadEmployeeDetails($employeeId);
    }

    private function loadEmployeeDetails($employeeId)
    {
        $employee = Employee::find($employeeId);
        
        if ($employee) {
            $this->employee_name = $employee->name . ' ' . ($employee->lastname ?? '');
            
            // پر کردن department و section
            $this->department = $employee->department ?? '';
            $this->section = $employee->section ?? '';
            $this->job = $employee->position ?? $this->job;
            
            // اگر username قبلاً تنظیم نشده، از name کارمند پیشنهاد بده
            if (!$this->username && $employee->name) {
                $this->username = strtolower(str_replace(' ', '.', $employee->name));
            }
        } else {
            $this->employee_name = '';
            $this->department = '';
            $this->section = '';
        }
    }

    public function resetForm()
    {
        $this->reset([
            'user_id',
            'employee_id',
            'employee_name',
            'username',
            'password',
            'department',
            'section',
            'role',
            'job',
        ]);
        
        $this->role = 'Employee';
        $this->resetErrorBag();
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
            'status'      => 'active',
        ]);

        $this->resetForm();
        session()->flash('success', 'User created successfully!');
    }

    public function edit($id)
    {
        $user = PanelUser::with('employee')->findOrFail($id);

        $this->user_id = $user->id;
        $this->employee_id = $user->employee_id;
        $this->employee_name = $user->name;
        $this->username = $user->username;
        $this->department = $user->department;
        $this->section = $user->section;
        $this->role = $user->role;
        $this->job = $user->job;
        
        $this->password = null;
    }

    public function update()
    {
        $this->validate([
            'employee_id' => 'required|exists:employees,id',
            'username' => 'required|string|max:255|unique:management_users,username,' . $this->user_id,
            'password' => 'nullable|min:6',
            'role' => 'required|string|max:255',
            'job' => 'nullable|string|max:255',
        ]);

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
        session()->flash('success', 'User updated successfully!');
    }

    public function delete($id)
    {
        $user = PanelUser::findOrFail($id);
        $userName = $user->name;
        $user->delete();

        session()->flash('success', "User '{$userName}' deleted successfully!");
    }

    public function updatedSearch()
    {
        $this->resetPage();
    }

    public function render()
    {
        $query = PanelUser::query()
            ->with('employee')
            ->when($this->search, function ($query) {
                $query->where(function ($q) {
                    $q->where('name', 'like', '%' . $this->search . '%')
                      ->orWhere('username', 'like', '%' . $this->search . '%')
                      ->orWhere('department', 'like', '%' . $this->search . '%')
                      ->orWhere('role', 'like', '%' . $this->search . '%');
                });
            })
            ->orderBy('name');

        return view('livewire.management.user', [
            'users' => $query->paginate(10)
        ]);
    }
}