<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Meetings extends Model
{


    protected $table = 'meetings';

    // Cast the 'social' column to an array
    protected $casts = [
        'meeting_idea_en' => 'array',
        'meeting_idea_ar' => 'array',

    ];
}
