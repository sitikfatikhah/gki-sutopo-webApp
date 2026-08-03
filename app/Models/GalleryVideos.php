<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Schema;

class GalleryVideos extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'video_url',
        'thumbnail',
        'description',
        'status',
        'is_featured',
        'published_at',
        'views',
        'created_at',
        'updated_at',
    ];

    protected $casts = [
        'published_at' => 'datetime',
        'is_featured' => 'boolean',
        'views' => 'integer',
    ];

    public function down(): void
    {
        Schema::dropIfExists('gallery_videos');
    }
}
