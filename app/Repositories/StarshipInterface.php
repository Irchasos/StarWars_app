<?php

namespace App\Repositories;

use App\Http\Requests\StoreStarshipRequest;
use App\Http\Requests\UpdateStarshipRequest;
use App\Models\Starship;

interface StarshipInterface
{
    public function getAllStarships();

    public function getStarshipById($id);

    public function createStarship(StoreStarshipRequest $request);

    public function updateStarship(UpdateStarshipRequest $request, Starship $starship);

    public function deleteStarship(Starship $starship);
}
