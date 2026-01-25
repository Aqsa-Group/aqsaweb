<?php

namespace App\Livewire\Management;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Management\Department;

class Departments extends Component
{
    use WithPagination;

    public $department_id;
    public $name;
    public $coach;
    public $members_number;
    public $search = '';

    protected $rules = [
        'name' => 'required|string|max:255',
        'coach' => 'required|string|max:255',
        'members_number' => 'required|integer|min:0',
    ];

    protected $paginationTheme = 'tailwind';

    // Add listener for delete event
    protected $listeners = ['deleteDepartment'];

    public function render()
    {
        $departments = Department::where('name', 'like', '%'.$this->search.'%')
            ->orderBy('name', 'asc')
            ->paginate(10);

        return view('livewire.management.departments', [
            'departments' => $departments,
        ]);
    }

    // Reset form fields
    public function resetForm()
    {
        $this->department_id = null;
        $this->name = '';
        $this->coach = '';
        $this->members_number = '';
    }

    // Create new department
    public function store()
    {
        $this->validate();

        Department::create([
            'name' => $this->name,
            'coach' => $this->coach,
            'members_number' => $this->members_number,
        ]);

        session()->flash('success', 'Department created successfully.');
        $this->resetForm();
    }

    // Load data for editing
    public function edit($id)
    {
        $department = Department::findOrFail($id);

        $this->department_id = $department->id;
        $this->name = $department->name;
        $this->coach = $department->coach;
        $this->members_number = $department->members_number;
    }

    // Update existing department
    public function update()
    {
        $this->validate();

        $department = Department::findOrFail($this->department_id);

        $department->update([
            'name' => $this->name,
            'coach' => $this->coach,
            'members_number' => $this->members_number,
        ]);

        session()->flash('success', 'Department updated successfully.');
        $this->resetForm();
    }

    // Delete department via event listener
    public function deleteDepartment($id)
    {
        $department = Department::findOrFail($id);
        $department->delete();

        session()->flash('success', 'Department deleted successfully.');
    }
}
