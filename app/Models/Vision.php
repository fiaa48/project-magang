<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vision extends Model
{
    protected $fillable = [
        'vision',
        'missions',
        'values'
    ];

    protected $casts = [
        'missions' => 'array',
        'values' => 'array'
    ];
}
