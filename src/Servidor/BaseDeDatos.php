<?php

function comprobarCredencialesBBDD($correo,$contrasenya){

    $sql = "SELECT * FROM `usuario` WHERE `correo`='".$correo."' AND `contrasenya`='".$contrasenya."'";
    //return mysqli_query(Conectar(),$sql);

    if (mysqli_query(Conectar(), $sql)) {
        return mysqli_query(Conectar(),$sql);

    } else {
        return false;
    }
}//comprobarCredencialesBBDD()