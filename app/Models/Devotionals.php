<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Devotionals extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'thumbnail',
        'bible_verse',
        'published_at',
        'author_id',
        'status',
        'views',
        'created_at',
        'updated_at',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
