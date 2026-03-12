<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Project extends Model
{
protected $fillable = [
 'title',
 'slug',
 'category',
 'year',
 'short_description',
 'description',
 'image',
 'client',
 'location',
 'duration',
 'scope',
 'sub_services',
 'certifications',
 'details',
 'tags',
 'testimonial',
 'start_date',
 'end_date',
 'team_size',
 'status'
];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($project) {
            $project->slug = Str::slug($project->title);
        });

        static::updating(function ($project) {
            $project->slug = Str::slug($project->title);
        });
    }

protected $casts = [
    'start_date' => 'date',
    'end_date' => 'date',
    'sub_services' => 'array',
    'certifications' => 'array',
    'details' => 'array',
    'tags' => 'array',
];
}
