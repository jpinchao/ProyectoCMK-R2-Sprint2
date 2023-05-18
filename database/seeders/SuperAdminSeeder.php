<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class SuperAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       // $usuario =User::create([
       //     'name'=>'Admin Super',
       //     'email'=> 'avalentierra@unal.edu.co',
       //     'password'=>bcrypt('123456789')
       // ]);
        //$rol=Role::create(['name'=>'SuperAdministrador']);
        //$permisos=Permission::pluck('id','id')->all();
        //$rol->syncPermissions($permisos);
        //$usuario->assignRole([$rol->id]);
        //$usuario->assignRole('SuperAdministrador');
    }
}
