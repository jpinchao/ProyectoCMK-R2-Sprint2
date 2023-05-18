<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VentaController extends Controller
{
    public function __invoke(){
        return view('Modulos.venta.ventas');

    }
}
