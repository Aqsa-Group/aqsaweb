<?php

namespace App\Livewire\Management;

use App\Models\Management\Employee;
use App\Models\Management\Safe;
use App\Models\Management\Withdraw;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Livewire\WithPagination;

class Withdraws extends Component
{
    use WithPagination;

    protected $paginationTheme = 'tailwind';

    // Form Properties
    public $withdraw_id;
    public $amount;
    public $currency = 'AFN';
    public $expensess_type;
    public $employee_id;
    public $date;
    public $description;
    public $search = '';

    // Safe Properties
    public $safe;

    // Statistics
    public $todayTotal = 0;
    public $weekTotal = 0;
    public $monthTotal = 0;
    public $overallTotal = 0;

    // Available expense types
    public $expenseTypes = [
        'Salary',
        'Office Supplies',
        'Utilities',
        'Maintenance',
        'Travel',
        'Marketing',
        'Equipment',
        'Raw Materials',
        'Transportation',
        'Other'
    ];

    // Validation Rules
    protected $rules = [
        'amount' => 'required|numeric|min:0.01',
        'currency' => 'required|in:AFN,USD',
        'expensess_type' => 'required|string|max:255',
        'employee_id' => 'required|exists:panel_users,id',
        'date' => 'required|date',
        'description' => 'nullable|string|max:500',
    ];

    // Initialize component
    public function mount()
    {
        $this->date = now()->format('Y-m-d');
        $this->loadSafe();
        $this->calculateStatistics();
    }

    // Load safe data
    public function loadSafe()
    {
        $this->safe = Safe::first();
        if (!$this->safe) {
            $this->safe = Safe::create([
                'afn' => 0,
                'usd' => 0
            ]);
        }
    }

    // Calculate statistics
    public function calculateStatistics()
    {
        $timezone = 'Asia/Kabul';
        $now = Carbon::now($timezone);

        // Today
        $todayStart = $now->copy()->startOfDay();
        $todayEnd   = $now->copy()->endOfDay();
        $todayWithdrawals = Withdraw::whereBetween('date', [$todayStart, $todayEnd])->get();
        $this->todayTotal = $todayWithdrawals->sum('amount');

        // This week
        $weekStart = $now->copy()->startOfWeek(); // شنبه یا یکشنبه بسته به تنظیمات لاراول
        $weekEnd   = $now->copy()->endOfWeek();
        $weekWithdrawals = Withdraw::whereBetween('date', [$weekStart, $weekEnd])->get();
        $this->weekTotal = $weekWithdrawals->sum('amount');

        // This month
        $monthStart = $now->copy()->startOfMonth();
        $monthEnd   = $now->copy()->endOfMonth();
        $monthWithdrawals = Withdraw::whereBetween('date', [$monthStart, $monthEnd])->get();
        $this->monthTotal = $monthWithdrawals->sum('amount');

        // Overall
        $this->overallTotal = Withdraw::sum('amount');
    }

    // Reset form
    public function resetForm()
    {
        $this->reset([
            'withdraw_id',
            'amount',
            'currency',
            'expensess_type',
            'employee_id',
            'date',
            'description',
        ]);
        $this->date = now()->format('Y-m-d');
        $this->resetValidation();
    }

    // Check if safe has enough balance (اختیاری - برای اطلاع رسانی)
    private function hasEnoughBalance($amount, $currency)
    {
        if ($currency === 'AFN') {
            return $this->safe->afn >= $amount;
        } else {
            return $this->safe->usd >= $amount;
        }
    }

    // Update safe balance - تغییر برای اجازه منفی شدن
    private function updateSafeBalance($amount, $currency, $operation = 'subtract')
    {
        if ($currency === 'AFN') {
            if ($operation === 'subtract') {
                $this->safe->afn -= $amount; // حذف max(0, ...) برای اجازه منفی شدن
            } else {
                $this->safe->afn += $amount;
            }
        } else {
            if ($operation === 'subtract') {
                $this->safe->usd -= $amount; // حذف max(0, ...) برای اجازه منفی شدن
            } else {
                $this->safe->usd += $amount;
            }
        }
        $this->safe->save();
        $this->loadSafe();
    }

    // Store new withdraw - حذف شرط بررسی موجودی
    public function store()
    {
        $this->validate();

        // حذف شرط بررسی موجودی
        // if (!$this->hasEnoughBalance($this->amount, $this->currency)) {
        //     session()->flash('error', 'Insufficient balance in safe!');
        //     return;
        // }

        // Create withdraw record
        $withdraw = Withdraw::create([
            'amount' => $this->amount,
            'currency' => $this->currency,
            'expansess_type' => $this->expensess_type,
            'employee_id' => $this->employee_id,
            'date' => $this->date,
            'description' => $this->description,
        ]);

        // Update safe balance
        $this->updateSafeBalance($this->amount, $this->currency, 'subtract');

        // Recalculate statistics
        $this->calculateStatistics();

        // نمایش پیام هشدار اگر موجودی منفی شد
        if (($this->currency === 'AFN' && $this->safe->afn < 0) ||
            ($this->currency === 'USD' && $this->safe->usd < 0)
        ) {
            session()->flash('warning', 'Withdrawal recorded successfully! Safe balance is now negative.');
        } else {
            session()->flash('success', 'Withdrawal recorded successfully!');
        }

        $this->resetForm();
    }

    // Edit withdraw
    public function edit($id)
    {
        $withdraw = Withdraw::findOrFail($id);

        $this->withdraw_id = $withdraw->id;
        $this->amount = $withdraw->amount;
        $this->currency = $withdraw->currency;
        $this->expensess_type = $withdraw->expansess_type;
        $this->employee_id = $withdraw->employee_id;
        $this->date = $withdraw->date;
        $this->description = $withdraw->description;
    }

    // Update withdraw - حذف شرط بررسی موجودی
    public function update()
    {
        $this->validate();

        $withdraw = Withdraw::findOrFail($this->withdraw_id);

        // First, return the old amount to safe
        $this->updateSafeBalance($withdraw->amount, $withdraw->currency, 'add');

        // حذف شرط بررسی موجودی برای مقدار جدید
        // if (!$this->hasEnoughBalance($this->amount, $this->currency)) {
        //     // Revert the addition
        //     $this->updateSafeBalance($withdraw->amount, $withdraw->currency, 'subtract');
        //     session()->flash('error', 'Insufficient balance in safe!');
        //     return;
        // }

        // Update withdraw record
        $withdraw->update([
            'amount' => $this->amount,
            'currency' => $this->currency,
            'expansess_type' => $this->expensess_type,
            'employee_id' => $this->employee_id,
            'date' => $this->date,
            'description' => $this->description,
        ]);

        // Deduct new amount from safe
        $this->updateSafeBalance($this->amount, $this->currency, 'subtract');

        // Recalculate statistics
        $this->calculateStatistics();

        // نمایش پیام هشدار اگر موجودی منفی شد
        if (($this->currency === 'AFN' && $this->safe->afn < 0) ||
            ($this->currency === 'USD' && $this->safe->usd < 0)
        ) {
            session()->flash('warning', 'Withdrawal updated successfully! Safe balance is now negative.');
        } else {
            session()->flash('success', 'Withdrawal updated successfully!');
        }

        $this->resetForm();
    }

    // Delete withdraw
    public function delete($id)
    {
        $withdraw = Withdraw::findOrFail($id);

        // Return amount to safe
        $this->updateSafeBalance($withdraw->amount, $withdraw->currency, 'add');

        // Delete withdraw record
        $withdraw->delete();

        // Recalculate statistics
        $this->calculateStatistics();

        // Reset to first page if no records on current page
        if (Withdraw::count() <= (($this->getPage() - 1) * 10) && $this->getPage() > 1) {
            $this->previousPage();
        }

        session()->flash('success', 'Withdrawal deleted successfully!');
    }

    // Reset pagination on search
    public function updatingSearch()
    {
        $this->resetPage();
    }

    // Render component
    public function render()
    {
        $withdraws = Withdraw::where(function ($query) {
            $query->where('expansess_type', 'like', '%' . $this->search . '%')
                ->orWhere('description', 'like', '%' . $this->search . '%')
                ->orWhereHas('employee', function ($q) {
                    $q->where('name', 'like', '%' . $this->search . '%')
                        ->orWhere('lastname', 'like', '%' . $this->search . '%');
                });
        })
            ->with('employee')
            ->latest()
            ->paginate(10);

        return view('livewire.management.withdraws', [
            'withdraws' => $withdraws,
            'employees' => Employee::orderBy('name')->get(),
        ]);
    }
}
