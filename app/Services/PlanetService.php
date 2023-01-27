<?php

namespace App\Services;

use App\Http\Requests\StorePlanetRequest;
use App\Http\Requests\UpdatePlanetRequest;
use App\Models\Planet;
use App\Repositories\PlanetInterface;
use Illuminate\Support\Collection;

class PlanetService
{
    private $planet;

    public function __construct(PlanetInterface $planet)
    {
        $this->planet = $planet;
    }

    public function indexData(): Collection
    {
        return $this->planet->getAllPlanets();
    }

    public function showData($id): Collection
    {
        return $this->planet->getPlanetById($id);
    }

    public function storeData(StorePlanetRequest $request): string
    {
        return $this->planet->createPlanet($request);
    }

    public function updateData(UpdatePlanetRequest $request, Planet $planet): string
    {
        return $this->planet->updatePlanet($request, $planet);
    }

    public function deleteData(Planet $planet): void
    {
        $this->planet->deletePlanet($planet);
    }
}
