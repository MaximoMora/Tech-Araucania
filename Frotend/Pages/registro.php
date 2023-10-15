<?php
$conn = new mysqli('localhost', 'root', '', 'login');
$response = "";

if ($conn->connect_error) {
    $response = array('error' => 'Error de conexión: ' . $conn->connect_error);
} else {
    if(isset($_POST["rut"]) && (isset($_POST["nombre"])) && (isset($_POST["apellido"])) && (isset($_POST["correo"])) && (isset($_POST["direccion"]))){
        $rut = $_POST["rut"];
        $nombre = $_POST["nombre"];
        $apellido = $_POST["apellido"];
        $correo = $_POST["correo"];
        $direccion = $_POST["direccion"];
        $sql = "INSERT INTO usuarios (rut, nombre, apellido, correo, direccion) VALUES ($rut, '$nombre', '$apellido', '$correo', '$direccion')";

        if ($conn->query($sql)) {
            $response = array('success' => 'Registro realizado con éxito.');
            echo 'Acción exitosa';
        } else {
            $response = array('error' => 'Error: ' . $conn->error);
        }
    } else {
        $response = array('error' => 'Missing "direccion" key in POST data');
    }
}

echo json_encode($response);
?>