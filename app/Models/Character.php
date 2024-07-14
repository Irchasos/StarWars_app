<?php

declare(strict_types=1);
/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\MorphMany;

/**
 * Class Character
 *
 * @property int $id
 * @property string $name
 * @property int $planet_id
 * @property int $kind_id
 * @property string $birth_year
 * @property string $eye_color
 * @property string $gender
 * @property string $hair_color
 * @property string $height
 * @property string $mass
 * @property string|null $url
 * @property string $skin_color
 * @property string|null $photo
 *
 * @property Kind $kind
 * @property Planet $planet
 * @property Collection|Film[] $films
 * @property Collection|Starship[] $starships
 * @property Collection|Vehicle[] $vehicles
 *
 * @package App\Models
 */
class Character extends Model
{
    protected $table = 'characters';
    public $timestamps = false;

    protected $casts = [
        'planet_id' => 'int',
        'kind_id' => 'int'
    ];

    protected $fillable = [
        'name',
        'planet_id',
        'kind_id',
        'birth_year',
        'eye_color',
        'gender',
        'hair_color',
        'height',
        'mass',
        'url',
        'skin_color',
        'photo',
        'kind',
        'description'
    ];

    public function kind(): BelongsTo
    {
        return $this->belongsTo(Kind::class);
    }

    public function planet(): BelongsTo
    {
        return $this->belongsTo(Planet::class);
    }

    public function films(): BelongsToMany
    {
        return $this->belongsToMany(Film::class)
            ->withPivot('id');
    }

    public function starships(): BelongsToMany
    {
        return $this->belongsToMany(Starship::class)
            ->withPivot('id');
    }

    public function vehicles(): BelongsToMany
    {
        return $this->belongsToMany(Vehicle::class)
            ->withPivot('id');
    }

    public function photos(): MorphMany
    {
        return $this->morphMany(Photo::class, 'photoable');
    }
}
