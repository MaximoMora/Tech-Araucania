<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "inventario";

try {

    $conn = new PDO("mysql:host=$servername;dbname=$dbname;charset=utf8", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "<script> alert('Conexion exitosa'); </script>";
} catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>