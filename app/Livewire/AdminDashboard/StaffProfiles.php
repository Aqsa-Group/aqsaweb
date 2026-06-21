<?php

namespace App\Livewire\AdminDashboard;

use Livewire\Component;

class StaffProfiles extends Component
{
    public bool $showForm = false;

    public array $staff = [
        [
            'name' => 'MohammadReza Ahmadi',
            'position' => 'Logistic Manager',
            'company' => ['30% ICT', '30% Logistic'],
            'status' => 'Active',
            'base_salary' => '$500',
            'net_salary' => '$400',
            'date' => '1 Feb, 2020',
        ],
        [
            'name' => 'MohammadReza Ahmadi',
            'position' => 'Logistic Manager',
            'company' => ['30% ICT', '30% Logistic'],
            'status' => 'Active',
            'base_salary' => '$500',
            'net_salary' => '$400',
            'date' => '1 Feb, 2020',
        ],
        [
            'name' => 'MohammadReza Ahmadi',
            'position' => 'Logistic Manager',
            'company' => ['100% Logistic'],
            'status' => 'Active',
            'base_salary' => '$500',
            'net_salary' => '$400',
            'date' => '1 Feb, 2020',
        ],
    ];

    public function toggleForm(): void
    {
        $this->showForm = ! $this->showForm;
    }

    public function cancelForm(): void
    {
        $this->showForm = false;
    }

    public function render()
    {
        return view('livewire.admin-dashboard.staff-profiles', [
            'showForm' => $this->showForm,
            'staff' => $this->staff,
        ]);
    }
}
