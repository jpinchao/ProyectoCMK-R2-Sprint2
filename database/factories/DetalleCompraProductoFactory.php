<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class DetalleCompraProductoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            
            'id_compra' => $this->faker->numberBetween(1,5),
            'id_publicado_producto'=>$this->faker->numberBetween(1,20),
            'nombreProducto'=>$this->faker->name(),
            'precioProducto'=>$this->faker->numberBetween(2999,999999),
            'descripcionProducto'=>$this->faker->paragraph(1),
            'cantidad'=>$this->faker->numberBetween(1,5),
        
        ];
    }
}
