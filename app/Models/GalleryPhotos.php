<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class GalleryPhotos extends Model
{
    protected $fillable = [
        'album_id',
        'image',
        'caption',
        'created_at',
        'updated_at',
    ];

    public function album(): BelongsTo
    {
        return $this->belongsTo(GalleryAlbums::class);
    }
}
