@extends('layouts.menuUsuario')

@section('content')

<div class="container">
    <form action="{{ route('publicar.store') }}" method="POST" class="form-horizontal" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="nombre" class="control-label col-sm-2">Nombre:</label>
            <div class="col-sm-10">
                <input type="text" name="nombre" id="nombre" class="form-control" placeholder="Introduce el nombre del producto" required>
            </div>
        </div>
        <div class="form-group">
            <label for="descripcion" class="control-label col-sm-2">Descripción:</label>
            <div class="col-sm-10">
                <textarea name="descripcion" id="descripcion" class="form-control" rows="3" placeholder="Introduce la descripción del producto"></textarea>
            </div>
        </div>
        <div class="form-group">
            <label for="cantidad" class="control-label col-sm-2">Cantidad:</label>
            <div class="col-sm-10">
                <input type="number" name="cantidad" id="cantidad" class="form-control" placeholder="Introduce la cantidad disponible del producto" required>
            </div>
        </div>
        <div class="form-group">
            <label for="precio" class="control-label col-sm-2">Precio:</label>
            <div class="col-sm-10">
                <input type="number" name="precio" id="precio" class="form-control" step="0.01" placeholder="Introduce el precio del producto" required>
            </div>
        </div>
        
        <div class="form-group">
            <label for="imagen" class="control-label col-sm-2">Imagenn:</label>
            <div class="col-sm-10">
                <input type="file" name="imagen" class="form-control-file" id="imagen" style="color:transparent"> 
                <img id="vista-previa" src="#" alt="Vista previa de la imagen" style="display:none; max-width: 300px;">
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-primary">Publicar producto</button>
            </div>
        </div>
    </form>
</div>
@endsection 