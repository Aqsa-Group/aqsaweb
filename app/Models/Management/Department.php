<?php

namespace App\Models\Management;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    protected $table = 'departments'; 

    protected $fillable = [
        'name',
        'coach',
        'members_number',
    ];
}
