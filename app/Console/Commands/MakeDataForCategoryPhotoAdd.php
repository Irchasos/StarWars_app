<?php

namespace App\Console\Commands;

use App\Models\Photo;
use Illuminate\Console\Command;

class MakeDataForCategoryPhotoAdd extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:PhotoAdd';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    public function __construct()
    {
        parent::__construct();
    }

    // public function handle()
    // {
    //     $categories = ['Character', 'Starship'];
    //
    //     foreach ($categories as $category) {
    //         Photo::create([
    //             'photoable_type' => $category,
    //             'photoable_id' => 0,
    //             'path' => '/storage/placeholder/' . $category . '.jpg',
    //         ]);
    //     }
    // }

    public function handle()
    {
        Photo::create([
            'photoable_type' => '$category',
            'photoable_id' => 0,
            'path' => '/storage/placeholder/' . '.jpg',
        ]);
    }
}
