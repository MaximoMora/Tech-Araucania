<?php
session_start(); //session start es una funcionalidad que reanuda o inicia la sesio
session_destroy();
header('Location:login.php'); //esta linea hace
?>