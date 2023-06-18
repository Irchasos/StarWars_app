<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * Class FilmPlanet
 *
 * @property int $id
 * @property int $film_id
 * @property int $planet_id
 *
 * @property Film $film
 * @property Planet $planet
 *
 * @package App\Models
 */
class FilmPlanet extends Model
{
    public $timestamps = false;
    protected $table = 'film_planet';
    protected $casts = [
        'film_id' => 'int',
        'planet_id' => 'int'
    ];

    protected $fillable = [
        'film_id',
        'planet_id'
    ];

    public function film(): BelongsTo
    {
        return $this->belongsTo(Film::class);
    }

    public function planet(): BelongsTo
    {
        return $this->belongsTo(Planet::class);
    }
}
