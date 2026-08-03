<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WorshipSchedules extends Model
{
    protected $fillable = [
        'title',
        'category',
        'worship_day',
        'worship_time',
        'location',
        'preacher',
        'description',
        'is_active',
        'created_at',
        'updated_at',
    ];
}
