<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Spatie\Permission\Models\Permission;

class MakePermissionCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:permission';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

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
        // Set 1st level of roles
        Permission::create(['name' => 'add photo to items']);
        Permission::create(['name' => 'passport generate']);

        // Set 2nd level of roles
        Permission::create(['name' => 'make a character in base']);
        Permission::create(['name' => 'edit character in base']);
        Permission::create(['name' => 'delete photo of items']);

        // Set 3rd level of roles
        Permission::create(['name' => 'Socialite typing']);
        Permission::create(['name' => 'add permissions']);

        // Set 4th level of roles
        Permission::create(['name' => 'add roles']);
        Permission::create(['name' => 'set roles']);
        Permission::create(['name' => 'set global message flash']);
    }
}
