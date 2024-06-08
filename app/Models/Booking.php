<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

final class Booking extends Model
{
    use HasFactory, HasUuids;

    protected $fillable = [
        'cost',
        'room_id',
        'user_id',
        'starts_at',
        'ends_at',
    ];

    protected $casts = [
        'cost' => 'float',
        'starts_at' => 'datetime',
        'ends_at' => 'datetime',
    ];

    public function guests(): HasMany
    {
        return $this->hasMany(
            related: Guest::class,
            foreignKey: 'booking_ig'
        );
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(
            related: User::class,
            foreignKey: 'user_id'
        );
    }

    public function room(): BelongsTo
    {
        return $this->belongsTo(
            related: Room::class,
            foreignKey: 'room_id'
        );
    }
}
