<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<div style="padding-top: 5rem;">
    <div style="padding-top: 3rem;">
        <div style="display: flex; justify-content: center;">
            <main class="main" id="contenido">
                <!-- Contenido de data.view.blade.php -->

                <div class="card" >
                <div class="card-body">
                <form action="{{ route('filtrar-datos') }}" method="POST">
                    @csrf
                    <div>
                        <label for="name">Nombre:</label>
                        <input type="text" name="name" id="name" placeholder="Ingrese el nombre">
                    </div>
                    <div>
                        <label for="start_date">Fecha de inicio:</label>
                        <input type="date" name="start_date" id="start_date">
                    </div>
                    <div>
                        <label for="end_date">Fecha de fin:</label>
                        <input type="date" name="end_date" id="end_date">
                    </div>
                    <button class="btn btn-primary" type="submit">Filtrar</button>
                    <a role="button" class="btn btn-info" href="{{ route('generar-pdf') }}">Generar PDF</a>
                    <a href="{{ url()->previous() }}" class="btn btn-secondary">Volver</a>
                </form>

                </div>
                </div>
                
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>precio</th>
                            <th>cantidad</th>
                            <th>Fecha</th>
                            <!-- Otros campos de la tabla -->
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $item)
                        <tr>
                            <td>{{ $item['nombre']}}</td>
                            <td>{{ $item['precio'] }}</td>
                            <td>{{ $item['cantidad']}}</td>
                            <td>{{ $item['fecha']}}</td>
                            <!-- Otros campos de la tabla -->
                        </tr>
                        @endforeach
                    </tbody>
                </table>

               
            </main>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>