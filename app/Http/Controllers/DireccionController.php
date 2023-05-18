<?php

namespace App\Http\Controllers;

use App\Models\Direccion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;



class DireccionController extends Controller
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
        return view ('Modulos.EditarInfo.editardireccion', compact('direccion'));
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
        $validatedData = $request->validate([
            'numeroDeCalle' => 'required|string',
            'barrio' => 'required|string',
            'comuna_sector' => 'nullable|string',
            'ciudad' => 'required|string',
            'departamento_provincia' => 'required|string',
            'pais' => 'required|string'
        ]);

        $direccion = new Direccion;
        $direccion->numeroDeCalle = $validatedData['numeroDeCalle'];
        $direccion->barrio = $validatedData['barrio'];
        $direccion->comuna_sector = $validatedData['comuna_sector'];
        $direccion->ciudad = $validatedData['ciudad'];
        $direccion->departamento_provincia = $validatedData['departamento_provincia'];
        $direccion->pais = $validatedData['pais'];
        $direccion->save();

        $user = User::find(Auth::user()->id);
        $user->id_direccion = $direccion->id;
        $user->save();
        
        return redirect()->back()->with('success', 'La dirección se ha guardado exitosamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Direccion  $direccion
     * @return \Illuminate\Http\Response
     */
    public function show(Direccion $direccion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Direccion  $direccion
     * @return \Illuminate\Http\Response
     */
    public function edit(Direccion $direccion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Direccion  $direccion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Direccion $direccion)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Direccion  $direccion
     * @return \Illuminate\Http\Response
     */
    public function destroy(Direccion $direccion)
    {
        //
    }
}
