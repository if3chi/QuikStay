<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

final class Floor extends Model
{
    use HasFactory, HasUuids;

    protected $fillable = [
        'name',
        'label',
        'description',
        'building_id',
    ];

    public function building(): BelongsTo
    {
        return $this->belongsTo(
            related: Building::class,
            foreignKey: 'building_id'
        );
    }

    public function rooms(): HasMany
    {
        return $this->hasMany(
            related: Room::class,
            foreignKey: 'floor_id'
        );
    }
}
