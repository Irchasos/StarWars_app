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
    public function handle()
    {
        $this->call('command:planets');
        $this->call('command:starships');
        $this->call('command:kinds');
        $this->call('command:characters');
        $this->call('command:vehicles');
        $this->call('command:films');
        $this->call('command:character_starship');
        $this->call('command:character_vehicle');
        $this->call('command:character_film');
        $this->call('command:film_kind');
        $this->call('command:film_planet');
        $this->call('command:film_vehicle');
        $this->call('command:film_starship');

        $this->call('command:permission');
        $this->call('command:roles');
        $this->call('command:setperm');
                $this->call('command:trailer');


    }
}
