<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TechStack extends Model
{
    use HasFactory;

    protected $fillable = [
        'project_id',
        'technology_name',
    ];

    // Relasi ke Project
    public function project()
    {
        return $this->belongsTo(Project::class);
    }
}
