<?php
declare(strict_types=1);

namespace App\Http\Controllers;

use App\Http\Requests\PassportCharacterRequest;
use App\Models\Character;
use App\Models\Photo;
use App\Models\Planet;
use App\Models\User;
use App\Services\CharacterService;
use Barryvdh\DomPDF\Facade\Pdf;
use Carbon\Carbon;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Ramsey\Uuid\Uuid;

class AccountController extends Controller
{
    private $service;

    public function __construct (CharacterService $service)
    {
        $this->service = $service;
    }

    public function myAccount()
    {
        $user = Auth::user();
        $permissions = $user->getPermissionsViaRoles();

        return view('account.profile')
            ->with('user', $user)
            ->with('permissions', $permissions);


    }

    public function avatarUpload()
    {
    }

    public function avatarUploaded(Request $request)
    {

        $validatedData = $request->validate([
            'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',

        ]);


        $file = $request->file('image');
        $extention = $file->getClientOriginalExtension();
        $name = "public/avatars_images/" . Uuid::uuid4() . ".$extention";

        Storage::put($name, $file->get());
        $url = Storage::url($name);

        User::whereId(auth()->user()->id)->update(['avatar'=>$url]);

        return back()->with('success', 'Photo Uploaded');
    }

    public function changeData(Request $request)
    {
        User::whereId(auth()->user()->id)->update([
            'name' => ($request->new_name),
            'password' => Hash::make($request->new_password)
        ]);
    }

    public function passport()
    {
        $characters = Character::all();
        $planets = Planet::all();

        return view('account.passport')
            ->with('characters', $characters)
            ->with('planets', $planets);

    }

    public function generatePassport(PassportCharacterRequest $request): Response
    {

        $data = [
            'auth' => Auth::user(),
            'request' => $request,
            'date' => Carbon::now()->format('d-m-Y'),
            'now' => Carbon::now(),
            'date2' => Carbon::now()->addDays($request->time),


        ];


        return PDF::loadView('myPDF', $data)->download('itsolutionstuff.pdf');
    }

    public function chooseModel()
    {

        $photos = Photo::all();


        return view('account.chooseModel')->with('photos', $photos);
    }

    public function imageUpload()
    {
        $model = (Request()->parameter);
        $namespace = 'App\Models\\' . $model;
        $records = app()->make($namespace)->all();
        return view('account.imageUpload')->with('model', $model)->with('records', $records);
    }

    /**
     * Display a listing of the resource.
     *
     * @return Application|RedirectResponse|Response|Redirector
     */
    public function imageUploaded(Request $request)
    {

        $validatedData = $request->validate([
            'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',

        ]);


        $file = $request->file('image');
        $extention = $file->getClientOriginalExtension();
        $name = "public/characters_images/" . Uuid::uuid4() . ".$extention";

        Storage::put($name, $file->get());
        $url = Storage::url($name);

        $save = new Photo;
        $save->photoable_type = $request->photoable_type;
        $save->photoable_id = $request->photoable_id;
        $save->path = $url;
        $save->save();

        return back()->with('success', 'Photo Uploaded');
    }

    public function imageCancel()
    {
        $photos = Photo::all();
        return view('account.imageCancel')->with('photos', $photos);
    }

    public function destroy(Photo $photo): RedirectResponse
    {

        Photo::destroy($photo->id);


        return redirect(route('image.cancel'))->with('success', 'Photo deleted successfully.');
    }
}
