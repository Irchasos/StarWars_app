<?php
declare(strict_types = 1);
/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;

/**
 * Class Photo
 *
 * @property int $id
 * @property string $photoable_type
 * @property int $photoable_id
 * @property string $path
 *
 * @package App\Models
 */
class Photo extends Model
{
    public $timestamps = false;


    protected $fillable = [
        'photoable_type',
        'photoable_id',
        'path',
        'id'
    ];

    public function photoable():MorphTo
    {
        return $this->morphTo();
    }
}
