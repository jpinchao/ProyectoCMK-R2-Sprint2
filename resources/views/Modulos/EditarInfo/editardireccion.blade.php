@extends('layouts.app')
@section('title', 'Editar dirección')
@section('content')
<form action="{{ route('editardireccion.store') }}" id="formulariodireccion" method="POST" style="font-size: 20px; margin-top:5%;">
    @csrf
    <div class="form-group">
        <label for="numeroDeCalle" class="control-label col-sm-2">Número de calle:</label>
        <div class="col-sm-10">
            <input type="text" id="numeroDeCalle" name="numeroDeCalle" required class="form-control" value="{{ $direccion->numeroDeCalle ?? '' }}">
        </div>
    </div>
    <div class="form-group">
        <label for="barrio" class="control-label col-sm-2">Barrio:</label>
        <div class="col-sm-10">
            <input type="text" id="barrio" name="barrio" required class="form-control" value="{{ $direccion->barrio ?? '' }}">
        </div>
    </div>
    <div class="form-group">
        <label for="comuna_sector" class="control-label col-sm-2">Comuna o Sector:</label>
        <div class="col-sm-10">
            <input type="text" id="comuna_sector" name="comuna_sector" class="form-control" value="{{ $direccion->comuna_sector ?? '' }}">
        </div>
    </div>
    <div class="form-group">
        <label for="ciudad" class="control-label col-sm-2">Ciudad:</label>
        <div class="col-sm-10">
            <input type="text" id="ciudad" name="ciudad" required class="form-control" value="{{ $direccion->ciudad ?? '' }}">
        </div>
    </div>
    <div class="form-group">
        <label for="departamento_provincia" class="control-label col-sm-2">Departamento </label>
        <div class="col-sm-10">
            <input type="text" id="departamento_provincia" name="departamento_provincia" required class="form-control" value="{{ $direccion->departamento_provincia ?? '' }}">
        </div>
    </div>
    <div class="form-group">
        <label for="pais" class="control-label col-sm-2">País:</label>
        <div class="col-sm-10">
            <input type="text" id="pais" name="pais" required class="form-control" value="{{ $direccion->pais ?? '' }}">
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <a href="{{ url()->previous() }}" class="btn btn-secondary">Volver</a>
            <button type="submit" class="btn btn-primary">Guardar</button>
        </div>
    </div>
</form>
@endsection
