<?php
function Conectar(){

        $serverNombre = "localhost:3306";
        $userNombre = "root";
        $password = "";
        $dbNombre = "robotica_23";

    $conn = mysqli_connect($serverNombre, $userNombre, $password, $dbNombre);

    if (!$conn) {
        http_response_code(500);
        die("Error: " . mysqli_connect_error());
    }
    return $conn;
}

