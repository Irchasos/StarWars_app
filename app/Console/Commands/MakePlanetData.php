<?php

/**
 * @noinspection ALL
 */

namespace App\Console\Commands;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use JsonException;

class MakePlanetData extends Command
{
    protected $signature = 'command:planets';
    protected $description = 'Set Planets in base';

    public function handle(): void
    {
         // Test połączenia z bazą danych
        
        $client = new Client();
        try {
            $request = $client->get('https://swapi.py4e.com/api/planets/');
        } catch (GuzzleException $e) {
        }
        try {
            $data = json_decode($request->getBody()->getContents(), true, 512, JSON_THROW_ON_ERROR);
        } catch (JsonException $e) {
        }
        $pages = (int)$full_pages = $data['count'] / 10;

        $last_page = $data['count'] % 10;
        if ($last_page > 0) {
            ++$pages;
        }
        for ($i = 1; $i <= $pages; $i++) {
            try {
                $request = $client->get('https://swapi.py4e.com/api/planets/?page=' . $i);
            } catch (GuzzleException $e) {
            }
            try {
                $data = json_decode($request->getBody()->getContents(), true, 512, JSON_THROW_ON_ERROR);
            } catch (JsonException $e) {
            }
            foreach ($data['results'] as $planet) {
                DB::table('planets')->insert(
                    [
                        'name' => $planet['name'],
                        'rotation_period' => $planet['rotation_period'],
                        'orbital_period' => $planet['orbital_period'],
                        'diameter' => $planet['diameter'],
                        'climate' => $planet['climate'],
                        'gravity' => $planet['gravity'],
                        'terrain' => $planet['terrain'],
                        'surface_water' => $planet['surface_water'],
                        'population' => $planet['population'],
                        'url' => $planet['url'],
                        // 'residents' => $planet['residents'],
                        // 'films' => $planet['films'],
                    ]
                );
            }
        }
    }
}
