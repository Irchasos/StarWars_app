<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class SetPermissionToRoleCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:setperm';

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
        $role = Role::findByName('Imperator');
        $permission = Permission::all();
        $role->givePermissionTo($permission);
        $role = Role::findByName('Corporal');
        $permission = Permission::all()->where('id', '<', '3');
        $role->givePermissionTo($permission);
        $role = Role::findByName('Lieutenant');
        $permission = Permission::all()->where('id', '<', '6');
        $role->givePermissionTo($permission);
        $role = Role::findByName('General');
        $permission = Permission::all()->where('id', '<', '8');
        $role->givePermissionTo($permission);
    }
}
