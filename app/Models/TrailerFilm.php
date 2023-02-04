<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class TrailerFilm extends Model
{
    use HasFactory;

    protected $table = 'trailer_film';
    public $timestamps = false;
    protected $fillable = [
        'id',
        'film_id',
        'path',

    ];

    public function film(): BelongsTo
    {
        return $this->belongsTo(Film::class);
    }
}
