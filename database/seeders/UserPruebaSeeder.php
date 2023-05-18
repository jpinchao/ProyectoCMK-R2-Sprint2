<?php

namespace Database\Seeders;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
class UserPruebaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //user de prueba
        
        $userprueba1=User::where('email','admin1@admin.com')->first();
        if($userprueba1){
            $userprueba1->delete();
        }
        $userprueba1= User::create([
            'name' => 'Admin1',
            'email' => 'admin1@admin.com',
            'password' => Hash::make('12345678')
        ]);

        $userprueba2=User::where('email','admin2@admin.com')->first();
        if($userprueba2){
            $userprueba2->delete();
        }
        $userprueba2= User::create([
            'name' => 'Admin2',
            'email' => 'admin2@admin.com',
            'password' => Hash::make('12345678')
        ]);

        $userprueba3=User::where('email','admin3@admin.com')->first();
        if($userprueba3){
            $userprueba3->delete();
        }
        $userprueba3= User::create([
            'name' => 'Admin3',
            'email' => 'admin3@admin.com',
            'password' => Hash::make('12345678')
        ]); 
    }
}
