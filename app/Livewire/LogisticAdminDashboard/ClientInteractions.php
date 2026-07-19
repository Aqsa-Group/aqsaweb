<?php

namespace App\Livewire\LogisticAdminDashboard;

use Livewire\Component;

class ClientInteractions extends Component
{
    public bool $showForm = false;

    public array $interactions = [
        [
            'client' => 'UNHCR Afghanistan',
            'subject' => 'Project Discussion',
            'company' => 'Logistic',
            'channel' => 'Email',
            'project' => 'Food Distribution',
            'date' => '14 Mar, 2026',
            'status' => 'Completed',
        ],
        [
            'client' => 'UNICEF Afghanistan',
            'subject' => 'Meeting Follow Up',
            'company' => 'ICT',
            'channel' => 'Meeting',
            'project' => 'ERP System',
            'date' => '15 Mar, 2026',
            'status' => 'Completed',
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
        return view('livewire.logistic-admin-dashboard.client-interactions');
    }
}
