<?php

namespace App\Livewire\Management;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Management\Employee;
use App\Models\Management\Department;

class Employees extends Component
{
    use WithPagination;

    protected $paginationTheme = 'tailwind';

    // Form Properties
    public $employee_id;
    public $name, $lastname, $phone, $address, $gender, $age;
    public $department, $degree, $section, $contract_start, $contract_end;
    public $search = '';

    // Validation Rules
    protected $rules = [
        'name' => 'required|string|max:255',
        'lastname' => 'required|string|max:255',
        'phone' => 'nullable|string|max:20',
        'address' => 'nullable|string|max:500',
        'gender' => 'required|in:Male,Female,Other',
        'age' => 'nullable|integer|min:18|max:100',
        'department' => 'required|string|max:255',
        'degree' => 'required|string|max:255',
        'section' => 'nullable|string|max:255',
        'contract_start' => 'required|date',
        'contract_end' => 'required|date|after_or_equal:contract_start',
    ];

    // Custom Messages
    protected $messages = [
        'contract_end.after_or_equal' => 'Contract end date must be after or equal to start date.',
    ];

    // Reset Form
    public function resetForm()
    {
        $this->reset([
            'employee_id',
            'name',
            'lastname',
            'phone',
            'address',
            'gender',
            'age',
            'department',
            'degree',
            'section',
            'contract_start',
            'contract_end',
        ]);
        $this->resetValidation();
    }

    // Store Employee
    public function store()
    {
        $this->validate();

        Employee::create([
            'name' => $this->name,
            'lastname' => $this->lastname,
            'phone' => $this->phone,
            'address' => $this->address,
            'gender' => $this->gender,
            'age' => $this->age,
            'department' => $this->department,
            'degree' => $this->degree,
            'section' => $this->section,
            'contract_start' => $this->contract_start,
            'contract_end' => $this->contract_end,
        ]);

        session()->flash('success', 'Employee created successfully!');
        $this->resetForm();
    }

    // Edit Employee
    public function edit($id)
    {
        $employee = Employee::findOrFail($id);

        $this->employee_id = $employee->id;
        $this->name = $employee->name;
        $this->lastname = $employee->lastname;
        $this->phone = $employee->phone;
        $this->address = $employee->address;
        $this->gender = $employee->gender;
        $this->age = $employee->age;
        $this->department = $employee->department;
        $this->degree = $employee->degree;
        $this->section = $employee->section;
        $this->contract_start = $employee->contract_start;
        $this->contract_end = $employee->contract_end;
    }

    // Update Employee
    public function update()
    {
        $this->validate();

        $employee = Employee::findOrFail($this->employee_id);
        $employee->update([
            'name' => $this->name,
            'lastname' => $this->lastname,
            'phone' => $this->phone,
            'address' => $this->address,
            'gender' => $this->gender,
            'age' => $this->age,
            'department' => $this->department,
            'degree' => $this->degree,
            'section' => $this->section,
            'contract_start' => $this->contract_start,
            'contract_end' => $this->contract_end,
        ]);

        session()->flash('success', 'Employee updated successfully!');
        $this->resetForm();
    }

    // Delete Employee
    public function delete($id)
    {
        $employee = Employee::findOrFail($id);
        $employee->delete();

        // Reset to first page if no records on current page
        if (Employee::count() <= (($this->getPage() - 1) * 10) && $this->getPage() > 1) {
            $this->previousPage();
        }

        session()->flash('success', 'Employee deleted successfully!');
    }

    // Reset pagination on search
    public function updatingSearch()
    {
        $this->resetPage();
    }

    // Render Component
    public function render()
    {
        return view('livewire.management.employees', [
            'employees' => Employee::where(function($query) {
                    $query->where('name', 'like', '%' . $this->search . '%')
                          ->orWhere('lastname', 'like', '%' . $this->search . '%')
                          ->orWhere('phone', 'like', '%' . $this->search . '%')
                          ->orWhere('department', 'like', '%' . $this->search . '%');
                })
                ->latest()
                ->paginate(10),

            'departments' => Department::orderBy('name')->pluck('name')->unique(),
        ]);
    }
}