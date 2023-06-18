<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * Class FilmStarship
 *
 * @property int $id
 * @property int $film_id
 * @property int $starship_id
 *
 * @property Film $film
 * @property Starship $starship
 *
 * @package App\Models
 */
class FilmStarship extends Model
{
    public $timestamps = false;
    protected $table = 'film_starship';
    protected $casts = [
        'film_id' => 'int',
        'starship_id' => 'int'
    ];

    protected $fillable = [
        'film_id',
        'starship_id'
    ];

    public function film(): BelongsTo
    {
        return $this->belongsTo(Film::class);
    }

    public function starship(): BelongsTo
    {
        return $this->belongsTo(Starship::class);
    }
}
