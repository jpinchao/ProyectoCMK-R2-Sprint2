<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ModuloUsuarioController extends Controller
{
     /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('modulos.usuarioModulo.init_U');
    }
    public function compras()
    {
        return view('modulos.usuarioModulo.compra');
    }
    public function ventas()
    {
        return view('modulos.usuarioModulo.venta');
    }
    
}
