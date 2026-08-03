<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GalleryAlbums extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'cover',
        'description',
        'event_date',
        'created_at',
        'updated_at',
    ];

    public function photos()
    {
        return $this->hasMany(GalleryPhotos::class, 'album_id');
    }
}
