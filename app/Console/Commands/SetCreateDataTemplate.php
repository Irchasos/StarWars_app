<?php

namespace App\Console\Commands;

use App\Models\Photo;
use App\Models\Kind;
use App\Models\Planet;
use Illuminate\Console\Command;

class SetCreateDataTemplate extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:data_template';

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
        $planet =[
            'name'=>'unknown', 	'rotation_period'=>'unknown',	'orbital_period'=>'unknown', 	'diameter'=>'unknown', 	'climate'=>'unknown',
     	    'gravity'=>'unknown', 	'terrain'=>'unknown', 	'surface_water'=>'unknown', 	'population'=>'unknown',	'url'=>'unknown',

        ];
        $kind=[
            'name'=>'unknown', 	'classification'=>'unknown',	'designation'=>'unknown', 	'average_height'=>'unknown', 	'skin_colors'=>'unknown',
     	'hair_colors'=>'unknown', 	'eye_colors'=>'unknown', 	'average_lifespan'=>'unknown', 	'language'=>'unknown',	'url'=>'unknown',
        ];
        $photos = [
            ['photoable_type' => 'Character', 'photoable_id' => 0,'path' => 'https://drive.proton.me/urls/7ZB34QY9G0#xPjKR4efMfIZ'],
            ['photoable_type' => 'Planet', 'photoable_id' => 0,'path' => 'https://previews.dropbox.com/p/thumb/ACGSg4u3x9mmnFhV4TdsTEfz2R9PxhQlscJiBGHlmg6RPUwL39JMPjvVIRFTNvuYaR_mrMOlAJLa_2PLkoC44ikoOi8rD9k5qZxfe8Ohx2s9ozZULvA01TY5aHw5ZVpcdwBpyveRMK85kLFgZpcyywlrFA-qJcM4GSIsNOh0eIHRXoSqGoINaBzxPUCvWTvA2xQGdi3wl3tdiIcOzQpdD-hUHRdCnH6TT9bfVPX5tDEd7aDsxsEjpYgQ5Y-IAqiR3X_BJ-EdljtQOJpqk8V1q2u0p7RQfitqd_PTGGmOPT9LfVwCOEJHAHqDthiRuxTvcAZvLp_tn_Xug9RG2dHD329-/p.jpeg'],
            ['photoable_type' => 'Starship', 'photoable_id' => 0,'path' => 'https://previews.dropbox.com/p/thumb/ACGK2IW9-6DShbc6Q4MnXu4TbQ8dbF2W2KdtYkOMiYvnSHNhy063GDi1yYcEPtJA2yhz5HzX33GBHJi6cdJw3MXOr3iT28h-VmmmbRHEqZtU6ug0RRwC2JYS9JMnmsyQU3t1l2dRmNq2PRHw2iQ-ygrQQ6eQaQKP2uplB3VadAzccwu1nCZvZpQZhzKeU7MlK95nxeu-yHLOuBPDWdjpk-xZUUWHn-Q1O7W8jX_WNbRG602so2JVW_xzpRANCylg_mi04-71iUF1XHwdsculxO1B9jEDLC1D1xTmIy5MTl3XjNebPEXeJVo9IVcmFI8s-Rz1QC-sbNvQWzpVhTIARtyS/p.jpeg'],
            ['photoable_type' => 'vechicle', 'photoable_id' => 0,'path' => 'https://previews.dropbox.com/p/thumb/ACG7mDaz-oQZW1586hyqBcWv7pXk8tN9kfLxgYPmVj-mFQ3CzfxIi2V0SQcUUSUrq12NB8-sCmXNYctXq8Mby_IGmJ7AN2FUXleREpSsJiJi0chijx8UeW9jCD5RUENWMVWVWQcg14zU4jYM3VLpYg0NR1UgLpqyiC93IGtYjw6fYjufCT2DxsACwW5jqAeJLDDgv98tYz4k901Ah5pF6vyO7WqJFfehffyIzJAx17r4GVlcT3-JSiAucCGlTIkrwk-4scvs45DeXd-3kCHzUYTtKaoSaEzxNAPg-DMGKWmbBGOni3Qhrq3Z_nOK1O5NcsasYvQbGck_FBaLghS7lfYF/p.jpeg'],


        ];

        Photo::insert($photos);
        Planet::insert($planet);
        Kind::insert($kind);
    }
}
