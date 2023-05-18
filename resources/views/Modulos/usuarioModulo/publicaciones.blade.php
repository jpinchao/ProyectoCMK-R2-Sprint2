  @extends('layouts.menuUsuario')

  @section('content')

  <div class="container">
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
                    <a href="{{ route('publicar.edit', $publicacion->id_producto) }}" class="btn btn-sm btn-primary" title="Editar">
                        <i class="fa fa-edit"></i>
                    </a>   
                    <form action="{{ route('publicar.destroy', $publicacion->id_producto) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger" title="Eliminar">
                            <i class="fa fa-trash"></i>
                        </button>
                    </form>
                </div>
            </td>
            </tr>
          @endforeach
        </tbody>
      </table>
  </div>
  @endsection
