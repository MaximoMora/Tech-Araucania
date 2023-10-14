<?php

    $conexion = mysqli_connect("db.inf.uct.cl", "jpoblete", "21736669", "A2023_jpoblete");

    if($conexion){
        echo "funciona";
    } else{
        echo "No funciona xd";
    }
?>