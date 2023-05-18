<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
           CategoriaProductoSeeder::class,
           ProductoSeeder::class,
           SeederTablaPermisos::class,
           UsuarioSeeder::class,
           PublicarProductoSeeder::class,

          
        ]);
        // \App\Models\User::factory(10)->create();
          
 
        \App\Models\User::factory(10)->create();
        \App\Models\CompraProducto::factory(10)->create();
        \App\Models\DetalleCompraProducto::factory(10)->create();
        \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
