<?php

if(isset($_POST["subir"])){
    include("conexion_2.php");

    $rut=($_POST['rut']);
    $correo=($_POST['email']);

    $sql=$conn->prepare("SELECT * FROM usuarios WHERE rut=:rut AND correo=:correo");

    $sql->bindParam("rut",$rut, PDO::PARAM_INT);
    $sql->bindParam("correo",$correo, PDO::PARAM_STR);
    $sql->execute();

    $registro=$sql->fetch(PDO::FETCH_ASSOC);

    print_r($registro);

    

    $numeroregs = $sql->rowCount();

    if($numeroregs>=1){
        session_start();
        $_SESSION['correo']=$registro;
        echo "Bienvenido....";
        header('Location:products.php');
    }else{

    }
}
?>