<?php
include 'LogicaDelNegocio.php';

function obtenerIdUsuario($correo){
    $metodo = $_SERVER['REQUEST_METHOD'];
    if($metodo == 'GET') {
        if(isset($correo)) {
            $datosUsuario = obtenerDatosUsuario($correo);

            if($datosUsuario == null){
                echo "Fallo al obtener los datos del usuario. El correo que has introducido es correcto.";
            } else {
                $datosUsuario = json_decode($datosUsuario, true);
                $idUsuario = $datosUsuario['idUsuario'];
                return $idUsuario;
            }
        }
    } else {
        echo "Petición errónea, se esperaba un GET" . http_response_code(400);
    }
}


