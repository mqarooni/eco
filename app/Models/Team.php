<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    protected $table = 'team';

    // Cast the 'social' column to an array
    protected $casts = [
        'social' => 'array',
        'rating_en' => 'array',
        'rating_ar' => 'array',
    ];
}
