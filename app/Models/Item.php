<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $fillable = [
        'slug',
        'name',
        'price',
        'description',
        'rating',
        'sold',
        'store',
    ];
}
