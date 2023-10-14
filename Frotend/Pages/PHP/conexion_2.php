<?php
    $conexion = mysqli_connect("localhost", "root", "", "login");

    if($conexion){
        echo "funciona";
    } else{
        echo "No funciona xd";
    }
?>