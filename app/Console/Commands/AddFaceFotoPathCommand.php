<?php

namespace App\Console\Commands;

use App\Models\Photo;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class AddFaceFotoPathCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:add_face_path';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        for ($i = 1; $i < 88; $i++) {
            DB::table('photos')->insert([
                'photoable_type' => 'App\Models\Character',
                'photoable_id' => $i,
                'path' => '/storage/characters_images/first/person_'.$i.'.png',

                ]);
    }
}}
