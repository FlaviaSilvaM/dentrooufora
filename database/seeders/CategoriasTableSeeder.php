<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Categoria;

class CategoriasTableSeeder extends Seeder
{
    public function run()
    {
        Categoria::factory(10)->create();
    }
}

