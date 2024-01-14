<?php

namespace Database\Factories;

use App\CategoriaCandidato;
use Illuminate\Database\Eloquent\Factories\Factory;

class CategoriaCandidatoFactory extends Factory
{
    protected $model = CategoriaCandidato::class;

    public function definition()
    {
        return [
            'categoria_id' => rand(1, 10), // Assume que você tem 10 categorias (ajuste conforme sua estrutura)
            'candidato_id' => rand(1, 50), // Assume que você tem 50 candidatos (ajuste conforme sua estrutura)
        ];
    }
}

