<?php

namespace Database\Factories;

use App\Votacao;
use Illuminate\Database\Eloquent\Factories\Factory;

class VotacaoFactory extends Factory
{
    protected $model = Votacao::class;

    public function definition()
    {
        return [
            'codigo' => $this->faker->unique()->word,
            'categoria_id' => rand(1, 10), // Assume que você tem 10 categorias (ajuste conforme sua estrutura)
            'usuario_id' => rand(1, 100), // Assume que você tem 100 usuários (ajuste conforme sua estrutura)
            'titulo' => $this->faker->sentence,
            'descricao' => $this->faker->paragraph,
            'datahora_inicio' => now(),
            'datahora_fim' => now()->addDays(7),
            'publica' => true,
            'foto_capa' => $this->faker->imageUrl,
        ];
    }
}


