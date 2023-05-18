@extends('layouts.app')
@section('title', 'Editar publicación')
@section('content')

<div class="container" style="font-size: 20px; margin-top:5%;">
<form  method="POST" action="{{ route('publicar.update',  $publicacion->id_producto) }}" id="formularioeditar" class="form-horizontal" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="nomre" class="control-label col-sm-2">Nombre:</label>
        <div class="col-sm-10">
            <input type="text" name="nombre" id="nombre" class="form-control" placeholder="Introduce el Nombre del producto" required value="{{ $publicacion->nombre }}">
        </div>
    </div>
    <div class="form-group">
        <label for="descripcion" class="control-label col-sm-2">Descripción:</label>
        <div class="col-sm-10">
            <input type="text" name="descripcion" id="descripcion" class="form-control" value="{{$publicacion->descripcion }}" placeholder="Introduce la descripción del producto">
        </div>
    </div> 
    <div class="form-group">
        <label for="cantidad" class="control-label col-sm-2">Cantidad:</label>
        <div class="col-sm-10">
            <input type="number" name="cantidad" id="cantidad" class="form-control" placeholder="Introduce la cantidad disponible del producto" required value="{{ $publicacion->cantidad }}">
        </div>
    </div>
    <div class="form-group">
        <label for="precio" class="control-label col-sm-2">Precio:</label>
        <div class="col-sm-10">
            <input type="number" name="precio" id="precio" class="form-control" step="0.01" placeholder="Introduce el precio del producto" required value="{{ $publicacion->precio }}">
        </div>
    </div>
    <div class="form-group">
            <label for="categoria"  class="control-label col-sm-2">Categoría:</label>
            <div class="col-sm-10">
            <select name="categoria" id="categoria" class="form-control">
                @foreach ($categorias as $categoria)
                    <option value="{{ $categoria->id }}">{{ $categoria->nombre }}</option>
                @endforeach
            </select>
            </div>
        </div>
        
    <div class="form-group">
        <label for="imagen" class="control-label col-sm-2">Imagen:</label>
        <div class="col-sm-10">
            <input type="file" name="imagen" class="form-control-file" id="imagen" style="color:transparent"> 
            <img id="vista-previa" src="{{ asset('imagenes/Products/' . $publicacion->imagen) }}" alt="Vista previa de la imagen" style="display:block; max-width: 300px;">
            <input type="hidden" name="imagen_actual" value="{{ $publicacion->imagen }}">
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <a href="{{ url()->previous() }}" class="btn btn-secondary">Volver</a>
            <button type="submit" class="btn btn-primary">Actualizar producto</button>
        </div>
    </div>
</form>
</div>
@endsection
