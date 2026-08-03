<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class News extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'title',
        'slug',
        'excerpt',
        'thumbnail',
        'content',

        'author_id',
        'category_id',

        'status',
        'published_at',
        'views',

        'is_featured',
        'allow_comment',

        'meta_title',
        'meta_description',
        'meta_keywords',
    ];

    protected $casts = [
        'published_at' => 'datetime',
        'is_featured' => 'boolean',
        'allow_comment' => 'boolean',
        'meta_keywords' => 'array',
        'views' => 'integer',
    ];

    /**
     * Penulis berita.
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'author_id');
    }

    /**
     * Kategori berita.
     */
    public function category(): BelongsTo
    {
        return $this->belongsTo(NewsCategories::class, 'category_id');
    }
}