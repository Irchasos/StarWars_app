<?php

declare(strict_types=1);
/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\MorphMany;

/**
 * Class Starship
 *
 * @property int $id
 * @property string|null $MGLT
 * @property string|null $cargo_capacity
 * @property string|null $consumables
 * @property string|null $cost_in_credits
 * @property string|null $crew
 * @property string|null $hyperdrive_rating
 * @property string|null $length
 * @property string|null $manufacturer
 * @property string|null $max_atmosphering_speed
 * @property string $model
 * @property string $name
 * @property string|null $starship_class
 * @property string|null $url
 * @property string|null $passengers
 *
 * @property Collection|Character[] $characters
 * @property Collection|Film[] $films
 *
 * @package App\Models
 */
class Starship extends Model
{
    protected $table = 'starships';
    public $timestamps = false;

    protected $fillable = [
        'MGLT',
        'cargo_capacity',
        'consumables',
        'cost_in_credits',
        'crew',
        'hyperdrive_rating',
        'length',
        'manufacturer',
        'max_atmosphering_speed',
        'model',
        'name',
        'starship_class',
        'url',
        'passengers'
    ];

    public function characters(): BelongsToMany
    {
        return $this->belongsToMany(Character::class)
            ->withPivot('id');
    }

    public function films(): BelongsToMany
    {
        return $this->belongsToMany(Film::class)
            ->withPivot('id');
    }
    public function photos(): MorphMany
    {
        return $this->morphMany(Photo::class, 'photoable');
    }
}
