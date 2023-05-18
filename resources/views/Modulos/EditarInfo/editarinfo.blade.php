@extends('layouts.app')
@section('title', 'Editar información')
@section('content')
    <div class="container" style="font-size: 20px; margin-top:5%;">
        <div class="card">
        <div class="card-header text-center">
             <h2>Editar datos personales</h2>
        </div>
            <div class="card-body">
                <div class="d-flex justify-content-between mb-5">
                    <h3 class="text-center">Datos personales</h3>
                    <form method="POST" action="{{ route('editardatos', $id) }}">
                         @csrf
                         <button class="btn btn-primary float-right" type="submit">Editar datos</button>
                    </form>
                </div>
                <div class="d-flex justify-content-between mb-5">
                    <h3 class="text-center">Seguridad</h3>
                    <a href="{{ route('editarpasswd.index') }}" class="btn btn-primary float-right">Cambiar Contraseña</a>
                </div> 
                <div class="d-flex justify-content-between mb-5">
                    <h3 class="text-center">Direcciones</h3>
                    <a href="{{ route('editardireccion.index') }}" class="btn btn-primary float-right">Editar Direcciones</a>
                </div> 
                <a href="{{ url()->previous() }}" class="btn btn-secondary">Volver</a>
            </div>
        </div>
    </div>
@endsection
