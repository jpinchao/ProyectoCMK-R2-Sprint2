<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\Direccion;

class EditarInfoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
        public function index()
        {
            $usuario=User::find(Auth::id());
            $direccion=Direccion::find($usuario->id_direccion);
            if ($direccion === null) {
                $direccionCompleta = 'Sin Dirección';
            } else {
                $direccionCompleta = 'calle: '.$direccion->numeroDeCalle . ', ' . $direccion->barrio . ', ' . $direccion->ciudad . '.';
            }
            return view('modulos.editarinfo.resumen', compact('usuario', 'direccionCompleta'));
                
        }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        
        return view('modulos.editarinfo.editarinfo', compact('id'));
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
        $usuario = User::find($id);
        $usuario->name = $request->input('nombre');
        $usuario->phone = $request->input('telefono');
        $usuario->email = $request->input('correo');
        
        $usuario->save();
        
        return redirect()->route('editarinfo.index')->with('success', 'Datos actualizados correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function editardatos($id){
        $usuario = User::find($id);
        return view('modulos.editarinfo.editardatos', compact('usuario'));
    }
}
