<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Producto;
use App\Models\CategoriaProducto;

class ProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $productos = array(
        array("id" => "1", "nombre" => "Laptop HP", "descripcion" => "Laptop HP con procesador Intel i5, 8GB RAM y 256GB SSD", "precio" => 9500, "id_categoria" => "1", "imagen" => "1.jpg"),
        array("id" => "2", "nombre" => "iPhone 13", "descripcion" => "iPhone 13 con pantalla OLED, 128GB de almacenamiento y cámara de 12MP", "precio" => 18000, "id_categoria" => "1", "imagen" => "2.jpg"),
        array("id" => "3", "nombre" => "Televisor Samsung", "descripcion" => "Televisor Samsung de 55 pulgadas con resolución 4K y Smart TV", "precio" => 11000, "id_categoria" => "2", "imagen" => "3.jpg"),
        array("id" => "4", "nombre" => "Refrigerador LG", "descripcion" => "Refrigerador LG de 25 pies cúbicos con dispensador de agua y hielo", "precio" => 14500, "id_categoria" => "2", "imagen" => "4.jpg"),
        array("id" => "5", "nombre" => "Bicicleta de montaña", "descripcion" => "Bicicleta de montaña con cuadro de aluminio y suspensión delantera", "precio" => 7500, "id_categoria" => "3", "imagen" => "5.jpg"),
        array("id" => "6", "nombre" => "Tenis Nike", "descripcion" => "Tenis Nike para correr con tecnología Air Max y suela de goma", "precio" => 1800, "id_categoria" => "4", "imagen" => "6.jpg"),
        array("id" => "7", "nombre" => "Reloj Casio", "descripcion" => "Reloj Casio con cronómetro, alarma y resistencia al agua", "precio" => 850, "id_categoria" => "4", "imagen" => "7.jpg"),
        array("id" => "8", "nombre" => "Perfume Chanel", "descripcion" => "Perfume Chanel con aroma floral y notas de jazmín y rosa", "precio" => 3200, "id_categoria" => "5", "imagen" => "8.jpg"),
        array("id" => "9", "nombre" => "Libro de cocina", "descripcion" => "Libro de cocina con recetas saludables y nutritivas", "precio" => 700, "id_categoria" => "6", "imagen" => "9.jpg"),
        array("id" => "10", "nombre" => "Juego de mesa", "descripcion" => "Juego de mesa de estrategia para 2 a 4 jugadores", "precio" => 1200, "id_categoria" => "6", "imagen" => "10.jpg"),
        array("id" => "11", "nombre" => "Set de maquillaje profesional", "descripcion" => "Set completo de maquillaje profesional con sombras, labiales y brochas","precio" => 1500,"id_categoria" => "5","imagen" => "11.jpg"),
        array("id" => "12", "nombre" => "Raqueta de tenis", "descripcion" => "Raqueta de tenis profesional, ligera y resistente", "precio" => 1200, "id_categoria" => "3","imagen" => "12.jpg")
    );
        foreach ($productos as $producto) {
            $nuevoProducto = new Producto();
            $nuevoProducto->id = $producto["id"];
            $nuevoProducto->nombre = $producto["nombre"];
            $nuevoProducto->descripcion = $producto["descripcion"];
            $nuevoProducto->precio = $producto["precio"];
            $nuevoProducto->id_categoria = $producto["id_categoria"];
            $nuevoProducto->imagen = $producto["imagen"];
            $nuevoProducto->save();
        }
    }
}