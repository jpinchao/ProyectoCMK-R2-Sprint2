<?php

namespace App\Http\Controllers;

use App\Models\CompraPublicadoProducto;
use App\Models\DetalleCompraProducto;
use Illuminate\Http\Request;

class ejemploController extends Controller
{
    public function __invoke()
    {
        $cartCollection = \Cart::getContent();
        $compra= new CompraPublicadoProducto();
        
        $compra->fecha= new \DateTime;
        $compra->id_usuario = \Auth::user()->id;
        $compra->save();
        

     
        foreach($cartCollection as $item){
            $detalle= new DetalleCompraProducto();
            $detalle->id_compra=$compra->id;
            $detalle->id_publicado_producto=$item->id;
            $detalle->nombreProducto= $item->name;
            $detalle->precioProducto= $item->price;
            $detalle->descripcionProducto= "ERR";
            $detalle->cantidad=$item->quantity;
            $detalle->save();
        }
     
       
        $cartCollection2=$cartCollection;
        
        return view('ejemplo');
        //return view('Modulos.busqueda.busqueda');
    }

    
}
