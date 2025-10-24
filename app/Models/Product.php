<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'full_name',
        'price',
        'brand',
        'type',
        'max_value',
        'status',
        'shortName',
    ];
}
