<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Guest extends Model
{
    use HasFactory, HasUuids;

    protected $fillable = [
        'name',
        'email',
        'adult',
        'booking_id',
        'user_id',
    ];

    protected $casts = [
        'adult' => 'boolean',
    ];

    public function booking(): BelongsTo
    {
        return $this->belongsTo(
            related: Booking::class,
            foreignKey: 'booking_id'
        );
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(
            related: User::class,
            foreignKey: 'user_id'
        );
    }
}
