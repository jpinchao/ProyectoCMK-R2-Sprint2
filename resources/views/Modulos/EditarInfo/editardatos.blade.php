@extends('layouts.app')
@section('title', 'Editar datos personales')
@section('content')
    <div class="container" style="font-size: 20px; margin-top:5%;">
        <div class="card">
            <div class="card-header text-center">
                <h2>Editar datos personales</h2>
            </div>
            <div class="card-body">
                <form action="{{ route('editarinfo.update', $usuario->id) }}" method="POST" id="formulariodatos">
                    @csrf
                    @method('PUT')  
                    <div class="form-group">
                        <label for="nombre">Nombre:</label>
                        <input type="text" name="nombre" id="nombre" value="{{ $usuario->name }}" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="telefono">Teléfono:</label>
                        <input type="text" name="telefono" id="telefono" value="{{ $usuario->phone}}" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="correo">Correo:</label>
                        <input type="email" name="correo" id="correo" value="{{ $usuario->email }}" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="verificacion_correo">Verificación de correo:</label>
                        <input type="email" name="verificacion_correo" value="{{ $usuario->email }}" id="verificacion_correo" class="form-control">
                    </div>
                    <div class="form-group">
                        <a href="{{ url()->previous() }}" class="btn btn-secondary">Volver</a>
                        <button type="submit" class="btn btn-primary float-right">Actualizar datos</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
