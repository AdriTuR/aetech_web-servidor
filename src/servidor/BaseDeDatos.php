<?php
include 'Conexion.php';
//------------------------------------------------------------------------------------------//
//---------------------------- comporbarCredencialesBBDD() ---------------------------------//
function comprobarCredencialesBBDD($correo,$contrasenya){

    $sql = "SELECT * FROM `usuarios` WHERE `correo`='".$correo."' AND `contrasenya`='".$contrasenya."'";

    if (mysqli_query(Conectar(), $sql)) {
        return mysqli_query(Conectar(),$sql);

    } else {
        return false;
    }
}
//------------------------------------------------------------------------------------------//
//---------------------------- obtenerEmpleadosBBDD() --------------------------------------//
function obtenerEmpleadosBBDD($idUsuario){
    $sql = "SELECT * FROM `empleados` INNER JOIN usuarios ON usuarios.idUsuario= empleados.idAdministrador WHERE `idAdministrador`='".$idUsuario."'";
    return mysqli_query(Conectar(),$sql);
}

//------------------------------------------------------------------------------------------//
//---------------------------- obtenerDatosUsuarioBBDD() --------------------------------------//
function obtenerDatosUsuarioBBDD($correo){
    $sql = "SELECT * FROM `usuarios` WHERE `correo`='".$correo."'";
    return mysqli_query(Conectar(),$sql);
}

//---------------------------------------------------------------------------------------------//
//---------------------------- obtenerDatosUsuarioBBDD() --------------------------------------//
function obtenerPuestosTrabajoBBDD($idUsuario){
    $sql = "SELECT * FROM `puestos_trabajo` INNER JOIN empleados ON empleados.idPuestoTrabajo = puestos_trabajo.idPuestoTrabajo INNER JOIN usuarios ON usuarios.idUsuario = empleados.idAdministrador WHERE `idAdministrador`='".$idUsuario."'";
    return mysqli_query(Conectar(),$sql);
}