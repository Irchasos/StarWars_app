<?php

declare(strict_types=1);
/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * Class Role
 *
 * @property int $id
 * @property string $name
 * @property string $guard_name
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @property Collection|ModelHasRole[] $model_has_roles
 * @property Collection|Permission[] $permissions
 *
 * @package App\Models
 */
class Role extends Model
{
    protected $table = 'roles';

    protected $fillable = [
        'name',
        'guard_name'
    ];

    public function model_has_roles(): HasMany
    {
        return $this->hasMany(ModelHasRole::class);
    }

    public function permissions(): BelongsToMany
    {
        return $this->belongsToMany(Permission::class, 'role_has_permissions');
    }
}
