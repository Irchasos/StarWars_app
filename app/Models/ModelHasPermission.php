<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * Class ModelHasPermission
 *
 * @property int $permission_id
 * @property string $model_type
 * @property int $model_id
 *
 * @property Permission $permission
 *
 * @package App\Models
 */
class ModelHasPermission extends Model
{
    public $incrementing = false;
    public $timestamps = false;
    protected $table = 'model_has_permissions';
    protected $casts = [
        'permission_id' => 'int',
        'model_id' => 'int'
    ];

    public function permission():BelongsTo
    {
        return $this->belongsTo(Permission::class);
    }
}
