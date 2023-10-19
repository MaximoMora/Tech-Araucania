<?php


$servername = "db.inf.uct.cl";
$username = "jpoblete";
$password = "21736669";
$dbname = "A2023_jpoblete";

// Crear una conexión a la base de datos
$conn = new mysqli($servername, $username, $password, $dbname);

<<<<<<< HEAD
if (!$conn->set_charset("utf8")) {
    printf("Error cargando el conjunto de caracteres utf8: %s\n", $mysqli->error);
    exit();
}

=======
// Verificar la conexión
>>>>>>> 267243af888671b2c01b5d5b20780e79f16d4393
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
} else {
    echo "Conexión exitosa";
}
?>