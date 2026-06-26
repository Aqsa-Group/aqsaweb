<?php

namespace App\Livewire\AdminDashboard;

use Livewire\Component;

class JournalEntries extends Component
{
    public bool $showForm = false;

    public array $entries = [
        ['entry' => 'JE - 624389', 'description' => 'Government Network infrastructure', 'company' => 'ICT', 'date' => '14 Mar, 2026', 'debit' => '$90.0', 'credit' => '$90.0', 'status' => 'Draft'],
        ['entry' => 'JE - 624389', 'description' => 'Government Network infrastructure', 'company' => 'ICT', 'date' => '14 Mar, 2026', 'debit' => '$90.0', 'credit' => '$90.0', 'status' => 'Draft'],
        ['entry' => 'JE - 624389', 'description' => 'Government Network infrastructure', 'company' => 'ICT', 'date' => '14 Mar, 2026', 'debit' => '$90.0', 'credit' => '$90.0', 'status' => 'Draft'],
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
        return view('livewire.admin-dashboard.journal-entries');
    }
}
