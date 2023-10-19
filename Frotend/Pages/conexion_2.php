<?php


$servername = "db.inf.uct.cl";
$username = "jpoblete";
$password = "21736669";
$dbname = "A2023_jpoblete";

// Crear una conexión a la base de datos
$conn = new mysqli($servername, $username, $password, $dbname);

if (!$conn->set_charset("utf8")) {
    printf("Error cargando el conjunto de caracteres utf8: %s\n", $mysqli->error);
    exit();
}

if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
} else {
    echo "Conexión exitosa";
}
?>