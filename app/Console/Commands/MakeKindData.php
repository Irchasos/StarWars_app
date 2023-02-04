<?php

namespace App\Console\Commands;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class MakeKindData extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:kinds';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command set species in database';

    public function handle(): void
    {
        $client = new Client();
        try {
            $request = $client->get('https://swapi.py4e.com/api/species/');

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

                $request = $client->get('https://swapi.py4e.com/api/species/?page=' . $i);

            } catch (GuzzleException $e) {
            }
            try {
                $data = json_decode($request->getBody()->getContents(), true, 512, JSON_THROW_ON_ERROR);
            } catch (JsonException $e) {
            }

            foreach ($data['results'] as $species) {
                DB::table('kinds')->insert(
                    [
                        'name' => $species['name'],
                        'classification' => $species['classification'],
                        'designation' => $species['designation'],
                        'average_height' => $species['average_height'],
                        'skin_colors' => $species['skin_colors'],
                        'hair_colors' => $species['hair_colors'],
                        'eye_colors' => $species['eye_colors'],
                        'average_lifespan' => $species['average_lifespan'],
                        'language' => $species['language'],
                        'url' => $species['url'],

                    ]
                );
            }
        }
    }
}
