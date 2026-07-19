<?php

namespace App\Livewire\LogisticAdminDashboard;

use Livewire\Component;

class TimeTracking extends Component
{
    public bool $showForm = false;

    public array $timesheets = [
        [
            'staff' => 'Mahmmod Ahmadi',
            'project' => 'Aqsa Web System',
            'date' => '14 Mar, 2026',
            'hours' => '24 Hr',
            'billable' => 'Billable',
            'rate' => '$900/h',
            'status' => 'Submitted',
            'cost' => '$90.0',
        ],
        [
            'staff' => 'Mahmmod Ahmadi',
            'project' => 'Aqsa Web System',
            'date' => '14 Mar, 2026',
            'hours' => '24 Hr',
            'billable' => 'Billable',
            'rate' => '$900/h',
            'status' => 'Submitted',
            'cost' => '$90.0',
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
        return view('livewire.logistic-admin-dashboard.time-tracking');
    }
}
