<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CompraController extends Controller
{
    public function __invoke()
    {
        return view('Modulos.compra.compras');
    }
}
