<?php

namespace App\Console\Commands;

use App\Models\Film;
use App\Models\Kind;
use GuzzleHttp\Client;
use Illuminate\Console\Command;

class MakeFilmKindData extends Command
{
    protected $signature = 'command:film_kind';
    protected $description = 'Pivot for relation kinds and films';

    public function handle()
    {
        $client = new Client();
        $request = $client->get('https://swapi.py4e.com/api/films/');
        $data = json_decode($request->getBody()->getContents(), true, 512, JSON_THROW_ON_ERROR);

        $pages = (int) $full_pages = $data['count'] / 10;
        $last_page = $data['count'] % 10;
        if ($last_page > 0) {
            ++$pages;
        }

        for ($i = 1; $i <= $pages; $i++) {
            $request = $client->get('https://swapi.py4e.com/api/films/?page=' . $i);
            $data = json_decode($request->getBody()->getContents(), true, 512, JSON_THROW_ON_ERROR);

            foreach ($data['results'] as $apifilm) {
                $film = Film::where('url', $apifilm['url'])->firstOrFail();
                $max = count($apifilm['species']);
                $filmId = $film->id;

                for ($j = 0; $j < $max; $j++) {
                    $kind = Kind::where('url', $apifilm['species'][$j])->get();
                    // drugie elementy pivota
                    foreach ($kind as $item) {
                        $item->films()->attach($filmId);
                    }
                }
            }
        }
    }
}
