<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\PublicarProducto;
class PublicarProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i <= 12; $i++) {
            $publicacion = new PublicarProducto();
            $publicacion->id_usuario = 1;
            $publicacion->id_producto = $i;
            $publicacion->cantidad = 5;
            
            $publicacion->save();
        }
    }
}