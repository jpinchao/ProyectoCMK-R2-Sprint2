@extends('layouts.app')
@section('title', 'Mis publicaciones')
@section('content')

<div class="container" style="font-size: 20px; margin-top:5%;">
    <table class="table">
      <thead>
        <tr>
          <th>Nombre</th>
          <th>Precio</th>
          <th>Cantidad Disponible</th>
          <th>Fecha de Publicación</th>
          <th>Opciones</th>
        </tr>
      </thead>
      <tbody>
        @foreach($publicaciones as $publicacion)
          <tr>
            <td>{{ $publicacion->nombre }}</td>
            <td>{{ $publicacion->precio }}</td>
            <td>{{ $publicacion->cantidad }}</td>
            <td>{{ $publicacion->created_at }}</td>
            <td>
            <div class="btn-group">
              <a href="{{ route('publicar.edit', $publicacion->id_producto) }}" class="btn btn-sm btn-primary mr-2" title="Editar">
                  <i class="fa fa-edit"></i>
              </a>
              <form id="formeliminar" class="eliminar-form" action="{{ route('publicar.destroy', $publicacion->id_producto) }}" method="POST">
                  @csrf
                  @method('DELETE')
                  <button type="submit" class="btn btn-sm btn-danger" title="Eliminar" onclick="eliminarPublicacion({{ $publicacion->id_producto }})">
                      <i class="fa fa-trash"></i>
                  </button>
              </form>
              
          </div>
          
          </td>
          </tr>
        @endforeach
        
      </tbody>
    </table>
    <a role="button" class="btn btn-info" href="{{ route('generar-pdf') }}">Generar PDF</a>
    <a href="{{ url()->previous() }}" class="btn btn-secondary">Volver</a>
</div>
<script src="{{ asset('js/app.js') }}" defer></script>
<script>
function eliminarPublicacion(id_producto) {
    event.preventDefault();
    swal.fire({
        title: '¿Estás seguro?',
        text: "¡No podrás revertir esto!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonText: 'Sí, eliminar',
        cancelButtonText: 'Cancelar'
    }).then((result) => {
        if (result.value) {
          //alert(id_producto);
          const form = document.getElementById('formeliminar');
          const id=id_producto;
          form.action = '{{ route("publicar.destroy", ":id") }}'.replace(':id', id);
          form.submit();        }
    });
}
</script>
@endsection
