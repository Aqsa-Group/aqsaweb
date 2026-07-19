<?php

namespace App\Livewire\LogisticAdminDashboard;

use Livewire\Component;

class ItProjects extends Component
{
    public bool $showForm = false;

    public array $projects = [
        [
            'name' => 'Internal ERP Maintenance',
            'description' => 'Ongoing maintenance and updates for internal system',
            'budget' => '28,000 USD',
            'sla_response' => '4Hr',
            'status' => 'Planning',
            'deadline' => '1 Feb, 2020',
        ],
        [
            'name' => 'Internal ERP Maintenance',
            'description' => 'Ongoing maintenance and updates for internal system',
            'budget' => '28,000 USD',
            'sla_response' => '4Hr',
            'status' => 'Planning',
            'deadline' => '1 Feb, 2020',
        ],
        [
            'name' => 'Internal ERP Maintenance',
            'description' => 'Ongoing maintenance and updates for internal system',
            'budget' => '28,000 USD',
            'sla_response' => '4Hr',
            'status' => 'Planning',
            'deadline' => '1 Feb, 2020',
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
        return view('livewire.logistic-admin-dashboard.it-projects');
    }
}
