<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Home extends Model
{
    protected $fillable = [
        'main_title', 'main_paragraph', 'main_image',
        'card1_title','card1_paragraph',
        'card2_title','card2_paragraph',
        'card3_title','card3_paragraph',
        'client_image'
    ];
}
