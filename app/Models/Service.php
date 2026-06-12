<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $table = 'services';

    protected $fillable = [
        'section',
        'category',
        'data'
    ];

    protected $casts = [
        'data' => 'array',
    ];

}
