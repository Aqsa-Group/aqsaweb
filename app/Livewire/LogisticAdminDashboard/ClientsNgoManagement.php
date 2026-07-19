<?php

namespace App\Livewire\LogisticAdminDashboard;

use Livewire\Component;

class ClientsNgoManagement extends Component
{
    public bool $showForm = false;

    public array $clients = [
        [
            'name' => 'Ministry of Communication',
            'type' => 'INGO',
            'status' => 'Active',
            'contact' => 'Ahmad Norzaii',
            'phone' => '0876345321',
            'tax_rate' => '2%',
            'email' => 'projects@mcit.gov.af',
        ],
        [
            'name' => 'Ministry of Communication',
            'type' => 'INGO',
            'status' => 'Active',
            'contact' => 'Ahmad Norzaii',
            'phone' => '0876345321',
            'tax_rate' => '2%',
            'email' => 'projects@mcit.gov.af',
        ],
        [
            'name' => 'Ministry of Communication',
            'type' => 'INGO',
            'status' => 'Active',
            'contact' => 'Ahmad Norzaii',
            'phone' => '0876345321',
            'tax_rate' => '2%',
            'email' => 'projects@mcit.gov.af',
        ],
        [
            'name' => 'Ministry of Communication',
            'type' => 'INGO',
            'status' => 'Active',
            'contact' => 'Ahmad Norzaii',
            'phone' => '0876345321',
            'tax_rate' => '2%',
            'email' => 'projects@mcit.gov.af',
        ],
        [
            'name' => 'Ministry of Communication',
            'type' => 'INGO',
            'status' => 'Active',
            'contact' => 'Ahmad Norzaii',
            'phone' => '0876345321',
            'tax_rate' => '2%',
            'email' => 'projects@mcit.gov.af',
        ],
        [
            'name' => 'Ministry of Communication',
            'type' => 'INGO',
            'status' => 'Active',
            'contact' => 'Ahmad Norzaii',
            'phone' => '0876345321',
            'tax_rate' => '2%',
            'email' => 'projects@mcit.gov.af',
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
        return view('livewire.logistic-admin-dashboard.clients-ngo-management');
    }
}
