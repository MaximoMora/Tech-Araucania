<?php




$host = "localhost";
$user = "root";
$pass = "";
$db = "user_data";
$database = new mysqli($host,$user,$pass,$db);
if ($database-> connect_error) {
    die("Error: " . $database-> connect_error);
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $data = json_decode(file_get_contents('php://input'), true);
    $option = $data["option"];

    if ($option == "register") {
        $name = $data["name"];
        $password = $data["password"];
        $lastName = $data["lastName"];
        $direction = $data["direction"];
        $email = $data["email"];
        
        $createUser = "INSERT INTO user (name, password,lastName,direction,email) VALUES ('$name', '$password','$lastName','$direction','$email');";
        $consult = mysqli_query($database, $createUser);

        $response = array(
            "funciona" => "llego hasta resgister",
            "name" => $name,
            "password" => $password
        );
        echo json_encode($response);

    } elseif ($option == "session") {
        $name = $data["name"];
        $password = $data["password"];
        $work = "";

        $GetUser = "SELECT * FROM user WHERE name = '$name' and password = '$password';";
        $consult = mysqli_query($database, $GetUser);




        if (mysqli_num_rows($consult) > 0) {
            $work = "true";
        }else {
            $work = "false";
        }

        $response = array(
            "consult" => $consult,
            "work" => $work,
            "getUser" => $consult,
            "name" => $name,
            "password" => $password
        );
        echo json_encode($response);

    }


}