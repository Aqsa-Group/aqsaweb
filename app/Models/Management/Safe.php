<?php

namespace App\Models\Management;

use Illuminate\Database\Eloquent\Model;

class Safe extends Model
{
       
    protected $table = 'safes';

    protected $fillable = [
        'afn',
        'usd',
    ];

    protected $casts = [
        'afn' => 'decimal:2',
        'usd' => 'decimal:2',
    ];
}
