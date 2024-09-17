<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Festivals extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'slug', 
        'image', 
        'title_en', 
        'title_ar', 
        'overview_en', 
        'overview_ar', 
        'requirments_en', 
        'requirments_ar', 
        'time_en', 
        'time_ar', 
        'date_en', 
        'date_ar', 
        'phone_en', 
        'phone_ar', 
        'catagory_en', 
        'catagory_ar', 
        'location_en', 
        'location_ar'
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'requirments_en' => 'array',
        'requirments_ar' => 'array',
    ];

    /**
     * Boot the model.
     */
    protected static function boot()
    {
        parent::boot();

        // Auto-generate slug when creating or updating a festival
        static::saving(function ($festival) {
            if (!$festival->slug) {
                $slug = Str::slug($festival->title_en, '-');
                $count = Festivals::where('slug', 'LIKE', "{$slug}%")->count();

                $festival->slug = $count ? "{$slug}-{$count}" : $slug;
            }
        });
    }
}
