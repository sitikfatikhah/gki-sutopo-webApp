<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ministries extends Model
{
    protected $fillable = [
        'name',
        'icon',
        'banner',
        'description',
        'coordinator',
        'schedule',
        'created_at',
        'updated_at',
    ];
}
