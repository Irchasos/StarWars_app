<?php

namespace App\Services;

use App\Http\Requests\StoreCharacterRequest;
use App\Http\Requests\UpdateCharacterRequest;
use App\Models\Character;
use App\Repositories\CharacterInterface;
use Illuminate\Support\Collection;

class CharacterService
{
    private $character;

    public function __construct(CharacterInterface $character)
    {
        $this->character = $character;
    }

    public function indexData(): Collection
    {
        return $this->character->getAllCharacters();
    }

    public function showData($id): Collection
    {
        return $this->character->getCharacterById($id);
    }

    public function storeData(StoreCharacterRequest $request): void
    {
        $this->character->createCharacter($request);
    }

    public function updateData(UpdateCharacterRequest $request, Character $character): void
    {
        $this->character->updateCharacter($request, $character);
    }

    public function deleteData(Character $character): void
    {
        $this->character->deleteCharacter($character);
    }
}
