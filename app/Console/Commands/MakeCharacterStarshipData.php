<?php

namespace App\Console\Commands;

use App\Models\Character;
use App\Models\Starship;
use GuzzleHttp\Client;
use Illuminate\Console\Command;

class MakeCharacterStarshipData extends Command
{


    protected $signature = 'command:character_starship';


    protected $description = 'Pivot for relation starships and characters';


    public function handle()
    {

        $client = new Client();
        $request = $client->get('https://swapi.py4e.com/api/people/');
        $data = json_decode($request->getBody()->getContents(), true, 512, JSON_THROW_ON_ERROR);

        $pages = (int)$full_pages = $data['count'] / 10;
        $last_page = $data['count'] % 10;
        if ($last_page > 0) {
            ++$pages;
        }
        for ($i = 1; $i <= $pages; $i++) {
            $client = new Client();
            $request = $client->get('https://swapi.py4e.com/api/people/?page=' . $i);
            $data = json_decode($request->getBody()->getContents(), true, 512, JSON_THROW_ON_ERROR);
            foreach ($data['results'] as $apicharacter) {

                $character = Character::where('url', $apicharacter['url'])->firstOrFail();
                $max = count($apicharacter['starships']);
                $characterId = $character->id;
                //Pierwszy element pivota

                for ($j = 0; $j < $max; $j++) {
                    $starship = Starship::where('url', $apicharacter['starships'][$j])->get();
                    //drugie elementy pivota
                    foreach ($starship as $item) {
                        $item->characters()->attach($characterId);
                    }
                }
            }
        }
    }


}
