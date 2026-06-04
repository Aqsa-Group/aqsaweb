<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserInformation extends Model
{
    protected $connection = 'second_db';
    protected $table = 'user_information';

    protected $fillable = [
        'business_name',
        'business_type',
        'category',
        'contact_person',
        'business_description',
        'whatsapp_number',
        'phone_number',
        'third_number',
        'city',
        'address',
    ];
}