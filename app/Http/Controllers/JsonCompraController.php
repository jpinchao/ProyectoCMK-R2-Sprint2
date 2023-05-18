<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use mysqli;

class JsonCompraController extends Controller
{
    public function compras()
    {
        $servername = "localhost";
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

        echo json_encode($datos);
    }
    public function ventas()
    {
        $servername = "localhost";
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
        $user2 = auth()->user();
        $sql = "SELECT detalle_compra_productos.nombreProducto as nombre, detalle_compra_productos.precioProducto as precio, detalle_compra_productos.cantidad as cantidad, compras_productos.created_at as fecha FROM compras_productos, detalle_compra_productos, users WHERE compras_productos.id=detalle_compra_productos.id_compra && users.id=compras_productos.id_usuario && users.id != $user2->id";
      
        $result = $conn->query($sql);
       

        $datos = array();
        
       
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                array_push($datos, $row);
            }
        }

        $conn->close();

        echo json_encode($datos);
    }
   
}
