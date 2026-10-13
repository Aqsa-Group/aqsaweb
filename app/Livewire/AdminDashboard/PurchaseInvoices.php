<?php

namespace App\Livewire\AdminDashboard;

use Livewire\Component;

class PurchaseInvoices extends Component
{
    public bool $showForm = false;

    public array $purchases = [
        ['invoice' => 'INV-ICT-001', 'vendor' => 'Ministry of Communication', 'project' => 'Government Network infrastructure', 'company' => 'ICT', 'status' => 'Paid', 'total' => '45,000 USD', 'date' => '1 Feb, 2026'],
        ['invoice' => 'INV-ICT-001', 'vendor' => 'Ministry of Communication', 'project' => 'Government Network infrastructure', 'company' => 'Logistic', 'status' => 'Paid', 'total' => '45,000 USD', 'date' => '1 Feb, 2026'],
        ['invoice' => 'INV-2024-001', 'vendor' => 'WFP Afghanistan', 'project' => 'Food Distribution Logistic', 'company' => 'Logistic', 'status' => 'Sent', 'total' => '50,000 USD', 'date' => '3 Mar, 2024'],
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
        return view('livewire.admin-dashboard.purchase-invoices');
    }
}
