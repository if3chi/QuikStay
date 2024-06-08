<?php

namespace App\Models;

use App\Enums\RoomType;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

final class Room extends Model
{
    use HasFactory, HasUuids;

    /** @var array<int, string> */
    protected $fillable = [
        'name',
        'label',
        'view',
        'type',
        'room_number',
        'description',
        'persons',
        'size',
        'daily_rate',
        'weekly_rate',
        'floor_id',
    ];

    protected function casts(): array
    {
        return [
            'type' => RoomType::class,
            'size' => 'interger',
            'daily_rate' => 'interger',
            'weekly_rate' => 'interger',
        ];
    }

    public function bookings(): HasMany
    {
        return $this->hasMany(
            related: Booking::class,
            foreignKey: 'room_id'
        );
    }

    public function floor(): BelongsTo
    {
        return $this->belongsTo(
            related: Floor::class,
            foreignKey: 'floor_id'
        );
    }
}
