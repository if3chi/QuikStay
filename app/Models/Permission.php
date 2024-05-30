<?php

namespace App\Models;

use DirectoryTree\Authorization\Traits\ClearsCachedPermissions;
use DirectoryTree\Authorization\Traits\HasRoles;
use DirectoryTree\Authorization\Traits\HasUsers;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

final class Permission extends Model
{
    use ClearsCachedPermissions, HasFactory, HasRoles, HasUsers, HasUuids;

    protected $fillable = [
        'name',
        'label',
    ];
}
