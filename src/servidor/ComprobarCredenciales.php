<?php
include 'LogicaDelNegocio.php';
session_start();


$metodo = $_SERVER['REQUEST_METHOD'];

if($metodo=='POST') {

    if (isset($_POST['correo']) && isset($_POST['contrasenya'])) {
        $correo = $_POST['correo'];
        $contrasenya = $_POST["contrasenya"];

        if(comprobarCredenciales($correo, $contrasenya)){
            session_start();
            $_SESSION['usuario'] = $correo;
            header("location: ../panel_robot.php");
            exit();
        }else{
            //echo "Error en la peticion";
            exit();
        }
    } else {
        echo "Error en la peticion GET. Parámetros incorrectos.";
        header("location: ../login.php");
        exit();
    }
}else{
    echo "Petición errónea, se esperaba un POST" .http_response_code(400);
}