<?php

namespace App\Livewire\AdminDashboard;

use Livewire\Component;

class PaymentManagement extends Component
{
    public bool $showForm = false;

    public array $payments = [
        [
            'type' => 'Incoming',
            'party' => 'WFP Afghanistan',
            'company' => 'ICT',
            'method' => 'Bank Transfer',
            'reference' => 'INV -2024',
            'amount' => '45,000 USD',
            'date' => '1 Feb, 2026',
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
        return view('livewire.admin-dashboard.payment-management');
    }
}
