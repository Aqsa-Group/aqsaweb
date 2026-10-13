<?php

namespace App\Livewire\AdminDashboard;

use Livewire\Component;

class VendorManagement extends Component
{
    public bool $showForm = false;

    public array $vendors = [
        [
            'supplier' => 'Kabul Office supplies',
            'contact' => 'Najib Shahan',
            'phone' => '0789653421',
            'tax' => '456789123',
            'email' => 'Sales@kabulsupplies.af',
            'date' => '1 Feb, 2020',
        ],
        [
            'supplier' => 'Afghan Transport Service',
            'contact' => 'Hamid Wardak',
            'phone' => '0785653421',
            'tax' => '345789123',
            'email' => 'info@ats.af',
            'date' => '14 Feb, 2020',
        ],
        [
            'supplier' => 'Tech Solution LTD',
            'contact' => 'Ahmad Mirzaei',
            'phone' => '0789653421',
            'tax' => '456789123',
            'email' => 'Sales@techsol.af',
            'date' => '1 Mar, 2020',
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
        return view('livewire.admin-dashboard.vendor-management');
    }
}
