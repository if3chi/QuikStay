<?php

namespace App\Models;

use Carbon\CarbonInterface;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * @property string $id
 * @property string $name
 * @property string $label
 * @property null|string $description
 * @property null|CarbonInterface $created_at
 * @property null|CarbonInterface $updated_at
 */
final class Building extends Model
{
    use HasFactory, HasUuids;

    /** @var array<int, string> */
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
