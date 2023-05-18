<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;
use App\Models\DetalleCompraProducto;
use App\Models\CompraPublicadoProducto;

class CartController extends Controller
{
    public function shop()
    {
        $products = Producto::all();
       //dd($products);
        return view('Modulos.busqueda.busqueda')->with(['productos' => $products]);
    }

    public function cart(){
        $cartCollection = \Cart::getContent();
        //dd($cartCollection);
        //return view('ejemplo',compact('cartCollection'));
        return view('cart')->with(['cartCollection' => $cartCollection]);
    }
    public function remove(Request $request){
        \Cart::remove($request->id);
        return redirect()->route('cart.index')->with('success_msg', 'Producto Eliminado!');
    }

    public function add(Request$request){
        \Cart::add(array(
            'id' => $request->id,
            'name' => $request->name,
            'price' => $request->price,
            'quantity' => $request->quantity,
            'attributes' => array(
                'image' => $request->img,
                'slug' => $request->slug
            )
        ));
        return redirect()->route('cart.index')->with('success_msg', 'Item Agregado a sú Carrito!');
    }

    public function update(Request $request){
        \Cart::update($request->id,
            array(
                'quantity' => array(
                    'relative' => false,
                    'value' => $request->quantity
                ),
        ));
        return redirect()->route('cart.index')->with('success_msg', 'Carrito actualizado!');
    }

    public function clear(){
        \Cart::clear();
        return redirect()->route('cart.index')->with('success_msg', 'Carrito estaá vacío!');
    }
    public function guard(){

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
     
       
       
       
        return redirect()->route('cart.index')->with('success_msg', 'Compra completada!');
        


    }

 

}
