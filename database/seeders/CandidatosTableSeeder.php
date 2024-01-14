<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Candidato;

class CandidatosTableSeeder extends Seeder
{
    public function run()
    {
        Candidato::factory(50)->create();
    }
}
