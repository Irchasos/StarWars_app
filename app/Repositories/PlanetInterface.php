<?php

namespace App\Repositories;

use App\Http\Requests\StorePlanetRequest;
use App\Http\Requests\UpdatePlanetRequest;
use App\Models\Planet;

interface PlanetInterface
{
    public function getAllPlanets();

    public function getPlanetById($id);

    public function createPlanet(StorePlanetRequest $request);

    public function updatePlanet(UpdatePlanetRequest $request, Planet $planet);

    public function deletePlanet(Planet $planet);
}
