<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Pago;
class PagoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pago=new Pago();
        $pago->id="1";
        $pago->id_transacion='jdueu333';
        $pago->fecha="2000-02-03";
        $pago->total="23000";
        $pago->estado="completado";

    }
}
