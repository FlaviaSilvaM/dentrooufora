<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Votacao;

class VotacoesTableSeeder extends Seeder
{
    public function run()
    {
        Votacao::factory(20)->create();
    }
}
