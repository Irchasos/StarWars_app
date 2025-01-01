<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class MakeAllDataCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:data';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generate data for created migration from SWAPI + Role and Permissions + src video trailers for films';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle() :void
    {
        
        $this->info('Importing placeholder_template...');
        $this->call('command:data_template');
        $this->info('Importing planets...');
        $this->call('command:planets');
        $this->info('Importing starships...');
        $this->call('command:starships');
        $this->info('Importing kinds...');
        $this->call('command:kinds');
        $this->info('Importing characters...');
        $this->call('command:characters');
        $this->info('Importing vehicles...');
        $this->call('command:vehicles');
        $this->info('Importing films...');
        $this->call('command:films');
        $this->info('Importing relations:character-starships...');
        $this->call('command:character_starship');
        $this->info('Importing relations:character-vechicles...');
        $this->call('command:character_vehicle');
        $this->info('Importing relations:character-films...');
        $this->call('command:character_film');
        $this->info('Importing relations:kind-films......');
        $this->call('command:film_kind');
        $this->info('Importing relations:planet-films......');
        $this->call('command:film_planet');
        $this->info('Importing relations:vechicle-films......');
        $this->call('command:film_vehicle');
        $this->info('Importing relations:starship-films......');
        $this->call('command:film_starship');
        $this->info('Importing user:permission...');
        $this->call('command:permission');
        $this->info('Importing user:roles...');
        $this->call('command:roles');
        $this->info('Importing set:user:permission...');
        $this->call('command:setperm');
        $this->info('Importing film-trailers...');
        $this->call('command:trailer');
        $this->info('Importing face_path');
        $this->call('command:add_face_path');
        $this->info('Importing characters-expanded infos');
        $this->call('command:characters-expanded');
        $this->info('Importing palceholders for categories');
        $this->call('command:command:PhotoAdd');
        


    }
}
