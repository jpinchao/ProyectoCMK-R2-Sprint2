<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PublicarProductoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'id_usuario' => $this->faker->numberBetween(1,3),
            'id_producto' => $this->faker->numberBetween(1,20),
            //'fecha' => $this->faker->date(),
            'cantidad' => $this->faker->numberBetween(1,5),
        ];
    }
}
