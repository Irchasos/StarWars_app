<?php

namespace App\Console\Commands;

use App\Models\Film;
use App\Models\Vehicle;
use GuzzleHttp\Client;
use Illuminate\Console\Command;

class MakeFilmVehicleData extends Command
{
    protected $signature = 'command:film_vehicle';
    protected $description = 'Pivot for relation vehicles and films';

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
            $client = new Client();
            $request = $client->get('https://swapi.py4e.com/api/films/?page=' . $i);
            $data = json_decode($request->getBody()->getContents(), true, 512, JSON_THROW_ON_ERROR);

            foreach ($data['results'] as $apifilm) {
                $film = Film::where('url', $apifilm['url'])->firstOrFail();
                $max = count($apifilm['vehicles']);
                $filmId = $film->id;

                for ($j = 0; $j < $max; $j++) {
                    $vehicle = Vehicle::where('url', $apifilm['vehicles'][$j])->get();
                    // drugie elementy pivota
                    foreach ($vehicle as $item) {
                        $item->films()->attach($filmId);
                    }
                }
            }
        }
    }
}
