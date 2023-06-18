<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * Class CharacterStarship
 *
 * @property int $id
 * @property int $character_id
 * @property int $starship_id
 *
 * @property Character $character
 * @property Starship $starship
 *
 * @package App\Models
 */
class CharacterStarship extends Model
{
    protected $table = 'character_starship';
    public $timestamps = false;

    protected $casts = [
        'character_id' => 'int',
        'starship_id' => 'int'
    ];

    protected $fillable = [
        'character_id',
        'starship_id'
    ];

    public function character(): BelongsTo
    {
        return $this->belongsTo(Character::class);
    }

    public function starship(): BelongsTo
    {
        return $this->belongsTo(Starship::class);
    }
}
