@extends('layouts.app')
@section('title', 'Publicar producto')
@section('content')

<div class="container" style="font-size: 20px; margin-top:5%;">
    <form action="{{ route('publicar.store') }}" method="POST" id="formulariopublicar" class="form-horizontal" enctype="multipart/form-data">
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
                <img id="vista-previa" src="#" alt="Vista previa de la imagen" style="display:none; max-width: 300px;">
            </div>
        </div>
        
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <a href="{{ url()->previous() }}" class="btn btn-secondary">Volver</a>
                <button type="submit" class="btn btn-primary">Publicar producto</button>
            </div>
        </div>
    </form>
    <h4 class="col-sm-offset-2 col-sm-10 text-center">Utilice esta sección para buscar imágenes y obtener una idea de qué imagen del producto desea subir.</h4>
    <div class="form-group">
        <label for="busqueda" class="control-label col-sm-2">Buscar Imagen:</label>
        <div class="col-sm-offset-2 col-sm-10">
            <input type="text" name="busqueda" id="busqueda" class="form-control" placeholder="Introduce el nombre del producto">
            <button id="buscarImagen" class="btn btn-dark" style="margin-top: 1%">Buscar</button>
        </div>
    </div>
    <div id="imagenesBusqueda">
    </div>       
</div>
<script>
    document.getElementById('buscarImagen').addEventListener('click', function() {
        let searchTerm = document.getElementById('busqueda').value;
        let url = `{{ route('pixabay.search') }}?q=${searchTerm}`;
        
        fetch(url)
            .then(function(response) {
                return response.json();
            })
            .then(function(data) {
                let images = data.hits;
                let imagesContainer = document.getElementById('imagenesBusqueda');
                imagesContainer.innerHTML = '';
                
                images.forEach(function(image) {
                    let imgElement = document.createElement('img');
                    imgElement.src = image.webformatURL;
                    imgElement.alt = image.tags;
                    imgElement.style.maxWidth = '300px';
                    imagesContainer.appendChild(imgElement);
                });
            })
            .catch(function(error) {
                console.error('Error:', error);
            });
    });
</script>

@endsection 