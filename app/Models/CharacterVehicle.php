<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * Class CharacterVehicle
 *
 * @property int $id
 * @property int $character_id
 * @property int $vehicle_id
 *
 * @property Character $character
 * @property Vehicle $vehicle
 *
 * @package App\Models
 */
class CharacterVehicle extends Model
{
    public $timestamps = false;
    protected $table = 'character_vehicle';
    protected $casts = [
        'character_id' => 'int',
        'vehicle_id' => 'int'
    ];

    protected $fillable = [
        'character_id',
        'vehicle_id'
    ];

    public function character():BelongsTo
    {
        return $this->belongsTo(Character::class);
    }

    public function vehicle():BelongsTo
    {
        return $this->belongsTo(Vehicle::class);
    }
}
