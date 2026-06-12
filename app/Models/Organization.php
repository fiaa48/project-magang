<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Organization extends Model
{
    protected $fillable = [
        'category',
        'name',
        'position',
        'shares',
        'value'
    ];
}
