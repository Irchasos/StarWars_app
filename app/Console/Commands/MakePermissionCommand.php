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
        //set 1level of roles
        Permission::create(['name' => 'add photo to items']);
        Permission::create(['name' => 'pasport generate']);

        //set 2level of roles

        Permission::create(['name' => 'make a character in base']);
        Permission::create(['name' => 'edit character in base']);
        Permission::create(['name' => 'delete photo of items']);

        //set 3level of roles
        Permission::create(['name' => 'slack typing']);
        Permission::create(['name' => 'add permissions']);
        //set 4level of roles
        Permission::create(['name' => 'add roles']);
        Permission::create(['name' => 'set roles']);
        Permission::create(['name' => 'set global message flash']);
    }
}
