<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\CategoriaProducto;
class CategoriaProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {  
        $categorias = array(
            array("id" => "1", "nombre" => "Electrónica", "descripcion" => "Categoría de productos electrónicos"),
            array("id" => "2", "nombre" => "Electrodomésticos", "descripcion" => "Categoría de productos para el hogar"),
            array("id" => "3", "nombre" => "Deportes", "descripcion" => "Categoría de productos deportivos"),
            array("id" => "4", "nombre" => "Moda y accesorios", "descripcion" => "Categoría de productos de moda y accesorios"),
            array("id" => "5", "nombre" => "Belleza y cuidado personal", "descripcion" => "Categoría de productos de belleza y cuidado personal"),
            array("id" => "6", "nombre" => "Hogar y cocina", "descripcion" => "Categoría de productos para el hogar y la cocina")
        );
        
        foreach ($categorias as $categoria) {
            $newcategoria = new CategoriaProducto();
            $newcategoria->id = $categoria['id'];
            $newcategoria->nombre = $categoria['nombre'];
            $newcategoria->descripcion = $categoria['descripcion'];
            $newcategoria->save();
        }
        
    }
}
