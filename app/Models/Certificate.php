<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Certificate extends Model
{
    protected $fillable = [
        'name',
        'type',
        'year',
        'image',
        'certificate_number',
        'valid_until'
    ];
}
