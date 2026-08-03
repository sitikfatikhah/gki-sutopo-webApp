<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Events extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'thumbnail',
        'description',
        'location',
        'location',
        'end_datetime',
        'registration_required',
        'max_participant',
        'created_at',
        'updated_at',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
