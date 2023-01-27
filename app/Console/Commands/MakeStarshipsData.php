<?php

/**
 * @noinspection ALL
 */

/**
 * @noinspection ALL
 */

namespace App\Console\Commands;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use JsonException;

class MakeStarshipsData extends Command
{
    protected $signature = 'command:Starships';

    protected $description = 'Command Set Starships in base';

    /**
     * @noinspection PhpMultipleClassDeclarationsInspection
     */
    public function handle(): void
    {
        DB::table('starships')->insert(
            ['model' => 'none',
                'name' => 'none',
                'url' => 'none']
        );
        $client = new Client();
        try {
            $request = $client->get('https://swapi.py4e.com/api/starships/');
        } catch (GuzzleException $e) {
        }
        try {
            $data = json_decode($request->getBody()->getContents(), true, 512, JSON_THROW_ON_ERROR);
        } catch (JsonException $e) {
        }
        (int)$pages = $data['count'] / 10;

        $last_page = $data['count'] % 10;
        if ($last_page > 0) {
            ++$pages;
        }
        for ($i = 1; $i <= $pages; $i++) {
            try {
                $request = $client->get('https://swapi.py4e.com/api/starships/?page=' . $i);
            } catch (GuzzleException $e) {
            }
            try {
                $data = json_decode($request->getBody()->getContents(), true, 512, JSON_THROW_ON_ERROR);
            } catch (JsonException $e) {
            }
            foreach ($data['results'] as $starship) {

                DB::table('starships')->insert(
                    [
                        'MGLT' => $starship['MGLT'],
                        'cargo_capacity' => $starship['cargo_capacity'],
                        'consumables' => $starship['consumables'],
                        'cost_in_credits' => $starship['cost_in_credits'],
                        'crew' => $starship['crew'],
                        'hyperdrive_rating' => $starship['hyperdrive_rating'],
                        'length' => $starship['length'],
                        'manufacturer' => $starship['manufacturer'],
                        'max_atmosphering_speed' => $starship['max_atmosphering_speed'],
                        'model' => $starship['model'],
                        'name' => $starship['name'],
                        'url' => $starship['url'],
                        'passengers' => $starship['passengers'],

                    ]
                );
            }
        }
    }
}
