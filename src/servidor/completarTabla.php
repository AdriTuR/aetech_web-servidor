<?php
include 'ObtenerDatosUsuario.php';
include 'ObtenerEmpleados.php';

function completarTabla(){
    //$idUsuario = ;
    $empleados = obtenerListadoEmpleados(obtenerIdUsuario($_SESSION['usuario']));
    $empleados = json_decode($empleados, true);

    foreach ($empleados as $empleado) {
        $nombre = $empleado['nombre'];
        $apellidos = $empleado['apellidos'];

        echo '<div class="tarjeta_empleado">';
        echo '<div class="img__empleado">';
        echo '<img src="assets/images/pi2.png" class="icono_perfil">';
        echo '</div>';
        echo '<div class="clave-resultado">';
        echo '<a class="clave">Nombre</a>';
        echo '<a class="resultado">' . $nombre . " ". $apellidos . '</a>';
        echo '</div>';
        echo '<div class="clave-resultado">';
        echo '<a class="clave">Puesto</a>';
        echo '<a class="resultado">' . 20 . '</a>';
        echo '</div>';
        echo '<div class="clave-resultado">';
        echo '<a class="clave">Horas extra</a>';
        echo '<a class="resultado">' . 20 . '</a>';
        echo '</div>';
        echo '<div class="clave-resultado">';
        echo '<a class="clave">Incidencias</a>';
        echo '<a class="resultado">' . 20 . '</a>';
        echo '</div>';
        echo '<div class="clave-resultado">';
        echo '<a class="clave">Historial</a>';
        echo '<a class="resultado">' . 20 . '</a>';
        echo '</div>';
        echo '<div style="flex: 1">';
        echo '<img src="assets/iconos/gear-solid.svg" class="ico__engranaje" style="margin-right: 16px;flex: 1">';
        echo '</div>';
        echo '</div>';
    }
}

?>
