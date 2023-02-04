<?php

namespace App\Repositories;

use App\Http\Requests\StoreStarshipRequest;
use App\Http\Requests\UpdateStarshipRequest;
use App\Models\Starship;

class StarshipRepository implements StarshipInterface
{
    protected $starship = null;

    public function getAllStarships(): object
    {
        return Starship::all();
    }

    public function getStarshipById($id): object
    {
        return Starship::find($id);
    }

    public function createStarship(StoreStarshipRequest $request): bool
    {
        $starship = new starship();
        $starship->name = $request['name'];
        $starship->model = $request['model'];
        return $starship->save();
    }

    public function updateStarship(UpdateStarshipRequest $request, Starship $starship): bool
    {
        $starship->update(
            [
                'name' => $request['name'],
                'model' => $request['model'],
            ]
        );
        return $starship->save();
    }

    public function deleteStarship(Starship $starship): bool
    {
        return $starship->delete();
    }
}
