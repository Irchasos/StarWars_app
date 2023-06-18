<?php

namespace App\Repositories;

use App\Models\Film;

class FilmRepository implements FilmInterface
{
    protected $planet = null;

    public function getAllFilms(): object
    {
        return Film::all();
    }

    public function getFilmById($id): object
    {
        return Film::find($id);
    }


}
