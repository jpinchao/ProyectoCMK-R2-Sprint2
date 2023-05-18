<?php

namespace App\Http\Controllers;
use mysqli;
use App\Models\Producto;
use App\Models\publicarProducto;
use App\Models\DetalleCompraProducto;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf as PDF;
use Illuminate\Support\Facades\Auth;



class ReporteController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function showData()
    {
        $userId = Auth::id();
        $publ = publicarProducto::where('id_usuario', $userId)->get();
        $data = [];
        foreach ($publ as $registro) {
            $producto = Producto::find($registro->id_producto);
            if ($producto) {
                $data[] = $producto;
            }
        }
        return view('reportes.reporteVenta', compact('data'));
       /*$servername = "localhost";
       $username = "root";
       $password = "";
       //$dbname = "proyecto_software";
       $dbname = env('DB_DATABASE'); //Se busca el nombre de la base de datos en el archivo .env
       if($dbname==""){
           $dbname = config('database.connections.mysql.database'); //Si no se encuentra en el .env se busca en config/database.php
       }

       $conn = new mysqli($servername, $username, $password, $dbname);

       if ($conn->connect_error) {
           die("Connection failed: " . $conn->connect_error);
       }
       $user = auth()->user();
       $sql = "SELECT detalle_compra_productos.nombreProducto as nombre, detalle_compra_productos.created_at as fecha, detalle_compra_productos.precioProducto as precio, detalle_compra_productos.cantidad as cantidad FROM users, compras_productos, detalle_compra_productos WHERE compras_productos.id=detalle_compra_productos.id_compra && compras_productos.id_usuario=users.id && users.id=$user->id";
       $result = $conn->query($sql);

       $datos = array();

       if ($result->num_rows > 0) {
           while ($row = $result->fetch_assoc()) {
               array_push($datos, $row);
           }
       }

       $conn->close();
        //$data=$datos;
       //$data=json_encode($datos);
        */
        
    }
    
    public function filterData(Request $request)
    {
        $name = $request->input('name');
        $startDate = $request->input('start_date');
        $endDate = $request->input('end_date');
        
        $data = Producto::query()
            ->when($name, function ($query) use ($name) {
                return $query->where('name', 'like', "%{$name}%");
            })
            ->when($startDate && $endDate, function ($query) use ($startDate, $endDate) {
                return $query->whereBetween('created_at', [$startDate, $endDate]);
            })
            ->get();
    
        return view('reportes.reporteVenta', compact('data'));
    }
    
    public function generatePDF2()
    {
        $userId = Auth::id();
        $publ = publicarProducto::where('id_usuario', $userId)->get();
        $data = [];
        foreach ($publ as $registro) {
            $producto = Producto::find($registro->id_producto);
            if ($producto) {
                $data[] = $producto;
            }
        }
        $pdf = PDF::loadView('reportes.reportePublicacion', ['data' => $data]);
        //return $pdf->download('informe.pdf');
        $pdfPath = public_path('informe.pdf');
        $pdf->save($pdfPath);
        return response()->download($pdfPath)->deleteFileAfterSend();
        

    }
    
}
