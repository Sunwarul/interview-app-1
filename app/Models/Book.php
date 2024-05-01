<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
    protected $fillable = [
        'title', 'writer_id', 'cover_image', 'price', 'tags',
    ];

    protected $casts = [
        'tags' => 'json',
    ];
}
