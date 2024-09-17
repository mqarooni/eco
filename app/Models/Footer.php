<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Footer extends Model
{
    protected $table = 'footer';

    // Specify the fields to be cast as JSON
    protected $casts = [
        'useful_links' => 'array',
        'social_channels' => 'array',
        'general_logos' => 'array',
    ];

    protected $fillable = [
        'custom_title_en',
        'custom_title_ar',
        'custom_content_en',
        'custom_content_ar',
        'useful_links',
        'social_channels',
        'general_logos',
        'copyrights_en',
        'copyrights_ar',
    ];
}
