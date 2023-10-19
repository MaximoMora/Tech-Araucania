<?php
if (isset($_POST["subir"])) {
    include("conexion_2.php");

    $rut = ($_POST['rut']);
    $correo = ($_POST['email']);

    $conn = new mysqli($servername, $username, $password, $dbname);


    if ($conn->connect_error) {
        die("Error de conexión: " . $conn->connect_error);
    }
    $rut = $conn->real_escape_string($rut);
    $correo = $conn->real_escape_string($correo);


    $sql = "SELECT * FROM usuarios WHERE rut='$rut' AND correo='$correo'";

    $result = $conn->query($sql);

    if ($result->num_rows >= 1) {
        $registro = $result->fetch_assoc();
        session_start();
        $_SESSION['correo'] = "Hola!!! ". $registro['nombre'];
        echo "Bienvenido";
        header('Location: products.php');
    } else {

    }


    $conn->close();
}
?>