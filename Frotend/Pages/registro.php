<?php
session_start(); // Iniciar la sesión

$conn = new mysqli('db.inf.uct.cl', 'jpoblete', '21736669', 'A2023_jpoblete');
$response = array();

if ($conn->connect_error) {
    $response = array('error' => 'Error de conexión: ' . utf8_encode($conn->connect_error));
} else {
    if (isset($_POST["nombre"]) && isset($_POST["apellido"]) && isset($_POST["direccion"])) {
        $nombre = ($_POST["nombre"]);
        $apellido = ($_POST["apellido"]);
        $direccion = ($_POST["direccion"]);

        $sql = "INSERT INTO usuarios (nombre, apellido, direccion) VALUES ('$nombre', '$apellido', '$direccion')";

        if ($conn->query($sql)) {
  

            $response = array('success' => 'Registro exitoso');
        } else {
            $response = array('error' => 'Error: ' . $conn->error);
        }
    } else {
        $response = array('error' => 'Faltan datos en la solicitud POST');
    }
}

header('Content-Type: application/json');
echo json_encode($response);
?>
