<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'title',
        'description',
        'start_date',
        'end_date',
        'project_url',
        'github_url',
    ];

    // Relasi ke User
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Relasi ke Project Images
    public function images()
    {
        return $this->hasMany(ProjectImage::class);
    }

    // Relasi ke Tech Stacks
    public function techStacks()
    {
        return $this->hasMany(TechStack::class);
    }
}
