<?php

declare(strict_types=1);

namespace App\Http\Controllers;
use App\Models\Hierarchy;
use App\Http\Requests\RegisterUserRequest;
use App\Models\User;
use App\Notifications\SlackMessageNotification;
use Illuminate\Http\Request;
use Illuminate\Notifications\Messages\SlackMessage;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;
use Laravel\Socialite\Facades\Socialite;

class CustomAuthController extends Controller
{
    public function index()
    {

        return view('auth.login');
    }

    public function customLogin(Request $request)
    {
        $request->validate(
            [
                'email' => 'required',
                'password' => 'required',
            ]
        );

        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->intended('/index')
                ->withSuccess('Signed in');
        }

        return redirect("login")->withError('Login details are not valid');
    }

    public function registration()
    {
        return view('auth.registration');
    }


    public function customRegistration(RegisterUserRequest $request)
    {
        $data = $request->all();
        $check = $this->create($data);
        $check->assignRole('Corporal');
        $check->givePermissionTo('add photo to items');
        Hierarchy::create([
        'employer_id' => $check->id,  // Użyj id nowo utworzonego użytkownika
        'boss_id' => 1,              // Przykładowy id przełożonego (boss_id)
    ]);

        alert()->flash('Welcome back!', 'success');
        return redirect("/index")->withSuccess('You have signed-in');

    }

    public function create(array $data)
    {
        return User::create(
            [
                'name' => $data['name'],
                'email' => $data['email'],
                'password' => Hash::make($data['password'])
            ]
        );
    }

    public function dashboard()
    {
        if (Auth::check()) {
            return view('dashboard');
        }

        return redirect("login")->withSuccess('You are not allowed to access');
    }

    public function signOut()
    {
        Session::flush();
        Auth::logout();

        return Redirect('login');
    }

    public function github()
    {
        return Socialite::driver('github')->redirect();
    }

    public function githubRedirect()
    {
        $user = Socialite::driver('github')->user();
        $user = User::firstorCreate(
            [
                'email' => $user->email
            ],
            [
                'name' => $user->name,
                'password' => Hash::make(Str::random(24)),
                'avatar' => 'storage/placeholders/character.jpg',
            ]
        );
        $user->assignRole('Corporal');
        Auth::login($user, true);
        return redirect('/index')->withSuccess('Signed in');
        ;

    }

    public function google()
    {
        return Socialite::driver('google')->redirect();
    }

    public function googleRedirect()
    {
        $user = Socialite::driver('google')->user();
        $user = User::firstorCreate(
            [
                'email' => $user->email
            ],
            [
                'name' => $user->name,
                'password' => Hash::make(Str::random(24))
            ]
        );
        $user->assignRole('Corporal');
        Auth::login($user, true);
        return redirect('/index')->withSuccess('Signed in');
        ;

    }

    public function facebook()
    {
        return Socialite::driver('facebook')->redirect();
    }

    public function facebookRedirect()
    {
        $user = Socialite::driver('facebook')->user();
        $user = User::firstorCreate(
            [
                'email' => $user->email
            ],
            [
                'name' => $user->name,
                'password' => Hash::make(Str::random(24))
            ]
        );
        $user->assignRole('Corporal');
        Auth::login($user, true);
        return redirect('/index')->withSuccess('Signed in');
        ;

    }

    public function twitter()
    {
        return Socialite::driver('twitter')->redirect();
    }

    public function twitterRedirect()
    {
        $user = Socialite::driver('twitter')->user();
        dd($user);
        $user = User::firstorCreate(
            [
                'email' => $user->email
            ],
            [
                'name' => $user->name,
                'password' => Hash::make(Str::random(24))
            ]
        );
        $user->assignRole('Corporal');
        Auth::login($user, true);
        return redirect('/index')->withSuccess('Signed in');
        ;

    }
    public function slack()
    {
        return Socialite::driver('slack')->redirect();
    }

    public function slackRedirect()
    {

        $user = Socialite::driver('slack')->user();
        $user = User::firstorCreate(
            [
                'email' => $user->email
            ],
            [
                'name' => $user->name,
                'password' => Hash::make(Str::random(24))
            ]
        );
        $user->assignRole('Corporal');
        Auth::login($user, true);
        return redirect('/index')->withSuccess('Signed in');
        ;

    }
    public function sendSlackMessage(Request $request)
    {
        $message = $request->input('message');

        (new SlackMessage)
            ->from('Pradeep', ':pradeep:')
            ->to('general')
            ->content('Fix service request by '.$message);

        return redirect('/index')->with('success', 'Message sent');

    }


}
