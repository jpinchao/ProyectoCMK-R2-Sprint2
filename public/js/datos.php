<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "basededatos";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, nombre, apellido, correo FROM usuario";
$result = $conn->query($sql);

$datos = array();

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        array_push($datos, $row);
    }
}

$conn->close();

echo json_encode($datos);
?>