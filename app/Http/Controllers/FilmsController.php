<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\Film;
use App\Services\FilmService;
use Illuminate\View\View;

class FilmsController extends Controller
{
    private $service;

    public function __construct(FilmService $service)
    {
        $this->service = $service;
    }

    public function index(): view
    {
        $films = $this->service->indexData();

        return view('films.index', compact('films'));
    }


    public function show(Film $film): View
    {
        $this->service->showData($film);

        return view('films.show')->with('film', $film);
    }


}
