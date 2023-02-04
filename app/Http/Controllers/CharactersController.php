<?php
declare(strict_types=1);

namespace App\Http\Controllers;

use App\Http\Requests\StoreCharacterRequest;
use App\Http\Requests\UpdateCharacterRequest;
use App\Models\Character;
use App\Models\Kind;
use App\Models\Photo;
use App\Models\Planet;
use App\Models\Starship;
use App\Services\CharacterService;
use Barryvdh\Debugbar\Facades\Debugbar;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class CharactersController extends Controller
{
    private $service;

    public function __construct(CharacterService $service)
    {
        $this->service = $service;
    }

    public function index(Request $request): view
    {
        Debugbar::info($request);

        $characters = Character::where(
            [
                ['name', '!=', null],
                [function ($query) use ($request) {
                    /**
                     * @noinspection PhpUndefinedFieldInspection
                     */
                    if (($term = $request->term)) {
                        $query->orWhere('name', 'LIKE', '%' . $term . '%')->get();
                    }
                }]
            ]
        )->orderBy("id", "asc")->paginate(15);

        return view('characters.index', compact('characters'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function create(): view
    {
        $starships = Starship::all();
        $kinds = Kind::all();
        $planets = Planet::all();
        return view('characters.create')->with('starships', $starships)->with('planets', $planets)->with('kinds', $kinds);
    }

    public function store(StoreCharacterRequest $request): RedirectResponse
    {
        $this->service->storeData($request);

        return redirect(route('characters'))->with('success', 'Character created successfully.');
    }

    public function show(Character $character): View
    {
        $this->service->showData($character);
        $placeholder = Photo::where('photoable_type', "character")->first();

        return view('characters.show')->with('character', $character)->with('placeholder', $placeholder);
    }

    public function edit(Character $character): view
    {
        $starships = Starship::all();
        $planets = Planet::all();

        return view('characters.edit')->with('character', $character)->with('starships', $starships)->with('planets', $planets);
    }

    public function update(UpdateCharacterRequest $request, Character $character): RedirectResponse
    {
        $this->service->updateData($request, $character);


        return redirect(route('characters'))->with('success', 'Character changed successfully.');
    }

    public function destroy(Character $character): RedirectResponse
    {
        $this->service->deleteData($character);

        return redirect(route('characters'))->with('success', 'Character deleted successfully.');
    }
}
