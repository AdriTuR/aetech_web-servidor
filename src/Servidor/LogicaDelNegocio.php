<?php

include 'BaseDeDatos.php';

function comprobarCredenciales($correo, $contrasenya)
{
    //llamamos a la funcion previamente creada para guardar las mediciones
    if (comprobarCredencialesBBDD($correo, $contrasenya)) {
        //echo "Credenciales correctas";
        $credenciales = comprobarCredencialesBBDD($correo, $contrasenya);
        $i = 0;
        //Comprueba el numero de usuarios que ha encontrado la query. Si es mayor que 0, quiere decir que ha encontrado un usario
        //con ese correo y contraseña.
        while ($fila = mysqli_fetch_array($credenciales)) {
            $i++;
        }
        if ($i > 0) {
            //return comprobarCredencialesBBDD($correo,$contrasenya);
            return true;
        } else {
            return false;
        }
    } else {
        http_response_code(401);
        die();
    }
}//comprobarCredenciales()