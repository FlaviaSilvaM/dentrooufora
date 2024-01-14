<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\CategoriaCandidato;

class CategoriasCandidatosTableSeeder extends Seeder
{
    public function run()
    {
        CategoriaCandidato::factory(100)->create();
    }
}
