<?php

namespace App\Services;

use App\Repositories\FilmInterface;
use Illuminate\Support\Collection;

class FilmService
{
    private $film;

    public function __construct(FilmInterface $film)
    {
        $this->film = $film;
    }

    public function indexData(): Collection
    {
        return $this->film->getAllFilms();
    }

    public function showData($id): Collection
    {
        return $this->film->getFilmById($id);
    }

}
