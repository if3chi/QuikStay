<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

final class Building extends Model
{
    use HasFactory, HasUuids;

    protected $fillable = [
        'name',
        'label',
        'description',
    ];

    public function floors(): HasMany
    {
        return $this->hasMany(
            related: Floor::class,
            foreignKey: 'building_id'
        );
    }
}
