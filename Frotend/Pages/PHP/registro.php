<?php
    require 'conexion_2.php';
    if(isset($_POST('subir'))){
        $rut = $_POST['rut'];
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $correo = $_POST['correo'];
        $direccion = $_POST['direccion'];

        $query = "INSERT INTO registro(rut, nombre, apellido, correo, direccion)
                VALUES('$rut', '$nombre', '$apellido', '$correo', '$direccion')";
        $resultado = mysqli_query($conexion, $query);

        if(!$subir){
            echo "no se subio";
        }
        else{
            echo "Datos subidos";
        }
    
?>