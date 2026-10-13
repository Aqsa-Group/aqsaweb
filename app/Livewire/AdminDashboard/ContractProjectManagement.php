<?php

namespace App\Livewire\AdminDashboard;

use Livewire\Component;

class ContractProjectManagement extends Component
{
    public bool $showForm = false;

    public array $contracts = [
        ['project' => 'Logistic Support Service', 'client' => 'UNHCR Afghanistan', 'company' => 'Logistic', 'type' => 'Service', 'amount' => '85,000 USD', 'net' => '83,000 USD', 'status' => 'Under Review'],
        ['project' => 'Logistic Support Service', 'client' => 'UNHCR Afghanistan', 'company' => 'Logistic', 'type' => 'Service', 'amount' => '85,000 USD', 'net' => '83,000 USD', 'status' => 'Under Review'],
        ['project' => 'ICT Infrastructure Setup', 'client' => 'UNICEF Afghanistan', 'company' => 'ICT', 'type' => 'One Time', 'amount' => '45,000 USD', 'net' => '44,000 USD', 'status' => 'Under Review'],
        ['project' => 'Logistic Support Service', 'client' => 'UNHCR Afghanistan', 'company' => 'Logistic', 'type' => 'Service', 'amount' => '85,000 USD', 'net' => '83,000 USD', 'status' => 'Under Review'],
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
        return view('livewire.admin-dashboard.contract-project-management');
    }
}
