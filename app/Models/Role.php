<?php

namespace App\Models;

use DirectoryTree\Authorization\Traits\ManagesPermissions;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

final class Role extends Model
{
    use HasFactory, HasUuids, ManagesPermissions;

    protected $fillable = [
        'name',
        'label',
    ];
}
