<?php

namespace App\Console\Commands;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class MakeVehiclesData extends Command
{
    protected $signature = 'command:vehicles';

    protected $description = 'Command to set vehicles in the database';

    /**
     * @noinspection PhpMultipleClassDeclarationsInspection
     */
    public function handle(): void
    {
        $client = new Client();

        try {
            $request = $client->get('https://swapi.py4e.com/api/vehicles/');
        } catch (GuzzleException $e) {
        }

        try {
            $data = json_decode($request->getBody()->getContents(), true, 512, JSON_THROW_ON_ERROR);
        } catch (JsonException $e) {
        }

        $pages = (int) ($data['count'] / 10);
        $last_page = $data['count'] % 10;

        if ($last_page > 0) {
            ++$pages;
        }

        for ($i = 1; $i <= $pages; $i++) {
            try {
                $request = $client->get('https://swapi.py4e.com/api/vehicles/?page=' . $i);
            } catch (GuzzleException $e) {
            }

            try {
                $data = json_decode($request->getBody()->getContents(), true, 512, JSON_THROW_ON_ERROR);
            } catch (JsonException $e) {
            }

            foreach ($data['results'] as $vehicle) {
                DB::table('vehicles')->insert([
                    'name' => $vehicle['name'],
                    'model' => $vehicle['model'],
                    'vehicle_class' => $vehicle['vehicle_class'],
                    'manufacturer' => $vehicle['manufacturer'],
                    'length' => $vehicle['length'],
                    'cost_in_credits' => $vehicle['cost_in_credits'],
                    'crew' => $vehicle['crew'],
                    'passengers' => $vehicle['passengers'],
                    'max_atmosphering_speed' => $vehicle['max_atmosphering_speed'],
                    'cargo_capacity' => $vehicle['cargo_capacity'],
                    'consumables' => $vehicle['consumables'],
                    'url' => $vehicle['url']
                ]);
            }
        }
    }
}
