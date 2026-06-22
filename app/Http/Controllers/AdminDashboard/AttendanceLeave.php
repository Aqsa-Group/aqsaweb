<?php

namespace App\Livewire\AdminDashboard;

use Livewire\Component;

class AttendanceLeave extends Component
{
    public bool $showForm = false;
    public string $formType = 'attendance';

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
    }

    public function setFormType(string $type): void
    {
        $this->formType = $type;
        $this->showForm = true;
    }

    public function cancelForm(): void
    {
        $this->showForm = false;
    }

    public function render()
    {
        return view('livewire.admin-dashboard.attendance-leave');
    }
}
