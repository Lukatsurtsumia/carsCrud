<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cars extends Model
{
    protected $fillable = [
        'image',
        'name',
        'price',
        'age',
        'user_id'
    ];
}
