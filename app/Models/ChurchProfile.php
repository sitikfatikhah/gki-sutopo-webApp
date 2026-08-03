<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ChurchProfile extends Model
{
    protected $fillable = [
        'church_name',
        'vision',
        'mission',
        'history',
        'address',
        'phone',
        'email',
        'website',
        'latitude',
        'longitude',
        'logo',
        'favicon',
        'banner',
        'created_at',
        'updated_at',
    ];
}
