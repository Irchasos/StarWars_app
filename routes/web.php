<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\CharactersController;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\EqController;
use App\Http\Controllers\FilmsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KindsController;
use App\Http\Controllers\PlanetsController;
use App\Http\Controllers\StarshipsController;
use App\Http\Controllers\VehiclesController;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', [HomeController::class, 'entrance'])->name('entrance');
Route::get('/index', [HomeController::class, 'index'])->name('index');
//Characters->CRUD
Route::get('/characters', [CharactersController::class, 'index'])->name('characters');
Route::get('/characters/create', [CharactersController::class, 'create'])->name('characters.create');
Route::post('/characters/create', [CharactersController::class, 'store'])->name('characters.store');
Route::get('/characters/{character}', [CharactersController::class, 'show'])->name('characters.show');
Route::get('/characters/{character}/edit', [CharactersController::class, 'edit'])->name('characters.edit');
Route::PUT('/characters/{character}', [CharactersController::class, 'update'])->name('characters.update');
Route::DELETE('/characters/{character}', [CharactersController::class, 'destroy'])->name('characters.destroy');
//Starships->CRUD
Route::get('/starships', [StarshipsController::class, 'index'])->name('starships');
Route::get('/starships/create', [StarshipsController::class, 'create'])->name('starships.create');
Route::post('/starships/create', [StarshipsController::class, 'store'])->name('starships.store');
Route::get('/starships/{starship}', [StarshipsController::class, 'show'])->name('starships.show');
Route::get('/starships/{starship}/edit', [StarshipsController::class, 'edit'])->name('starships.edit');
Route::PUT('/starships/{starship}', [StarshipsController::class, 'update'])->name('starships.update');
Route::DELETE('/starships/{starship}', [StarshipsController::class, 'destroy'])->name('starships.destroy');
//Planets->CRUD
Route::get('/planets', [PlanetsController::class, 'index'])->name('planets');
Route::get('/planets/create', [PlanetsController::class, 'create'])->name('planets.create');
Route::post('/planets/create', [PlanetsController::class, 'store'])->name('planets.store');
Route::get('/planets/{planet}', [PlanetsController::class, 'show'])->name('planets.show');
Route::get('/planets/{planet}/edit', [PlanetsController::class, 'edit'])->name('planets.edit');
Route::PUT('/planets/{planet}', [PlanetsController::class, 'update'])->name('planets.update');
Route::DELETE('/planets/{planet}', [PlanetsController::class, 'destroy'])->name('planets.destroy');

Route::get('/kinds', [KindsController::class, 'index'])->name('kinds');
Route::get('/kinds/{kind}', [KindsController::class, 'show'])->name('kinds.show');
Route::get('/vehicles', [VehiclesController::class, 'index'])->name('vehicles');
Route::get('/vehicles/{vehicle}', [VehiclesController::class, 'show'])->name('vehicles.show');
Route::get('/films', [FilmsController::class, 'index'])->name('films');
Route::get('/films/{film}', [FilmsController::class, 'show'])->name('films.show');


Route::get(
    '/register', static function () {
    return view('register');
}
);

Route::get('login', [CustomAuthController::class, 'index'])->name('login');
Route::post('custom-login', [CustomAuthController::class, 'customLogin'])->name('login.custom');
Route::get('sign-in/github', [CustomAuthController::class, 'github'])->name('login.github');
Route::get('sign-in/github/redirect', [CustomAuthController::class, 'githubRedirect'])->name('login.githubRedirect');
Route::get('sign-in/google', [CustomAuthController::class, 'google'])->name('login.google');
Route::get('sign-in/google/redirect', [CustomAuthController::class, 'googleRedirect'])->name('login.googleRedirect');
Route::get('sign-in/facebook', [CustomAuthController::class, 'facebook'])->name('login.facebook');
Route::get('sign-in/facebook/redirect', [CustomAuthController::class, 'facebookRedirect'])->name('login.facebookRedirect');
Route::get('sign-in/twitter', [CustomAuthController::class, 'twitter'])->name('login.twitter');
Route::get('sign-in/twitter/redirect', [CustomAuthController::class, 'twitterRedirect'])->name('login.twitterRedirect');
Route::get('registration', [CustomAuthController::class, 'registration'])->name('register-user');
Route::post('custom-registration', [CustomAuthController::class, 'customRegistration'])->name('register.custom');
Route::get('signout', [CustomAuthController::class, 'signOut'])->name('signout');

Route::get('account', [AccountController::class, 'myAccount'])->name('myAccount')->middleware('auth');
Route::post('change-data', [AccountController::class, 'changeData'])->name('change.data')->middleware('auth');
Route::get('passport', [AccountController::class, 'passport'])->name('passport')->middleware('auth');
Route::post('generate-passport', [AccountController::class, 'generatePassport'])->name('generatePassport');
Route::get('image-upload', [AccountController::class, 'imageUpload'])->name('image.upload')->middleware('auth');
Route::get('avatar-upload', [AccountController::class, 'avatarUpload'])->name('avatar.upload')->middleware('auth');
Route::get('image-choose', [AccountController::class, 'chooseModel'])->name('image.choose')->middleware('auth');
Route::post('image-upload', [AccountController::class, 'imageUploaded'])->name('image.uploaded')->middleware('auth');
Route::post('avatar-upload', [AccountController::class, 'avatarUploaded'])->name('avatar.uploaded')->middleware('auth');
Route::get('image-cancel', [AccountController::class, 'imageCancel'])->name('image.cancel')->middleware('auth');
Route::DELETE('/photos/{photo}', [AccountController::class, 'destroy'])->name('image.destroy');

//EQ
Route::get('my-eq', [EqController::class, 'myEq'])->name('myEq')->middleware('auth');

