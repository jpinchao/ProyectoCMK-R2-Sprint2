<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->name = "Vendedor";
        $user->email = "admin1@admin.com";
        $user->phone = "3103203303";
        $user->password = bcrypt("12345678");
        $user->save();

        $user = new User();
        $user->name = "Super Admin";
        $user->email = "superadmin@admin.com";
        $user->phone = "3113213313";
        $user->password = bcrypt("12345678");
        $user->save();

    }
}
