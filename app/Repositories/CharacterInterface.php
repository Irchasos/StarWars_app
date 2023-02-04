<?php

namespace App\Repositories;

use App\Http\Requests\StoreCharacterRequest;
use App\Http\Requests\UpdateCharacterRequest;
use App\Models\Character;

interface CharacterInterface
{
    public function getAllCharacters();

    public function getCharacterById($id);

    public function createCharacter(StoreCharacterRequest $request);

    public function updateCharacter(UpdateCharacterRequest $request, Character $character);

    public function deleteCharacter(Character $character);
}
