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

class MakeFilmData extends Command
{
    protected $signature = 'command:films';
    protected $description = 'Set Films in base';

    public function handle(): void
    {
        $client = new Client();
        try {
            $request = $client->get('https://swapi.py4e.com/api/films/');
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
                $request = $client->get('https://swapi.py4e.com/api/films/?page=' . $i);
            } catch (GuzzleException $e) {
            }
            try {
                $data = json_decode($request->getBody()->getContents(), true, 512, JSON_THROW_ON_ERROR);
            } catch (JsonException $e) {
            }
            foreach ($data['results'] as $film) {
                DB::table('films')->insert(
                    [
                        'title' => $film['title'],
                        'episode_id' => $film['episode_id'],
                        'opening_crawl' => $film['opening_crawl'],
                        'director' => $film['director'],
                        'producer' => $film['producer'],
                        'release_date' => $film['release_date'],
                        'url' => $film['url'],
                    ]
                );
            }
        }
    }
}
