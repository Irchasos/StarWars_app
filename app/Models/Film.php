<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\MorphMany;

/**
 * Class Film
 *
 * @property int $id
 * @property string $title
 * @property string $episode_id
 * @property string $opening_crawl
 * @property string $director
 * @property string $producer
 * @property string $release_date
 * @property string $url
 *
 * @property Collection|Character[] $characters
 * @property Collection|Kind[] $kinds
 * @property Collection|Planet[] $planets
 * @property Collection|Starship[] $starships
 * @property Collection|Vehicle[] $vehicles
 *
 * @package App\Models
 */
class Film extends Model
{
    protected $table = 'films';
    public $timestamps = false;

    protected $fillable = [
        'title',
        'episode_id',
        'opening_crawl',
        'director',
        'producer',
        'release_date',
        'url'
    ];

    public function characters(): BelongsToMany
    {
        return $this->belongsToMany(Character::class)
            ->withPivot('id');
    }
    public function trailers(): hasMany
    {
        return $this->hasMany(TrailerFilm::class);

    }

    public function kinds(): BelongsToMany
    {
        return $this->belongsToMany(Kind::class)
            ->withPivot('id');
    }

    public function planets(): BelongsToMany
    {
        return $this->belongsToMany(Planet::class)
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
