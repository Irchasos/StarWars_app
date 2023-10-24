<?php

namespace App\Console\Commands;

use App\Models\Photo;
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
        $data = [
            ['photoable_type' => 'Character', 'photoable_id' => 0,'path' => 'https://previews.dropbox.com/p/thumb/ACGOcpbXxl4M5uL3ssRANRHknkZaf3aFgLK4IK3DCYNjwakiqiM9EKX3oZNYkm5TxT4JaHdNNM3zHpY8n5MEUS_dRYpE6OM9qHICfPhpuiXfFKavWudeDB_tu6IvbuxH-zAjGJeiaVvqmurZpq6UblPyzAgKHJ2V83qxBOGiGxBt-kxjqZq6wPFreG1OWhn5InYk8W9IRyc9rkSASgQSg4fGOclh7eJPhfX0elMezyw7E0nBOcqHnLdrv-hzV1c3mppRxXZIyKZnN-cHHJT39JRrn7tbhf_-zdaP1zI8EsRSJDJi0Ks-yk4lB71hzXny6zHZILQSVq5Mr6zfAhXZTW1V/p.jpeg'],
            ['photoable_type' => 'Planet', 'photoable_id' => 0,'path' => 'https://previews.dropbox.com/p/thumb/ACGSg4u3x9mmnFhV4TdsTEfz2R9PxhQlscJiBGHlmg6RPUwL39JMPjvVIRFTNvuYaR_mrMOlAJLa_2PLkoC44ikoOi8rD9k5qZxfe8Ohx2s9ozZULvA01TY5aHw5ZVpcdwBpyveRMK85kLFgZpcyywlrFA-qJcM4GSIsNOh0eIHRXoSqGoINaBzxPUCvWTvA2xQGdi3wl3tdiIcOzQpdD-hUHRdCnH6TT9bfVPX5tDEd7aDsxsEjpYgQ5Y-IAqiR3X_BJ-EdljtQOJpqk8V1q2u0p7RQfitqd_PTGGmOPT9LfVwCOEJHAHqDthiRuxTvcAZvLp_tn_Xug9RG2dHD329-/p.jpeg'],
            ['photoable_type' => 'Starship', 'photoable_id' => 0,'path' => 'https://previews.dropbox.com/p/thumb/ACGK2IW9-6DShbc6Q4MnXu4TbQ8dbF2W2KdtYkOMiYvnSHNhy063GDi1yYcEPtJA2yhz5HzX33GBHJi6cdJw3MXOr3iT28h-VmmmbRHEqZtU6ug0RRwC2JYS9JMnmsyQU3t1l2dRmNq2PRHw2iQ-ygrQQ6eQaQKP2uplB3VadAzccwu1nCZvZpQZhzKeU7MlK95nxeu-yHLOuBPDWdjpk-xZUUWHn-Q1O7W8jX_WNbRG602so2JVW_xzpRANCylg_mi04-71iUF1XHwdsculxO1B9jEDLC1D1xTmIy5MTl3XjNebPEXeJVo9IVcmFI8s-Rz1QC-sbNvQWzpVhTIARtyS/p.jpeg'],
            ['photoable_type' => 'vechicle', 'photoable_id' => 0,'path' => 'https://previews.dropbox.com/p/thumb/ACG7mDaz-oQZW1586hyqBcWv7pXk8tN9kfLxgYPmVj-mFQ3CzfxIi2V0SQcUUSUrq12NB8-sCmXNYctXq8Mby_IGmJ7AN2FUXleREpSsJiJi0chijx8UeW9jCD5RUENWMVWVWQcg14zU4jYM3VLpYg0NR1UgLpqyiC93IGtYjw6fYjufCT2DxsACwW5jqAeJLDDgv98tYz4k901Ah5pF6vyO7WqJFfehffyIzJAx17r4GVlcT3-JSiAucCGlTIkrwk-4scvs45DeXd-3kCHzUYTtKaoSaEzxNAPg-DMGKWmbBGOni3Qhrq3Z_nOK1O5NcsasYvQbGck_FBaLghS7lfYF/p.jpeg'],


        ];

        Photo::insert($data);
    }
}
