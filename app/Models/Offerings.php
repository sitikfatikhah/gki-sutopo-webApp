<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Offerings extends Model
{
    protected $fillable = [
        'member_id',
        'category',
        'amount',
        'offering_date',
        'method',
        'receipt_number',
        'status',
        'note',
        'created_at',
        'updated_at',
    ];

    public function member(): BelongsTo
    {
        return $this->belongsTo(Members::class);
    }
}
