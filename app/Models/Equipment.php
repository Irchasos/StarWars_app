<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;
class Equipment extends Model
{
    protected $table = 'equipment';
    public $timestamps = false;
    use Searchable;

    use HasFactory;
    public function users(): \Illuminate\Database\Eloquent\Relations\BelongsToMany
    {
        return $this->belongsToMany(User::class)->withTimestamps();
    }
    public function searchableAs(): string
    {
        return 'posts_index';
    }

}
