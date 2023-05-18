<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Models\DetalleCompraProducto;

class HomeController extends Controller
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
       // return view('home');
       $data = $this->obtenerCantidadProductosCompradosPorMes();
    
       return view('home', compact('data'));
    }
    public function obtenerCantidadProductosCompradosPorMes()
{
    $data = DetalleCompraProducto::selectRaw('MONTH(compras_productos.created_at) AS mes,SUM(detalle_compra_productos.cantidad) AS cantidad, detalle_compra_productos.nombreProducto AS nombre_producto')
        ->join('compras_productos', 'detalle_compra_productos.id_compra', '=', 'compras_productos.id')
        ->groupBy('mes', 'nombre_producto')
        ->get();

    $meses = [];
    $cantidades = [];
    $nombresProductos = [];
   
    foreach ($data as $item) {
        $mes = Carbon::create()->month($item->mes)->format('F');
        $meses[] = $mes;
        $cantidades[] = $item->cantidad;
        $nombresProductos[] = $item->nombre_producto;
    }

    return compact('meses', 'cantidades', 'nombresProductos');
}
}
