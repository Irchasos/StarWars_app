<?php

namespace App\Providers;

use App\Repositories\CharacterInterface;
use App\Repositories\CharacterRepository;
use App\Repositories\FilmInterface;
use App\Repositories\FilmRepository;
use App\Repositories\KindInterface;
use App\Repositories\KindRepository;
use App\Repositories\PlanetInterface;
use App\Repositories\PlanetRepository;
use App\Repositories\StarshipInterface;
use App\Repositories\StarshipRepository;
use App\Repositories\VehicleInterface;
use App\Repositories\VehicleRepository;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(StarshipInterface::class, StarshipRepository::class);
        $this->app->bind(PlanetInterface::class, PlanetRepository::class);
        $this->app->bind(CharacterInterface::class, CharacterRepository::class);
        $this->app->bind(KindInterface::class, KindRepository::class);
        $this->app->bind(VehicleInterface::class, VehicleRepository::class);
        $this->app->bind(FilmInterface::class, FilmRepository::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Paginator::useBootstrap();

    }
}
