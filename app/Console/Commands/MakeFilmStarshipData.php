<?php

namespace App\Console\Commands;

use App\Models\Film;
use App\Models\Starship;
use GuzzleHttp\Client;
use Illuminate\Console\Command;

class MakeFilmStarshipData extends Command
{


    protected $signature = 'command:film_starship';


    protected $description = 'Pivot for relation starships and films';


    public function handle()
    {

        $client = new Client();
        $request = $client->get('https://swapi.py4e.com/api/films/');
        $data = json_decode($request->getBody()->getContents(), true, 512, JSON_THROW_ON_ERROR);

        $pages = (int)$full_pages = $data['count'] / 10;
        $last_page = $data['count'] % 10;
        if ($last_page > 0) {
            ++$pages;
        }
        for ($i = 1; $i <= $pages; $i++) {
            $client = new Client();
            $request = $client->get('https://swapi.py4e.com/api/films/?page=' . $i);
            $data = json_decode($request->getBody()->getContents(), true, 512, JSON_THROW_ON_ERROR);
            foreach ($data['results'] as $apifilm) {

                $film = Film::where('url', $apifilm['url'])->firstOrFail();
                $max = count($apifilm['starships']);
                $filmId = $film->id;
                //Pierwszy element pivota

                for ($j = 0; $j < $max; $j++) {
                    $starship = Starship::where('url', $apifilm['starships'][$j])->get();
                    //drugie elementy pivota
                    foreach ($starship as $item) {
                        $item->films()->attach($filmId);
                    }
                }
            }
        }
    }


}
