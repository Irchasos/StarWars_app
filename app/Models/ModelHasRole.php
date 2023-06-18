<?php

declare(strict_types=1);
/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * Class ModelHasRole
 *
 * @property int $role_id
 * @property string $model_type
 * @property int $model_id
 *
 * @property Role $role
 *
 * @package App\Models
 */
class ModelHasRole extends Model
{
    public $incrementing = false;
    public $timestamps = false;
    protected $table = 'model_has_roles';
    protected $casts = [
        'role_id' => 'int',
        'model_id' => 'int'
    ];

    public function role(): BelongsTo
    {
        return $this->belongsTo(Role::class);
    }
}
