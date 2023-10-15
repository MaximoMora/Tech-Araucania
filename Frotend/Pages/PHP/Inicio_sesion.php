<?php

$conn = new mysqli('localhost', 'root', '', 'login');
$response = "";
if ($conn->connect_error) {
    $response = array('error' => 'Error de conexión: ' . $conn->connect_error);
} else {
    if(isset($_POST['rut']) && isset($_POST['correo'])){
        $rut = $_POST['rut'];
        $correo = $_POST['correo'];
        $sql = "SELECT * FROM usuario WHERE correo = '$correo'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row=mysqli_fetch_row($result))
            {
                if($rut == $row[0] && $row[3] == $contra){
                    session_start();
                    $_SESSION['Nombre_usuario'] = $correo;
                }
                $response = "Conexion exitosa";
                
            }

            
        } else {
            echo '<script language="javascript">alert("Error, usuario no encontrado");</script>';
        }
    }

}
header('Content-Type: application/json');
echo json_encode($response);
?>
