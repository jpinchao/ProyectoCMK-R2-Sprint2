<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;


class DireccionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'numeroDeCalle' => 'Carrera 64 #12-3',
            'barrio' => $this->faker->name(),
            'comuna_sector' => $this->faker->name(),
            'ciudad' => $this->faker->city(),
            'departamento_provincia'=>$this->faker->word(),
            'pais'=>$this->faker->country()
        ];
    }
}
