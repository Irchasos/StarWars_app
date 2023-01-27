<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * Class CharacterFilm
 *
 * @property int $id
 * @property int $character_id
 * @property int $film_id
 *
 * @property Character $character
 * @property Film $film
 *
 * @package App\Models
 */
class CharacterFilm extends Model
{
    public $timestamps = false;
    protected $table = 'character_film';
    protected $casts = [
        'character_id' => 'int',
        'film_id' => 'int'
    ];

    protected $fillable = [
        'character_id',
        'film_id'
    ];

    public function character():BelongsTo
    {
        return $this->belongsTo(Character::class);
    }

    public function film():BelongsTo
    {
        return $this->belongsTo(Film::class);
    }
}
