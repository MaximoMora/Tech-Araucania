<?php
if(!empty($_POST["registro"])){
    if (!empty($_POST["rut"]) or empty($_POST["nombre"]) or empty ($_POST["apellido"]) or empty ($_POST["correo"]) or empty ($_POST["direccion"])){
        echo '<div class="alerta">campos vacios</div>';
    }

    else {
        $rut = $_POST["rut"];
        $nombre = $_POST["nombre"];
        $apellido = $_POST["apellido"];
        $correo = $_POST["correo"];
        $direccion = $_POST["direccion"];
        $sql=$conexion->query("INSERT INTO registro(rut, nombre, apellido, correo, direccion)
        VALUES('$rut', '$nombre', '$apellido', '$correo', '$direccion')");
        if($sql==1){
            echo '<div class="success">registro exitoso</div>';
        } else {
            echo '<div class="error">registro fallido</div>';
        }
    
    }
}
    
?>