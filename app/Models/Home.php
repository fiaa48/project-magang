<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Home extends Model
{
    protected $table = 'home';

    protected $fillable = [
        'hero_title',
        'hero_description',
        'hero_specialist',

        'about_desc_1',
        'about_desc_2',

        'background_desc_1',
        'background_desc_2',
        'background_list',

        'experience_years',
        'projects_done',
        'certifications',
        'experts',

        'cta_title',
        'cta_description',
    ];

    protected $casts = [
        'background_list' => 'array',
    ];
}
