<?php

/**
 * @noinspection PhpUndefinedMethodInspection
 */

/**
 * @noinspection ALL
 */

namespace App\Console\Commands;

use App\Models\Character;
use App\Models\Kind;
use App\Models\Planet;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use Illuminate\Console\Command;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use JsonException;

class MakeCharactersData extends Command
{
    protected $signature = 'command:characters';

    protected $description = 'Command description';

    public function __construct()
    {
        parent::__construct();
    }

    /**
     * @throws       GuzzleException
     * @throws       JsonException
     * @noinspection PhpUndefinedMethodInspection
     */
    public function handle()
    {
        $client = new Client();
        $request = $client->get('https://swapi.py4e.com/api/people/');
        $data = json_decode($request->getBody()->getContents(), true, 512, JSON_THROW_ON_ERROR);

        $pages = (int) $full_pages = $data['count'] / 10;
        $last_page = $data['count'] % 10;
        if ($last_page > 0) {
            ++$pages;
        }

        for ($i = 1; $i <= $pages; $i++) {
            $client = new Client();
            $request = $client->get('https://swapi.py4e.com/api/people/?page=' . $i);
            $data = json_decode($request->getBody()->getContents(), true);

            foreach ($data['results'] as $apicharacter) {
                try {
                    $planet = Planet::where('url', $apicharacter['homeworld'])->firstOrFail();
                    $kind = Kind::where('url', $apicharacter['species'])->firstOrFail();
                } catch (ModelNotFoundException $exception) {
                    dd(
                        $exception->getMessage(),
                        $apicharacter
                    );
                }

                Character::create(
                    [
                    'gender' => $apicharacter['gender'],
                    'birth_year' => $apicharacter['birth_year'],
                    'eye_color' => $apicharacter['eye_color'],
                    'gender' => $apicharacter['gender'],
                    'hair_color' => $apicharacter['hair_color'],
                    'height' => $apicharacter['height'],
                    'planet_id' => $planet->id,
                    'kind_id' => $kind->id,
                    'url' => $apicharacter['url'],
                    'mass' => $apicharacter['mass'],
                    'name' => $apicharacter['name'],
                    'skin_color' => $apicharacter['skin_color'],
                    ]
                );
            }
        }
    }
}
