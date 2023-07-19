<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Paper extends Model
{
    protected $fillable = [
        'username', 'paper_code', 'full_name', 'tittle', 'email', 'paper_file',
        'co_authors_email', 'institusi', 'office_adress', 'research_area',
    ];
}
