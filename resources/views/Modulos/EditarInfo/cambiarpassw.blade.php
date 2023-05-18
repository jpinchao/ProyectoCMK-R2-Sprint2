@extends('layouts.app')
@section('title', 'Cambiar contraseña')
@section('content')
<div class="container" style="font-size: 20px; margin-top:5%;">
    <div class="card">
        <div class="card-header text-center">
            <h2>Cambiar contraseña</h2>
        </div>
        <div class="card-body">
            <form action="{{ route('editarpasswd.update', $usuario->id) }}" method="POST" id="formulariopw">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="password_nueva">Nueva contraseña:</label>
                    <input type="password" name="password_nueva" id="password_nueva" class="form-control">
                </div>
                <div class="form-group">
                    <label for="verificacion_password_nueva">Verificación de nueva contraseña:</label>
                    <input type="password" name="verificacion_password_nueva" id="verificacion_password_nueva" class="form-control">
                </div>
                
                <div class="form-group">
                    <a href="{{ url()->previous() }}" class="btn btn-secondary">Volver</a>
                    <button type="submit" class="btn btn-primary float-right">Cambiar contraseña</button>
                </div>

                
            </form>
        </div>
    </div>
</div>
@endsection
