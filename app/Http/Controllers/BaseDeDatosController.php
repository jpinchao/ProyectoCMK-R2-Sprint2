<?php

namespace App\Http\Controllers;

use mysqli;
use App\Models\Producto;
use Illuminate\Http\Request;

class BaseDeDatosController extends Controller
{
    public function jsonProductos()
    {
        $servername = "localhost";
        $username = "root";
        $password = "";
        //$dbname = "proyecto_software";
        $dbname = env('DB_DATABASE');
        $dbname = env('DB_DATABASE'); //Se busca el nombre de la base de datos en el archivo .env
        if($dbname==""){
            $dbname = config('database.connections.mysql.database'); //Si no se encuentra en el .env se busca en config/database.php
        }
        $conn = new mysqli($servername, $username, $password, $dbname);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        $user = auth()->user();
        $sql = "SELECT productos.nombre as nombre,productos.precio as precio, productos.descripcion as descripcion FROM `productos` ";
        $result = $conn->query($sql);

        $datosdeproductos = array();

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                array_push($datosdeproductos, $row);
            }
        }

        $conn->close();

        echo json_encode($datosdeproductos);
    }
    public function validarSuscripcion(){
        $user = auth()->user()->id_suscripcion;
        echo $user;

    }
   

    
}
