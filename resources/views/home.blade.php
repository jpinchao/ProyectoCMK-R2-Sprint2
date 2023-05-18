@extends('layouts.app')

@section('content')
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<div class="container-fluid pt-5">
<div class="container pt-3">
    <div class="row justify-content-center">
        <main class="main" id="contenido">
        <canvas id="bar-chart"></canvas>

<script>
    var data = @json($data);
    console.log(data);
    var ctx = document.getElementById('bar-chart').getContext('2d');
    var chart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: data.nombresProductos,
            datasets: [{
                label: 'Cantidad de productos comprados',
                data: data.cantidades,
               
                backgroundColor: 'rgba(75, 192, 192, 0.2)',
                borderColor: 'rgba(75, 192, 192, 1)',
                borderWidth: 1
            }]
        },
        options: {
            responsive: true,
            scales: {
                y: {
                    beginAtZero: true,
                    precision: 0,
                    stepSize: 1
                }
            }
        }
    });
</script>

         

   

       </main>
    </div>
</div>
</div>




@endsection
