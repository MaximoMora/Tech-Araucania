<?php
echo "hola";

if (isset($_POST["subir"])) {
    include("conexion_2.php");

    $rut = $_POST['rut'];
    $correo = $_POST['correo'];

    $sql = $pdo->prepare("SELECT * FROM usuarios WHERE rut = :rut AND correo = :correo");
    $sql->bindParam(":rut", $rut, PDO::PARAM_INT);
    $sql->bindParam(":correo", $correo, PDO::PARAM_STR);
    $sql->execute();

    $numeroRegistros = $sql->rowCount();

    if ($numeroRegistros >= 1) {
        echo "Bienvenido";
    } else {
        echo "No se encontraron registros";
    }
}
?>
