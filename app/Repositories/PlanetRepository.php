<?php

namespace App\Repositories;

use App\Http\Requests\StorePlanetRequest;
use App\Http\Requests\UpdatePlanetRequest;
use App\Models\Planet;

class PlanetRepository implements PlanetInterface
{
    protected $planet = null;

    public function getAllPlanets(): object
    {
        return Planet::all();
    }

    public function getPlanetById($id): object
    {
        return Planet::find($id);
    }

    public function createPlanet(StorePlanetRequest $request): bool
    {
        $planet = new planet();
        $planet->name = $request['name'];
        $planet->terrain = $request['terrain'];
        return $planet->save();
    }

    public function updatePlanet(UpdatePlanetRequest $request, Planet $planet): bool
    {
        $planet->name = $request['name'];
        $planet->terrain = $request['terrain'];
        return $planet->save();
    }

    public function deletePlanet(Planet $planet): bool
    {
        return $planet->delete();
    }
}
