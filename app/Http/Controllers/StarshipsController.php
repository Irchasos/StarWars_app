<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Http\Requests\StoreStarshipRequest;
use App\Http\Requests\UpdateStarshipRequest;
use App\Models\Photo;
use App\Models\Starship;
use App\Services\StarshipService;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class StarshipsController extends Controller
{
    private $service;

    public function __construct(StarshipService $service)
    {
        $this->service = $service;
    }

    public function index(): view
    {
        $starships = $this->service->indexData();

        return view('starships.index', compact('starships'));
    }

    public function create(): view
    {
        return view('starships.create');
    }

    public function store(StoreStarshipRequest $request): RedirectResponse
    {
        $this->service->storeData($request);
        return redirect(route('starships'))->with('success', 'Starship created successfully.');
    }

    public function show(Starship $starship): View
    {
        $this->service->showData($starship);
        $placeholder = Photo::where('photoable_type', "starship")->first();

        return view('starships.show')->with('starship', $starship)->with('placeholder', $placeholder);
    }

    public function edit(Starship $starship): view
    {
        return view('starships.edit')->with('starship', $starship);
    }

    public function update(UpdateStarshipRequest $request, Starship $starship): RedirectResponse
    {
        $this->service->updateData($request, $starship);
        return redirect(route('starships'))->with('success', 'Starship updated successfully.');
    }

    public function destroy(Starship $starship): RedirectResponse
    {
        $this->service->deleteData($starship);

        return redirect(route('starships'))->with('success', 'Starship deleted successfully.');
    }
}
