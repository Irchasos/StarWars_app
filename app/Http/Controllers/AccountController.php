<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Http\Requests\PassportCharacterRequest;
use App\Models\Character;
use App\Models\Photo;
use App\Models\Planet;
use App\Models\User;
use App\Services\CharacterService;
use Barryvdh\DomPDF\Facade as PDF;
use Carbon\Carbon;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Ramsey\Uuid\Uuid;

class AccountController extends Controller
{
    private $service;

    public function __construct(CharacterService $service)
    {
        $this->service = $service;
    }

    public function myAccount(): View
    {
        $user = Auth::user();
        $permissions = $user->getPermissionsViaRoles();

        return view(
            'account.profile', [
            'user' => $user,
            'permissions' => $permissions
            ]
        );
    }

    public function avatarUpload()
    {
        // Implementacja
    }

    public function avatarUploaded(Request $request)
    {
        $validatedData = $request->validate(
            [
            'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            ]
        );

        $file = $request->file('image');
        $extension = $file->getClientOriginalExtension();
        $name = "public/avatars_images/" . Uuid::uuid4() . ".$extension";

        Storage::put($name, $file->get());
        $url = Storage::url($name);

        User::whereId(auth()->user()->id)->update(['avatar' => $url]);

        return back()->with('success', 'Photo uploaded');
    }

    public function changeData(Request $request)
    {
        User::whereId(auth()->user()->id)->update(
            [
            'name' => $request->new_name,
            'password' => Hash::make($request->new_password)
            ]
        );
    }

    public function passport(): View
    {
        $characters = Character::all();
        $planets = Planet::all();

        return view(
            'account.passport', [
            'characters' => $characters,
            'planets' => $planets
            ]
        );
    }

    public function generatePassport(PassportCharacterRequest $request): Response
    {
        $data = [
            'auth' => Auth::user(),
            'request' => $request,
            'date' => Carbon::now()->format('d-m-Y'),
            'now' => Carbon::now(),
            'date2' => Carbon::now()->addDays($request->time)
        ];

        return \Barryvdh\DomPDF\Facade\Pdf::loadView('myPDF', $data)->download('itsolutionstuff.pdf');
    }

    public function chooseModel(): View
    {
        $photos = Photo::all();

        return view(
            'account.chooseModel', [
            'photos' => $photos
            ]
        );
    }

    public function imageUpload()
    {
        $model = Request()->parameter;
        $namespace = 'App\Models\\' . $model;
        $records = app()->make($namespace)->all();

        return view(
            'account.imageUpload', [
            'model' => $model,
            'records' => $records
            ]
        );
    }

    public function imageUploaded(Request $request)
    {
        $validatedData = $request->validate(
            [
            'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            ]
        );

        $file = $request->file('image');
        $extension = $file->getClientOriginalExtension();
        $name = "public/characters_images/" . Uuid::uuid4() . ".$extension";

        Storage::put($name, $file->get());
        $url = Storage::url($name);

        $save = new Photo();
        $save->photoable_type = $request->photoable_type;
        $save->photoable_id = $request->photoable_id;
        $save->path = $url;
        $save->save();

        return back()->with('success', 'Photo uploaded');
    }

    public function imageCancel(): View
    {
        $photos = Photo::all();

        return view(
            'account.imageCancel', [
            'photos' => $photos
            ]
        );
    }

    public function destroy(Photo $photo): RedirectResponse
    {
        Photo::destroy($photo->id);

        return redirect(route('image.cancel'))->with('success', 'Photo deleted successfully.');
    }

    public function reports(): View
    {
        $user = Auth::user();
        $messages = DB::table('message_to_boss')->where('boss_id', '=', $user->id)->get();

        return view(
            'account.reports', [
            'user' => $user,
            'messages' => $messages
            ]
        );
    }
}
