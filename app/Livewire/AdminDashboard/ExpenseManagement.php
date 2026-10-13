<?php

namespace App\Livewire\AdminDashboard;

use Livewire\Component;

class ExpenseManagement extends Component
{
    public bool $showForm = false;

    public array $expenses = [
        ['title' => 'Internet Money', 'category' => 'Internet', 'company' => 'ICT', 'source' => 'Bank Transfer', 'status' => 'Approved', 'amount' => '45,000 USD', 'date' => '1 Feb, 2026'],
        ['title' => 'Internet Money', 'category' => 'Fuel', 'company' => 'ICT', 'source' => 'Bank Transfer', 'status' => 'Approved', 'amount' => '45,000 USD', 'date' => '1 Feb, 2026'],
        ['title' => 'Internet Money', 'category' => 'Office rent', 'company' => 'ICT', 'source' => 'Bank Transfer', 'status' => 'Approved', 'amount' => '45,000 USD', 'date' => '1 Feb, 2026'],
        ['title' => 'Internet Money', 'category' => 'Market Expenses', 'company' => 'ICT', 'source' => 'Bank Transfer', 'status' => 'Approved', 'amount' => '45,000 USD', 'date' => '1 Feb, 2026'],
        ['title' => 'Internet Money', 'category' => 'License renewal', 'company' => 'ICT', 'source' => 'Bank Transfer', 'status' => 'Approved', 'amount' => '45,000 USD', 'date' => '1 Feb, 2026'],
        ['title' => 'Internet Money', 'category' => 'Bank fees', 'company' => 'ICT', 'source' => 'Bank Transfer', 'status' => 'Approved', 'amount' => '45,000 USD', 'date' => '1 Feb, 2026'],
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
        return view('livewire.admin-dashboard.expense-management');
    }
}
