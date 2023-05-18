<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProductoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombre' => $this->faker->name(),
            'precio' => $this->faker->numberBetween(2999,999999),
            'descripcion' => $this->faker->paragraph(1),
            'id_categoria' => $this->faker->numberBetween(1,5),
        ];
    }
}
