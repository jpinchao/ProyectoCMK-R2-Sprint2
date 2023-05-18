@extends('layouts.app')
@section('title', 'Mis datos personales')
@section('content')
    <div class="container" style="font-size: 20px; margin-top:5%;">
        <div class="card">
            <div class="card-header">
                <h3>Resumen de datos personales</h3>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <ul>
                            <li><strong>Nombre:</strong> {{ $usuario->name }}</li>
                            <li><strong>Correo electrónico:</strong> {{ $usuario->email }}</li>
                            <li><strong>Telefono:</strong> {{ $usuario->phone ?? 'Sin telefono' }}</li>
                            <li><strong>Direccion:</strong> {{ $direccionCompleta ?? 'Sin Dirección' }}</li>
                        </ul>
                        <form method="GET" action="{{ route('editarinfo.edit', $usuario->id) }}">
                            @csrf
                            <a href="{{ url()->previous() }}" class="btn btn-secondary">Volver</a>
                            <button type="submit" class="btn btn-primary">Editar</button>
                        </form>
                    </div>
                    <div class="col-md-6" style="font-family: Georgia, 'Times New Roman', Times, serif; " >
                        <div class="text-center" >
                            <h6>CHISTE DEL DIA</h6>
                            <button id="generarChiste" class="btn btn-primary">Generar Chiste</button>
                        </div>
                            <label for="chiste" id="titulochiste" class="chiste"></label>
                            <p id="chiste" class="text-center"></p>
                            <label for="chisteoriginal" id="titulochisteoriginal" class="chiste"></label>
                            <p id="chisteoriginal" class="text-center"></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        document.getElementById('generarChiste').addEventListener('click', function() {
            fetch('{{ route('apijoke') }}')
        .then(function(response) {
            return response.json();
        })
        .then(function(data) {
            var chiste = data.chiste;
            var chisteoriginal=data.joke;
            document.getElementById('titulochiste').textContent = 'Español:';
            document.getElementById('chiste').textContent = chiste;
            document.getElementById('titulochisteoriginal').textContent = 'Original:';
            document.getElementById('chisteoriginal').textContent = chisteoriginal;
        })
        .catch(function(error) {
            console.error('Error:', error);
        });
        });
    </script>
@endsection
