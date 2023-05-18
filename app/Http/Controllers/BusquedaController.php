<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;

class BusquedaController extends Controller
{
    public function __invoke()
    {
            $productos = Producto::all();
            return view('Modulos.busqueda.busqueda', ['productos' => $productos]);
        //return view('Modulos.busqueda.busqueda');
    }
}
