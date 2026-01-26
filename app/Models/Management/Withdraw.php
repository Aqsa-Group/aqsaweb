<?php

namespace App\Models\Management;

use Illuminate\Database\Eloquent\Model;

use App\Models\Management\Employee;

class Withdraw extends Model
{
    protected $table = 'withdraws';

    protected $fillable = [
        'amount',
        'currency',
        'expansess_type',
        'employee_id',
        'date',
        'description',
    ];

    protected $casts = [
        'amount' => 'decimal:2',
        'date' => 'date',
    ];

    /**
     * Relate withdraw to an employee
     */
    public function employee()
    {
        return $this->belongsTo(Employee::class);
    }
}