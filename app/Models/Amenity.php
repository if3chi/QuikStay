<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Amenity extends Model
{
    use HasFactory, HasUuids;

    /** @var array<int, string> */
    protected $fillable = [
        'name',
        'icon',
        'label',
        'description',
    ];

    /** @return BelongsToMany<Room> */
    public function rooms(): BelongsToMany
    {
        return $this->belongsToMany(
            related: Room::class,
            table: 'amenity_room',
        );
    }
}
