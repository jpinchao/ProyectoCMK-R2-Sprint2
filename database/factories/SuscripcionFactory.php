<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class SuscripcionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'estado' => 'suscripcion',
            'fecha_inicio' => $this->faker->date(),
            'tipo_id' => $this->faker->numberBetween(1,5),
        ];
    }
}
