<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $fillable = [
        'username', 'full_name', 'email', 'institusi', 'country',
        'phone', 'payment', 'register_as', 'paper_id',
    ];
}
