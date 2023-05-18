<?php

namespace App\Http\Controllers;

use console;
use App\Models\Producto;
use App\Models\CategoriaProducto;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    //public function
    public function index(){
      $categorias = CategoriaProducto::all();
      $productos = Producto::all();
      return view('welcome', compact('productos','categorias'));
       
    }
}
