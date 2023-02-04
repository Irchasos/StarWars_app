<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * Class FilmKind
 *
 * @property int $id
 * @property int $film_id
 * @property int $kind_id
 *
 * @property Film $film
 * @property Kind $kind
 *
 * @package App\Models
 */
class FilmKind extends Model
{
    public $timestamps = false;
    protected $table = 'film_kind';
    protected $casts = [
        'film_id' => 'int',
        'kind_id' => 'int'
    ];

    protected $fillable = [
        'film_id',
        'kind_id'
    ];

    public function film():BelongsTo
    {
        return $this->belongsTo(Film::class);
    }

    public function kind():BelongsTo
    {
        return $this->belongsTo(Kind::class);
    }
}
