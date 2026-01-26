<?php

namespace App\Models\Management;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class EmployeeReports extends Model
{
    use HasFactory;

    protected $table = 'employee_reports';

   
    protected $fillable = [
        'user_id',
        'title',
        'description',
        'file',
        'date',
    ];

    protected $casts = [
        'date' => 'date',
    ];

   
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
