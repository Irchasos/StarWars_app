<?php
declare(strict_types=1);
namespace App\Http\Controllers;

use App\Http\Requests\StorePlanetRequest;
use App\Http\Requests\UpdatePlanetRequest;
use App\Models\Planet;
use App\Services\PlanetService;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class PlanetsController extends Controller
{
    private $service;

    public function __construct(PlanetService $service)
    {
        $this->service = $service;
    }

    public function index(): view
    {
        $planets = $this->service->indexData();

        return view('planets.index', compact('planets'));
    }

    public function create(): view
    {
        return view('planets.create');
    }

    public function store(StorePlanetRequest $request): RedirectResponse
    {
        //$request->validated();
        $this->service->storeData($request);
        return redirect(route('planets'))->with('success', 'Planet created successfully.');
    }

    public function show(Planet $planet): View
    {
        $this->service->showData($planet);

        return view('planets.show')->with('planet', $planet);
    }

    public function edit(Planet $planet): view
    {
        return view('planets.edit')->with('planet', $planet);
    }

    public function update(UpdatePlanetRequest $request, Planet $planet): RedirectResponse
    {
        $this->service->updateData($request, $planet);
        return redirect(route('planets'))->with('success', 'Planet updated successfully.');
    }

    public function destroy(Planet $planet): RedirectResponse
    {
        $this->service->deleteData($planet);

        return redirect(route('planets'))->with('success', 'Planet deleted successfully.');
    }
}
