<?php

$conn = new mysqli('localhost', 'root', '', 'login');
$response = "";
if ($conn->connect_error) {
    $response = array('error' => 'Error de conexión: ' . $conn->connect_error);
} else {
    if (isset($_POST["subir"])) { 
        if(isset($_POST['rut']) && isset($_POST['email'])){
            $rut = $_POST['rut'];
            $correo = $_POST['email'];
            $sql = "SELECT * FROM usuarios WHERE rut = $rut AND correo = '$correo'";
            $result = $conn->query($sql);
            
            if ($result->num_rows > 0) {
            
                while ($row=mysqli_fetch_row($result))
                {
                    if($nombre == $row[0] && $row[3] == $contra){
                        session_start();
                        $_SESSION['email'] = $nombre;
                }
                header('Location:products.html');
                
            }
        }     
    }
    }

}
header('Content-Type: application/json');
echo json_encode($response);
?>
