<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cartorder extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'status',
        'cost',
        'code',
        'products',
        'user',
        'date',
    ];
}
