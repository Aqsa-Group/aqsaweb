<?php

namespace App\Livewire\AdminDashboard;

use Livewire\Component;

class GeneralLedger extends Component
{
    public array $ledgers = [
        [
            'account' => 'Cash',
            'type' => 'Assets',
            'debit' => '$90.0',
            'credit' => '$90.0',
            'balance' => 'Balanced',
        ],
    ];

    public function render()
    {
        return view('livewire.admin-dashboard.general-ledger');
    }
}
