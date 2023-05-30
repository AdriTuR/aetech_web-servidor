<?php
include 'BaseDeDatos.php';

//------------------------------------------------------------------------------------------//
//------------------------------ comporbarCredenciales() -----------------------------------//
function comprobarCredenciales($correo, $contrasenya)
{
    if (comprobarCredencialesBBDD($correo, $contrasenya)) {
        $credenciales = comprobarCredencialesBBDD($correo, $contrasenya);
        $i = 0;
        while ($fila = mysqli_fetch_array($credenciales)) {
            $i++;
        }
        if ($i > 0) {
            return true;
        } else {
            return false;
        }
    } else {
        http_response_code(401);
        die();
    }
}

//------------------------------------------------------------------------------------------//
//------------------------------- obtenerEmpleados() ---------------------------------------//
function obtenerEmpleados($idUsuario)
{
    try{
        $datosUsuario = obtenerEmpleadosBBDD($idUsuario);
        $resultadoDatos = array();
        $i = 0;

        while ($fila = mysqli_fetch_array($datosUsuario)) {
            $respuesta["nombre"] = $fila["nombre"];
            $respuesta["apellidos"] = $fila ["apellidos"];
            $respuesta["idPuestoTrabajo"] = $fila ["idPuestoTrabajo"];
            $respuesta["horaEntrada"] = $fila ["horaEntrada"];
            $respuesta["horaSalida"] = $fila ["horaSalida"];
            $respuesta["idAdministrador"] = $fila ["idAdministrador"];


            $resultadoDatos[$i] = $respuesta;
            $i++;
        }

        return json_encode($resultadoDatos);

    }catch (mysqli_sql_exception $exception){
        return $exception;
    }
}

//------------------------------------------------------------------------------------------//
//------------------------------- obtenerDaosUsuario() ---------------------------------------//
function obtenerDatosUsuario($correo)
{
    try{
        $datosUsuario = obtenerDatosUsuarioBBDD($correo);
        $resultadoDatos = array();
        $i = 0;

        while ($fila = mysqli_fetch_array($datosUsuario)) {
            $respuesta["idUsuario"] = $fila ["idUsuario"];

            $resultadoDatos[$i] = $respuesta;
            $i++;
        }

        return json_encode($respuesta);

    }catch (mysqli_sql_exception $exception){
        return $exception;
    }
}

//------------------------------------------------------------------------------------------//
//----------------------------- obtenerPuestosTrabajo() ------------------------------------//
function obtenerPuestosTrabajo($idUsuario)
{
    try{
        $datosUsuario = obtenerPuestosTrabajoBBDD($idUsuario);
        $resultadoDatos = array();
        $i = 0;

        while ($fila = mysqli_fetch_array($datosUsuario)) {
            $respuesta["nombrePuesto"] = $fila["nombrePuesto"];
            $respuesta["coordenadaX"] = $fila ["coordenadaX"];
            $respuesta["coordenadaY"] = $fila ["coordenadaY"];
            $respuesta["idPuestoTrabajo"] = $fila ["idPuestoTrabajo"];


            $resultadoDatos[$i] = $respuesta;
            $i++;
        }

        return json_encode($resultadoDatos);

    }catch (mysqli_sql_exception $exception){
        return $exception;
    }
}



