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
 * Class Vehicle
 *
 * @property int $id
 * @property string $name
 * @property string $model
 * @property string $vehicle_class
 * @property string $manufacturer
 * @property string $length
 * @property string $cost_in_credits
 * @property string $crew
 * @property string $passengers
 * @property string $max_atmosphering_speed
 * @property string $cargo_capacity
 * @property string $consumables
 * @property string $url
 *
 * @property Collection|Character[] $characters
 * @property Collection|Film[] $films
 *
 * @package App\Models
 */
class Vehicle extends Model
{
    protected $table = 'vehicles';
    public $timestamps = false;

    protected $fillable = [
        'name',
        'model',
        'vehicle_class',
        'manufacturer',
        'length',
        'cost_in_credits',
        'crew',
        'passengers',
        'max_atmosphering_speed',
        'cargo_capacity',
        'consumables',
        'url'
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
