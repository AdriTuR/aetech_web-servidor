<?php

function obtenerListadoEmpleados($idUsuario){
    $metodo = $_SERVER['REQUEST_METHOD'];
    if($metodo=='GET') {
            if(obtenerEmpleados($idUsuario)==null){
                echo "Fallo al obtener los datos del usuario. El correo que has introducido es correcto.";
            }else{
                $datosUsuario = obtenerEmpleados($idUsuario);
                return $datosUsuario;
            }
    }
    else{
        echo "Petición errónea, se esperaba un GET" .http_response_code(400);
    }
}

