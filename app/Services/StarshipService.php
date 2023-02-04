<?php

namespace App\Services;

use App\Http\Requests\StoreStarshipRequest;
use App\Http\Requests\UpdateStarshipRequest;
use App\Models\Starship;
use App\Repositories\StarshipInterface;
use Illuminate\Support\Collection;

class StarshipService
{
    private $starship;

    public function __construct(StarshipInterface $starship)
    {
        $this->starship = $starship;
    }

    public function indexData(): Collection
    {
        return $this->starship->getAllStarships();
    }

    public function showData($id): Collection
    {
        return $this->starship->getStarshipById($id);
    }

    public function storeData(StoreStarshipRequest $request): string
    {
        return $this->starship->createStarship($request);
    }

    public function updateData(UpdateStarshipRequest $request, Starship $starship): string
    {
        return $this->starship->updateStarship($request, $starship);
    }

    public function deleteData(Starship $starship): void
    {
        $this->starship->deleteStarship($starship);
    }
}
