<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class NotaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'evaluacion' => $this->faker->evaluacion(),
            'nota' => $this->faker->nota(),
            'email_verified_at' => now(),
        ];
    }
}
