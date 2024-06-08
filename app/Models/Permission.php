<?php

namespace App\Models;

use Carbon\CarbonInterface;
use DirectoryTree\Authorization\Traits\ClearsCachedPermissions;
use DirectoryTree\Authorization\Traits\HasRoles;
use DirectoryTree\Authorization\Traits\HasUsers;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property string $id
 * @property string $name
 * @property string $label
 * @property null|CarbonInterface $created_at
 * @property null|CarbonInterface $updated_at
 */
final class Permission extends Model
{
    use ClearsCachedPermissions, HasFactory, HasRoles, HasUsers, HasUuids;

    /** @var array<int, string> */
    protected $fillable = [
        'name',
        'label',
    ];
}
