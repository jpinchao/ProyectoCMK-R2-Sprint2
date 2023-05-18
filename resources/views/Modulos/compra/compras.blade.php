@extends('layouts.app')

@section('title','Gestionar Compras')

@section('content')

<!doctype html>
<html lang="es">

<head>
<link rel="stylesheet" href="{{ URL::asset('css/compra.css')}}">
</head>
<body>
    <main>
        <section class="container-content py-5" id="section-content">        
            <div class="container my-4">
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">                       
                        <table id="datatable_users" class="table table-striped">                          
                            <thead>
                                <tr>
                                    <th class="centered ">nombre</th>
                                    <th class="centered ">fecha</th>
                                    <th class="centered">Total</th>
                                    <th class="centered">cantidad</th>
                                    <th class="centered">Options</th>  
                                    
                                </tr>
                            </thead>
                            <tbody id="tableBody_users"></tbody>
                        </table>
                    </div>
                </div>
            </div>

           
        </section>

    </main>

     
     <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
 
    
    
     <!-- DataTable -->
     <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
     <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>
     
     <script src="{{ URL::asset('js/compra_datos.js')}}"></script>
    

</body>

</html>

@endsection