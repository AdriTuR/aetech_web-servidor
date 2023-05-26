<?php
include 'LogicaDelNegocio.php';
session_start();


$metodo = $_SERVER['REQUEST_METHOD'];

//comprobamos que el método sea POST
if($metodo=='POST') {

    //comprobamos que se han enviado los campos correctos como parámetros
    if (isset($_POST['correo']) && isset($_POST['contrasenya'])) {
        $correo = $_POST['correo'];
        $contrasenya = $_POST["contrasenya"];
        //llamada a la funcion de la lógica de negocio
        if(comprobarCredenciales($correo, $contrasenya)){
            session_start();
            $_SESSION['usuario'] = $correo;
            header("location: ../panel_robot.php");
            exit();
        }else{
            echo "Error en la peticion";
            header("location: ../login.php");
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