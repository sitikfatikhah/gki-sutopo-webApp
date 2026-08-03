<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Attendance extends Model
{
    protected $fillable = [
        'member_id',
        'worship_schedule_id',
        'attendance_date',
        'checkin_time',
        'checkout_time',
        'attendance_status',
        'note',
        'created_at',
        'updated_at',
    ];

    public function member(): BelongsTo
    {
        return $this->belongsTo(Members::class);
    }
    public function worship_schedule(): BelongsTo
    {
        return $this->belongsTo(anpotrus ::class);
    }
}


