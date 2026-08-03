<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Announcements extends Model
{
    protected $fillable = [
        'title',
        'content',
        'start_date',
        'end_date',
        'is_active',
        'created_at',
        'updated_at',
    ];
}
