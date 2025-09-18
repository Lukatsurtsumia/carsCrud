<?php

namespace App\Models;
use Illuminate\Support\Facades\File;
use Illuminate\Database\Eloquent\Model;
 
use App\Models\User;

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
 