<?php

namespace App\Repositories;

use App\Http\Requests\StoreCharacterRequest;
use App\Http\Requests\UpdateCharacterRequest;
use App\Models\Character;

class CharacterRepository implements CharacterInterface
{
    protected $character = null;

    public function getAllCharacters(): object
    {
        return Character::all();
    }

    public function getCharacterById($id): object
    {
        return Character::find($id);
    }

    public function createCharacter(StoreCharacterRequest $request): void
    {
        $character = new Character();
        $character->name = $request['name'];
        $character->mass = $request['mass'];
        $character->height = $request['height'];
        $character->hair_color = $request['hair_color'];
        $character->gender = $request['gender'];
        $character->planet_id = $request['homeworld'];
        $character->kind_id = $request['kind'];
        $character->birth_year = $request['birth_year'];
        $character->eye_color= $request['eye_color'];
        $character->skin_color= $request['skin_color'];
        $character->save();
        $character->starships()->attach($request['starships']);
    }

    public function updateCharacter(UpdateCharacterRequest $request, Character $character): void
    {
        $character->name = $request['name'];
        $character->mass = $request['mass'];
        $character->height = $request['height'];
        $character->hair_color = $request['hair_color'];
        $character->gender = $request['gender'];
        $character->planet_id = $request['homeworld'];
        $character->save();
        $character->starships()->sync($request['starships']);
    }

    public function deleteCharacter(Character $character): bool
    {
        return $character->delete();
    }
}
