<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * Class FilmVehicle
 *
 * @property int $id
 * @property int $film_id
 * @property int $vehicle_id
 *
 * @property Film $film
 * @property Vehicle $vehicle
 *
 * @package App\Models
 */
class FilmVehicle extends Model
{
    public $timestamps = false;
    protected $table = 'film_vehicle';
    protected $casts = [
        'film_id' => 'int',
        'vehicle_id' => 'int'
    ];

    protected $fillable = [
        'film_id',
        'vehicle_id'
    ];

    public function film():BelongsTo
    {
        return $this->belongsTo(Film::class);
    }

    public function vehicle():BelongsTo
    {
        return $this->belongsTo(Vehicle::class);
    }
}
