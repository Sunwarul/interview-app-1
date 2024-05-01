<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class Book extends Model
{
    use HasFactory;
    protected $fillable = [
        'title', 'writer_id', 'cover_image', 'price', 'tags',
    ];

    protected function casts()
    {
        return [
            'tags' => 'json',
            'created_at' => 'datetime:d F, Y h:i:a',
            'updated_at' => 'datetime:d F, Y h:i:a',
        ];
    }

    public function writer()
    {
        return $this->belongsTo(Writer::class);
    }
}
