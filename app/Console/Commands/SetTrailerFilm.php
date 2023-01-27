<?php

namespace App\Console\Commands;

use App\Models\TrailerFilm;
use DB;
use Illuminate\Console\Command;

class SetTrailerFilm extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:trailers';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Insert links to YT trailers';

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
        $data = [
            ['film_id'=>1, 'path'=> 'https://www.youtube.com/embed/MpkrMqmmy5k'],
            ['film_id'=>1, 'path'=> 'https://www.youtube.com/embed/RQvf7-cLWs4'],
            ['film_id'=>1, 'path'=> 'https://www.youtube.com/embed/vZ734NWnAHA'],
            ['film_id'=>1, 'path'=> 'https://www.youtube.com/embed/9gvqpFbRKtQ'],
            ['film_id'=>1, 'path'=> 'https://www.youtube.com/embed/vZ734NWnAHA'],

            ['film_id'=>2, 'path'=> 'https://www.youtube.com/embed/JNwNXF9Y6kY'],
            ['film_id'=>2, 'path'=> 'https://www.youtube.com/embed/urhsYepFqs0'],
            ['film_id'=>2, 'path'=> 'https://www.youtube.com/embed/ua0omrHbhMY'],
            ['film_id'=>2, 'path'=> 'https://www.youtube.com/embed/mz_YWNhKOkM'],
            ['film_id'=>2, 'path'=> 'https://www.youtube.com/embed/hYFNw6bgAb4'],

            ['film_id'=>3, 'path'=> 'https://www.youtube.com/embed/7L8p7_SLzvU'],
            ['film_id'=>3, 'path'=> 'https://www.youtube.com/embed/5UfA_aKBGMc'],
            ['film_id'=>3, 'path'=> 'https://www.youtube.com/embed/cM53X5Nqjbc'],
            ['film_id'=>3, 'path'=> 'https://www.youtube.com/embed/p4vIFhk621Q'],

            ['film_id'=>4, 'path'=> 'https://www.youtube.com/embed/bD7bpG-zDJQ'],
            ['film_id'=>4, 'path'=> 'https://www.youtube.com/embed/Fo--sWDK_nU'],
            ['film_id'=>4, 'path'=> 'https://www.youtube.com/embed/uMoSnrd7i5c'],
            ['film_id'=>4, 'path'=> 'https://www.youtube.com/embed/p8h2ptYF91c'],
            ['film_id'=>4, 'path'=> 'https://www.youtube.com/embed/kXpj6pbyTGg'],

            ['film_id'=>5, 'path'=> 'https://www.youtube.com/embed/gYbW1F_c9eM'],
            ['film_id'=>5, 'path'=> 'https://www.youtube.com/embed/jf5PX2HOKoM'],
            ['film_id'=>5, 'path'=> 'https://www.youtube.com/embed/X7DC-kNCS8c'],
            ['film_id'=>5, 'path'=> 'https://www.youtube.com/embed/SA6q3vHC5L4'],
            ['film_id'=>5, 'path'=> 'https://www.youtube.com/embed/Wqtlf_A4cOc'],
            ['film_id'=>5, 'path'=> 'https://www.youtube.com/embed/1fR7GBrdkNU'],

            ['film_id'=>6, 'path'=> 'https://www.youtube.com/embed/5UnjrG_N8hU'],
            ['film_id'=>6, 'path'=> 'https://www.youtube.com/embed/NkWgoPRT2Cs'],
            ['film_id'=>6, 'path'=> 'https://www.youtube.com/embed/NE05S5CI_84'],
            ['film_id'=>6, 'path'=> 'https://www.youtube.com/embed/Yx6F46-_3Ec'],
            ['film_id'=>6, 'path'=> 'https://www.youtube.com/embed/0kGHSLO3X2c'],
            ['film_id'=>6, 'path'=> 'https://www.youtube.com/embed/e8ERRdvGMSU'],

            ['film_id'=>7, 'path'=> 'https://www.youtube.com/embed/sGbxmsDFVnE'],
            ['film_id'=>7, 'path'=> 'https://www.youtube.com/embed/ngElkyQ6Rhs'],
            ['film_id'=>7, 'path'=> 'https://www.youtube.com/embed/erLk59H86ww'],
            ['film_id'=>7, 'path'=> 'https://www.youtube.com/embed/OMOVFvcNfvE'],
            ['film_id'=>7, 'path'=> 'https://www.youtube.com/embed/MOOknrAKTQI'],
            ['film_id'=>7, 'path'=> 'https://www.youtube.com/embed/wCc2v7izk8w'],

        ];

        TrailerFilm::insert($data);

    }
}
