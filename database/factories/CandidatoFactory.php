<?php

namespace Database\Factories;

use App\Candidato;
use Illuminate\Database\Eloquent\Factories\Factory;

class CandidatoFactory extends Factory
{
    protected $model = Candidato::class;

    public function definition()
    {
        return [
            'nome' => $this->faker->name,
            'foto' => $this->faker->imageUrl,
        ];
    }
}
