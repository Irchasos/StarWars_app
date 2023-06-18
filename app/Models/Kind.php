<?php

declare(strict_types=1);
/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;

/**
 * Class Kind
 *
 * @property int $id
 * @property string $name
 * @property string $classification
 * @property string $designation
 * @property string $average_height
 * @property string $skin_colors
 * @property string $hair_colors
 * @property string $eye_colors
 * @property string $average_lifespan
 * @property string $language
 * @property string $url
 *
 * @property Collection|Character[] $characters
 * @property Collection|Film[] $films
 *
 * @package App\Models
 */
class Kind extends Model
{
    protected $table = 'kinds';
    public $timestamps = false;

    protected $fillable = [
        'name',
        'classification',
        'designation',
        'average_height',
        'skin_colors',
        'hair_colors',
        'eye_colors',
        'average_lifespan',
        'language',
        'url'
    ];

    public function characters(): HasMany
    {
        return $this->hasMany(Character::class);
    }

    public function films(): BelongsToMany
    {
        return $this->belongsToMany(Film::class)
            ->withPivot('id');
    }

    public function photos(): HasManyThrough
    {
        return $this->hasManyThrough(
            Photo::class,
            Character::class,
            'kind_id',
            'photoable_id'
        );
    }
}
