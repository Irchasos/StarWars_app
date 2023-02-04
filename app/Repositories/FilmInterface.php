<?php

namespace App\Repositories;


interface FilmInterface
{
    public function getAllFilms();

    public function getFilmById($id);


}
