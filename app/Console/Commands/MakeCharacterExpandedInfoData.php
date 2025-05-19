<?php

namespace App\Console\Commands;

use App\Models\Character;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use JsonException;

class MakeCharacterExpandedInfoData extends Command
{
    protected $signature = 'command:characters-expanded';
    protected $description = 'Fetch and store characters with expanded info from Star Wars API';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        // Test połączenia z bazą danych
        try {
            DB::connection()->getPdo();
            $this->info('Połączenie z bazą danych  działa poprawnie.');
        } catch (\Exception $e) {
            $this->error("Nie można połączyć się z bazą danych: " . $e->getMessage());
            return;
        }

        // Logika importu danych z API
        $client = new Client();
        $currentPage = 1;

        while (true) {
            $url = "https://starwars-databank-server.vercel.app/api/v1/characters?page={$currentPage}&limit=10";

            try {
                $response = $client->get($url);
                $data = json_decode($response->getBody()->getContents(), true, 512, JSON_THROW_ON_ERROR);

                if (empty($data['data'])) {
                    break;
                }

                foreach ($data['data'] as $apiCharacter) {
                    $name = $apiCharacter['name'];
                    $description = $apiCharacter['description'] ?? 'No description';
                    $photo = $apiCharacter['image'];
                    
                    // Sprawdzenie, czy postać już istnieje
                    $existingCharacter = Character::where('name', $name)->first();

                    if ($existingCharacter) {
                        // Aktualizacja istniejącej postaci
                        $existingCharacter->update([
                            'description' => $description,
                            'photo' => $photo,
                        ]);
                    } else {
                        // Tworzenie nowej postaci
                        Character::create([
                            'name' => $name,
                            'description' => $description,
                            'photo' => $photo,
                            'planet_id' => 1,
                            'kind_id' => 1,
                            'gender' => 'unknown',
                            'birth_year' => 'unknown',
                            'eye_color' => 'unknown',
                            'hair_color' => 'unknown',
                            'height' => 'unknown',
                            'url' => $name,
                            'mass' => 'unknown',
                            'skin_color' => 'unknown',
                        ]);
                    }
                }

                echo "Importing page {$currentPage} of characters...\n";

                if (!isset($data['info']['next'])) {
                    break;
                }

                $currentPage++;
            } catch (RequestException $e) {
                $this->error("HTTP request failed: " . $e->getMessage());
                break;
            } catch (JsonException $e) {
                $this->error("JSON decoding failed: " . $e->getMessage());
                break;
            } catch (\Exception $e) {
                $this->error("An error occurred: " . $e->getMessage());
                break;
            }
        }

        echo "Import complete!\n";
    }
}
