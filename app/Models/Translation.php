<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Translation extends Model
{
    protected $table = null;

    public $timestamps = false;
    
    public function save(array $options = [])
    {
        return true;
    }
}


