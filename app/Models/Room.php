<?php

namespace App\Models;

use App\Enums\RoomType;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
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
            'size' => 'integer',
            'daily_rate' => 'integer',
            'weekly_rate' => 'integer',
        ];
    }

    /** @return BelongsToMany<Amenity> */
    public function amenities(): BelongsToMany
    {
        return $this->belongsToMany(
            related: Amenity::class,
            table: 'amenity_room',
        );
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
