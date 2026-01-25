<?php

namespace App\Models\Management;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $table = 'employees';

    protected $fillable = [
        'name',
        'lastname',
        'phone',
        'address',
        'gender',
        'age',
        'department',
        'degree',
        'section',
        'contract_start',
        'contract_end',
    ];
}
