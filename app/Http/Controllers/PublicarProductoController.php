<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Models\Producto;
use Illuminate\Http\Request;
use App\Models\PublicarProducto;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\CategoriaProducto;

class PublicarProductoController extends Controller
{
    /*function __construct()
    {
         $this->middleware('permission:ver-publicacion|crear-publicacion|editar-publicacion|borrar-publicacion')->only('index');
         $this->middleware('permission:crear-publicacion', ['only' => ['create','store']]);
         $this->middleware('permission:editar-publicacion', ['only' => ['edit','update']]);
         $this->middleware('permission:borrar-publicacion', ['only' => ['destroy']]);
    }*/
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $publicaciones = DB::table('publicar_productos')
               ->join('productos', 'publicar_productos.id_producto', '=', 'productos.id')
               ->select('*')
               ->where('publicar_productos.id_usuario', Auth::id())
               ->get();
        
        return view('modulos.publicar.publicaciones', compact('publicaciones'));     
    }   
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categorias = CategoriaProducto::all();
        return view('modulos.publicar.publicar', compact('categorias'));
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nombre' => ['required', 'string', 'max:255'],
            'descripcion' => ['required', 'string', 'max:255'],
            'cantidad' => ['required', 'integer', 'min:1'],
            'precio' => ['required', 'numeric', 'min:0'],
            'imagen' => ['nullable', 'image', 'max:2048'] 
        ]);
        
        $producto = new Producto;
        $producto->nombre = $validatedData['nombre'];
        $producto->precio = $validatedData['precio'];
        $producto->descripcion = $validatedData['descripcion'];
        if ($request->hasFile('imagen')) {
            $image = $request->file('imagen');
            $imageName = time().'.'.$image->getClientOriginalExtension();
            $image->move(public_path('imagenes/Products'), $imageName);
            $producto->imagen = $imageName;
        }
        $producto->id_categoria = $request->input('categoria');
        $producto->save();

        $publicacion = new PublicarProducto;
        $publicacion->id_usuario = Auth::id();
        $publicacion->id_producto = $producto->id;
        $publicacion->cantidad = $validatedData['cantidad'];
        $publicacion->save();
        return redirect()->route('publicar.index')->with('success', 'La publicación se ha creado correctamente.');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {   
        $publicacion = DB::table('publicar_productos')
           ->join('productos', 'publicar_productos.id_producto', '=', 'productos.id')
           ->select('*')
           ->where('productos.id', '=', $id)
           ->where('publicar_productos.id_usuario', '=', Auth::id())
           ->first();
         
        $categorias = CategoriaProducto::all();   
        return view('modulos.publicar.editarpublicacion', compact('publicacion', 'categorias'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $producto= Producto::where('id', $id)->first();
        $producto->nombre = $request->input('nombre');
        $producto->descripcion = $request->input('descripcion');
        $producto->precio = $request->input('precio');
        $producto->id_categoria = $request->input('categoria');
        if ($request->hasFile('imagen')) {
            $ruta_imagen = public_path('imagenes/Products/' . $producto->imagen);
            unlink($ruta_imagen);
            $imagen = $request->file('imagen');
            $nombre_imagen = 'IMG_'.time() . '.' . $imagen->getClientOriginalExtension();
            $imagen->move(public_path('imagenes/Products/'), $nombre_imagen);
            $producto->imagen = $nombre_imagen;
        } else {
            $producto->imagen = $request->imagen_actual;
        }
        $producto->save();
        $publicacion = PublicarProducto::where('id_producto', $id)->first();
        $publicacion->cantidad = $request->input('cantidad');
        $publicacion->save();
        return redirect()->route('publicar.index')->with('success', 'La publicación se ha actualizado correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $publicacion = PublicarProducto::where('id_producto', $id)->first();
        $publicacion->delete();
        $producto= Producto::where('id', $id)->first();
        $ruta_imagen = public_path('imagenes/Products/' . $producto->imagen);
        if (file_exists($ruta_imagen)) {
            unlink($ruta_imagen);
        }
        $producto->delete();
        return redirect()->route('publicar.index')->with('success', 'La publicación se ha eliminado correctamente.');
    }
}
