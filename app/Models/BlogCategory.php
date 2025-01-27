<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogCategory extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_name',
        'slug',
    ];

    // Relasi ke Blogs
    public function blogs()
    {
        return $this->hasMany(Blog::class);
    }
}
