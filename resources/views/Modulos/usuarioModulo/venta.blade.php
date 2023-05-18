@extends('layouts.menuUsuario')
@section('title','Gestionar Ventas')
@section('content')

   
   
     <!--data table-->
     <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css" />
  
 
    
        <div class="container my-5">
        <h2>ESTO ES VENTAS</h2>
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">                       
                    <table id="datatable_users" class="table table-striped">                          
                        <thead>
                            <tr>
                                <th class="centered ">nombre</th>
                                <th class="centered ">fecha</th>
                                <th class="centered">Precio</th>
                                <th class="centered">proveedor</th>
                                <th class="centered">Options</th>  
                                
                            </tr>
                        </thead>
                        <tbody id="tableBody_users"></tbody>
                    </table>
                </div>
            </div>
        </div>

        

     <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>   
    
     <!-- DataTable -->
     <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
     
     <script src="{{ URL::asset('js/datosCompra.js')}}"></script> 
                

@endsection
