<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class NewsCategories extends Model
{
    protected $fillable = [
        'name',
        'slug',
        'created_at',
        'updated_at',
    ];

    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];

    public function news()
    {
        return $this->hasMany(News::class, 'category_id');
    }
}
