<?php
include 'ObtenerPuestosTrabajo.php';

function mostrarPuestos(){
    $puestos = obtenerPuestosTrabajo(obtenerIdUsuario($_SESSION['usuario']));
    $puestos = json_decode($puestos, true);

    foreach ($puestos as $puesto) {
        $nombre = $puesto['nombrePuesto'];
        $coordenadaX = $puesto['coordenadaX'];
        $coordenadaY = $puesto['coordenadaY'];
        $idPuestoTrabajo = $puesto['idPuestoTrabajo'];

        echo '<p> <a>' . $nombre . '</a> <a> ' . $coordenadaX . '</a> <a> ' . $coordenadaY . '</a> </p>';
    }
}

?>

