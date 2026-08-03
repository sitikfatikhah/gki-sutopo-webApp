<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class leaders extends Model
{
    protected $fillable = [
        'name',
        'position',
        'photo',
        'biography',
        'order_number',
        'is_active',
        'created_at',
        'updated_at'
    ];
}
