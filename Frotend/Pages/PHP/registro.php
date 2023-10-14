<?php
    include 'conexion_2.php';

    $rut = $_POST['rut'];
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $correo = $_POST['correo'];
    $direccion = $_POST['direccion'];

    $query = "INSERT INTO registro(rut, nombre, apellido, correo, direccion)
              VALUES('$rut', '$nombre', '$apellido', '$correo', '$direccion')";
    $resultado = mysqli_query($conexion, $query);
    
    
        

?>