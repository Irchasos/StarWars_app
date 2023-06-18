<?php

declare(strict_types=1);
/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * Class RoleHasPermission
 *
 * @property int $permission_id
 * @property int $role_id
 *
 * @property Permission $permission
 * @property Role $role
 *
 * @package App\Models
 */
class RoleHasPermission extends Model
{
    public $incrementing = false;
    public $timestamps = false;
    protected $table = 'role_has_permissions';
    protected $casts = [
        'permission_id' => 'int',
        'role_id' => 'int'
    ];

    public function permission(): BelongsTo
    {
        return $this->belongsTo(Permission::class);
    }

    public function role(): BelongsTo
    {
        return $this->belongsTo(Role::class);
    }
}
