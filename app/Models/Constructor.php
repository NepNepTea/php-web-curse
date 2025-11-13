<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Constructor extends Model
{
    protected $fillable = [
        'light',
        'fishTank',
        'wood',
        'stones',
        'hideout',
        'soil',
    ];
}
