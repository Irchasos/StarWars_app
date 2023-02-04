<?php
declare(strict_types = 1);
/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use App\Models\Photo;

/**
 * Class Planet
 *
 * @property int $id
 * @property string $name
 * @property string $rotation_period
 * @property string $orbital_period
 * @property string $diameter
 * @property string $climate
 * @property string $gravity
 * @property string $terrain
 * @property string $surface_water
 * @property string $population
 * @property string|null $url
 *
 * @property Collection|Character[] $characters
 * @property Collection|Film[] $films
 *
 * @package App\Models
 */
class Planet extends Model
{
    protected $table = 'planets';
    public $timestamps = false;

    protected $fillable = [
        'name',
        'rotation_period',
        'orbital_period',
        'diameter',
        'climate',
        'gravity',
        'terrain',
        'surface_water',
        'population',
        'url'
    ];

    public function characters():HasMany
    {
        return $this->hasMany(Character::class);
    }

    public function films():BelongsToMany
    {
        return $this->belongsToMany(Film::class)
            ->withPivot('id');
    }

    public function photos(): MorphMany
    {
        return $this->morphMany(Photo::class, 'photoable');
    }
}
