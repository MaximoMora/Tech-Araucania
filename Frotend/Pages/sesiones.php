<?php
session_start();
if(!isset($_SESSION['correo'])){
    echo "<b>No Has Iniciado Sesion</b>";
}{
    print_r($_SESSION['correo']);
}
?>