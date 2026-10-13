<?php

namespace App\Livewire\AdminDashboard;

use Livewire\Component;

class SupportTickets extends Component
{
    public bool $showForm = false;

    public array $tickets = [
        ['id' => 'INT - 0039', 'subject' => 'WFP Project', 'client' => 'Ahmad', 'status' => 'In Progress', 'priority' => 'Urgent', 'company' => 'ICT', 'date' => '1 Feb, 2020'],
        ['id' => 'INT - 0039', 'subject' => 'WFP Project', 'client' => 'Ahmad', 'status' => 'In Progress', 'priority' => 'Urgent', 'company' => 'ICT', 'date' => '1 Feb, 2020'],
        ['id' => 'INT - 0039', 'subject' => 'WFP Project', 'client' => 'Ahmad', 'status' => 'In Progress', 'priority' => 'Urgent', 'company' => 'ICT', 'date' => '1 Feb, 2020'],
        ['id' => 'INT - 0039', 'subject' => 'WFP Project', 'client' => 'Ahmad', 'status' => 'In Progress', 'priority' => 'Urgent', 'company' => 'ICT', 'date' => '1 Feb, 2020'],
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
        return view('livewire.admin-dashboard.support-tickets');
    }
}
