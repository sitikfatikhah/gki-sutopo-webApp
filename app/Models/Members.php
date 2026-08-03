<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Members extends Model
{
    protected $fillable = [
        'member_number',
        'full_name',
        'gender',
        'birth_place',
        'birth_date',
        'address',
        'phone',
        'email',
        'baptism_date',
        'membership_status',
        'photo',
        'created_at',
        'created_at',
    ];

    public function offerings()
    {
        return $this->hasMany(Offerings::class);
    }
}
