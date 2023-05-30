<?php
session_start()
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Aetech</title>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.0.2/dist/leaflet.css" />

    <link rel="stylesheet" href="assets/css/estilos.css">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="librerias/jquery-3.6.2.min.js"></script>

    <!-- ROS2 -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/roslibjs/1.1.0/roslib.min.js"
            integrity="sha512-x2Owc9WayRcRj80Znkau58shVfXN2OIX+gQAlrx6KPugZBKrIC6AwgEWQQCI06p2Q8RB4ilxD+y+1BdNd+1fQA=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/EaselJS/1.0.2/easeljs.min.js"
            integrity="sha512-LFVrDRb8AtfnlgyB/CDam6ESv7P88EdiUApUYYOv8T7/RT5M05ogumlzPegCPqHk/SqeBjW/0F/FbbyBenCkKg=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src=" https://cdn.jsdelivr.net/npm/eventemitter2@6.4.9/lib/eventemitter2.min.js "></script>
    <script src="https://cdn.jsdelivr.net/npm/ros2d@0.10.0/build/ros2d.min.js"></script>

    <script src="assets/js/draw_occupancy_grid.js"></script>
    <script src="assets/js/ros2main.js"></script>
    <!-- END ROS2 -->

    <!--  <link rel="stylesheet" type="text/css" href="librerias/bootstrap/css/bootstrap.css"> -->
    <script src="http://kit.fontawesome.com/41bcea2ae3.js" crossorigin="anonymous"></script>




</head>
<body id="body_landing">
<header>
    <div class="header__contenido">
        <a href="#">
            <img src="assets/images/logoAetech.png" id="logo__main_loged" class="img__logo" >
        </a>

        <div class="header__menu" id="ensenyar__menu">
            <nav>
                <ul>
                    <li id="header__empleados-sub" class="header__menu-selected"><div class="ico__quienes_somos"></div><a href="#" id="header__empleados_txt" class="text-menu-selected"> EMPLEADOS</a></li>
                    <li id="header__calendario-sub"><div class="ico__home"></div><a href="#" id="header__calendario_txt"> CALENDARIO</a></li>
                    <li id="header__mapa-sub"><div class="ico__mapa"></div><a href="#" id="header__mapa_txt"> MAPA</a></li>
                </ul>
            </nav>
        </div>
        <a href="./index.php" id="btn__cerrar_sesion_header"><div id="icn__usuario_header" class="ico__cerrar_sesion"></div></a>
    </div>

    <a href="#" style="text-decoration: none;" id="icono__menu" >
        <div id="icono__menu_m_o_x" class="ico__menu_bar"></div>
    </a>
</header>

<main>
</main>

<div class="cuerpo-web" id="cuerpo-landing">
    <div class="secciones__logged">
        <div class="pestanya__nuevo_empleado">
        </div>

        <div class="pestanya__empleados">
            <div class="c_empleados_parte1">
                <div class="buscador">
                    <input type="text" placeholder="     Buscar">
                    <a class="btn_buscador">Q</a>
                </div>
                <div class="btn_empleados">Ordenar por: <a id="filtro_ordenar_empleados">Nombre</a></div>
                <div class="btn_empleados">Ver Incidencias</div>
                <div class="btn_empleados" style="color: #65dd73;">+ Nuevo Empleado</div>
            </div>
            <div class="listado_empleados">
                <table>
                    <tbody id="contenido_listado_empleados">
                        <?php
                        include './servidor/completarTabla.php';
                        completarTabla();
                        ?>
                    </tbody>
                </table>
            </div>
            <!--<div class="tarjeta_empleado">
                <div class="img__empleado">
                    <img src="assets/images/pi4.png" class="icono_perfil">
                </div>
                <div class="clave-resultado">
                    <a class="clave">Nombre</a>
                    <a class="resultado">Ana Cardo</a>
                </div>
                <div class="clave-resultado">
                    <a class="clave">Puesto</a>
                    <a class="resultado">P1S2M4</a>
                </div>
                <div class="clave-resultado">
                    <a class="clave">Horas extra</a>
                    <a class="resultado">3h 22min</a>
                </div>
                <div class="clave-resultado">
                    <a class="clave">Incidencias</a>
                    <a class="resultado">2</a>
                </div>
                <div class="clave-resultado">
                    <a class="clave">Historial</a>
                    <a class="resultado">Enlace</a>
                </div>
                <div style="flex: 1">
                    <img src="assets/iconos/gear-solid.svg" class="ico__engranaje" style="margin-right: 16px;flex: 1">
                </div>
            </div>
            <div class="tarjeta_empleado">
                    <div class="img__empleado">
                        <img src="assets/images/pi3.png" class="icono_perfil">
                    </div>
                    <div class="clave-resultado">
                        <a class="clave">Nombre</a>
                        <a class="resultado">Elvis Nieto</a>
                    </div>
                    <div class="clave-resultado">
                        <a class="clave">Puesto</a>
                        <a class="resultado">P2S4M1</a>
                    </div>
                    <div class="clave-resultado">
                        <a class="clave">Horas extra</a>
                        <a class="resultado">1h 14min</a>
                    </div>
                    <div class="clave-resultado">
                        <a class="clave">Incidencias</a>
                        <a class="resultado">8</a>
                    </div>
                    <div class="clave-resultado">
                        <a class="clave">Historial</a>
                        <a class="resultado">Enlace</a>
                    </div>
                    <div style="flex: 1">
                        <img src="assets/iconos/gear-solid.svg" class="ico__engranaje" style="margin-right: 16px;flex: 1">
                    </div>
                </div>
            <div class="tarjeta_empleado">
                    <div class="img__empleado">
                        <img src="assets/images/pi7.png" class="icono_perfil">
                    </div>
                    <div class="clave-resultado">
                        <a class="clave">Nombre</a>
                        <a class="resultado">Susana Oria</a>
                    </div>
                    <div class="clave-resultado">
                        <a class="clave">Puesto</a>
                        <a class="resultado">P2S3M2</a>
                    </div>
                    <div class="clave-resultado">
                        <a class="clave">Horas extra</a>
                        <a class="resultado">0h</a>
                    </div>
                    <div class="clave-resultado">
                        <a class="clave">Incidencias</a>
                        <a class="resultado">0</a>
                    </div>
                    <div class="clave-resultado">
                        <a class="clave">Historial</a>
                        <a class="resultado">Enlace</a>
                    </div>
                    <div style="flex: 1">
                        <img src="assets/iconos/gear-solid.svg" class="ico__engranaje" style="margin-right: 16px;flex: 1">
                    </div>
                </div>-->
        </div>

        <div class="pestanya_calendario">
            <div class="controlador_calendario">
                <a class="btn-general" style="display: inline-block; width: 40px;"><</a>
                <a class="clave" style="margin: 0px 10px 0px 10px ">MARZO 2028</a>
                <a class="btn-general" style="display: inline-block; width: 40px;">></a>
            </div>
            <div class="linea_calendario">
                <p class="clave" style="flex: 1">Lunes</p>
                <p class="clave" style="flex: 1">Martes</p>
                <p class="clave" style="flex: 1">Miercoles</p>
                <p class="clave" style="flex: 1">Jueves</p>
                <p class="clave" style="flex: 1">Viernes</p>
                <p class="clave" style="flex: 1">Sabado</p>
                <p class="clave" style="flex: 1">Domingo</p>
            </div>

            <div class="linea_calendario">
                <div class="dia_calendario_pasado"></div>
                <div class="dia_calendario_pasado"></div>
                <div class="dia_calendario_pasado">
                    <div class="dia_contenido">
                        <a class="numero_calendario_pasado">1</a>
                        <img src="assets/images/yellowAlert.png" class="alerta_visible">
                        <img src="assets/images/redAlert.png" class="alerta_visible">
                    </div>
                </div>
                <div class="dia_calendario_pasado">
                    <div class="dia_contenido">
                        <a class="numero_calendario_pasado">2</a>
                        <img src="assets/images/yellowAlert.png" class="alerta_invisible">
                        <img src="assets/images/redAlert.png" class="alerta_invisible">
                    </div>
                </div>
                <div class="dia_calendario_pasado">
                    <div class="dia_contenido">
                        <a class="numero_calendario_pasado">3</a>
                        <img src="assets/images/yellowAlert.png" class="alerta_invisible">
                        <img src="assets/images/redAlert.png" class="alerta_invisible">
                    </div>
                </div>
                <div class="dia_calendario_pasado">
                    <div class="dia_contenido">
                        <a class="numero_calendario_pasado">4</a>
                        <img src="assets/images/yellowAlert.png" class="alerta_invisible">
                        <img src="assets/images/redAlert.png" class="alerta_invisible">
                    </div>
                </div>
                <div class="dia_calendario_pasado">
                    <div class="dia_contenido">
                        <a class="numero_calendario_pasado">5</a>
                        <img src="assets/images/yellowAlert.png" class="alerta_visible">
                        <img src="assets/images/redAlert.png" class="alerta_invisible">
                    </div>
                </div>

            </div>
            <div class="linea_calendario">
                <div class="dia_calendario_pasado">
                    <div class="dia_contenido">
                        <a class="numero_calendario_pasado">6</a>
                        <img src="assets/images/yellowAlert.png" class="alerta_invisible">
                        <img src="assets/images/redAlert.png" class="alerta_invisible">
                    </div>
                </div>
                <div class="dia_calendario_pasado">
                    <div class="dia_contenido">
                        <a class="numero_calendario_pasado">7</a>
                        <img src="assets/images/yellowAlert.png" class="alerta_invisible">
                        <img src="assets/images/redAlert.png" class="alerta_invisible">
                    </div>
                </div>
                <div class="dia_calendario_pasado">
                    <div class="dia_contenido">
                        <a class="numero_calendario_pasado">8</a>
                        <img src="assets/images/yellowAlert.png" class="alerta_invisible">
                        <img src="assets/images/redAlert.png" class="alerta_invisible">
                    </div>
                </div>
                <div class="dia_calendario_pasado">
                    <div class="dia_contenido">
                        <a class="numero_calendario_pasado">9</a>
                        <img src="assets/images/yellowAlert.png" class="alerta_invisible">
                        <img src="assets/images/redAlert.png" class="alerta_invisible">
                    </div>
                </div>
                <div class="dia_calendario_pasado">
                    <div class="dia_contenido">
                        <a class="numero_calendario_pasado">10</a>
                        <img src="assets/images/yellowAlert.png" class="alerta_invisible">
                        <img src="assets/images/redAlert.png" class="alerta_invisible">
                    </div>
                </div>
                <div class="dia_calendario_pasado">
                    <div class="dia_contenido">
                        <a class="numero_calendario_pasado">11</a>
                        <img src="assets/images/yellowAlert.png" class="alerta_invisible">
                        <img src="assets/images/redAlert.png" class="alerta_visible">
                    </div>
                </div>
                <div class="dia_calendario_pasado">
                    <div class="dia_contenido">
                        <a class="numero_calendario_pasado">12</a>
                        <img src="assets/images/yellowAlert.png" class="alerta_invisible">
                        <img src="assets/images/redAlert.png" class="alerta_invisible">
                    </div>
                </div>
            </div>
            <div class="linea_calendario">
                <div class="dia_calendario_futuro">
                    <div class="dia_contenido">
                        <a class="numero_calendario_actual">13</a>
                        <img src="assets/images/yellowAlert.png" class="alerta_invisible">
                        <img src="assets/images/redAlert.png" class="alerta_invisible">
                    </div>
                </div>
                <div class="dia_calendario_futuro">
                    <div class="dia_contenido">
                        <a class="numero_calendario_futuro">14</a>
                        <img src="assets/images/yellowAlert.png" class="alerta_invisible">
                        <img src="assets/images/redAlert.png" class="alerta_invisible">
                    </div>
                </div>
                <div class="dia_calendario_futuro">
                    <div class="dia_contenido">
                        <a class="numero_calendario_futuro">15</a>
                        <img src="assets/images/yellowAlert.png" class="alerta_invisible">
                        <img src="assets/images/redAlert.png" class="alerta_invisible">
                    </div>
                </div>
                <div class="dia_calendario_futuro">
                    <div class="dia_contenido">
                        <a class="numero_calendario_futuro">16</a>
                        <img src="assets/images/yellowAlert.png" class="alerta_invisible">
                        <img src="assets/images/redAlert.png" class="alerta_invisible">
                    </div>
                </div>
                <div class="dia_calendario_futuro">
                    <div class="dia_contenido">
                        <a class="numero_calendario_futuro">17</a>
                        <img src="assets/images/yellowAlert.png" class="alerta_invisible">
                        <img src="assets/images/redAlert.png" class="alerta_invisible">
                    </div>
                </div>
                <div class="dia_calendario_futuro">
                    <div class="dia_contenido">
                        <a class="numero_calendario_futuro">18</a>
                        <img src="assets/images/yellowAlert.png" class="alerta_invisible">
                        <img src="assets/images/redAlert.png" class="alerta_invisible">
                    </div>
                </div>
                <div class="dia_calendario_futuro">
                    <div class="dia_contenido">
                        <a class="numero_calendario_futuro">19</a>
                        <img src="assets/images/yellowAlert.png" class="alerta_invisible">
                        <img src="assets/images/redAlert.png" class="alerta_invisible">
                    </div>
                </div>

            </div>
            <div class="linea_calendario">
                <div class="dia_calendario_futuro">
                    <div class="dia_contenido">
                        <a class="numero_calendario_futuro">20</a>
                        <img src="assets/images/yellowAlert.png" class="alerta_invisible">
                        <img src="assets/images/redAlert.png" class="alerta_invisible">
                    </div>
                </div>
                <div class="dia_calendario_futuro">
                    <div class="dia_contenido">
                        <a class="numero_calendario_futuro">21</a>
                        <img src="assets/images/yellowAlert.png" class="alerta_invisible">
                        <img src="assets/images/redAlert.png" class="alerta_invisible">
                    </div>
                </div>
                <div class="dia_calendario_futuro">
                    <div class="dia_contenido">
                        <a class="numero_calendario_futuro">22</a>
                        <img src="assets/images/yellowAlert.png" class="alerta_invisible">
                        <img src="assets/images/redAlert.png" class="alerta_invisible">
                    </div>
                </div>
                <div class="dia_calendario_futuro">
                    <div class="dia_contenido">
                        <a class="numero_calendario_futuro">23</a>
                        <img src="assets/images/yellowAlert.png" class="alerta_invisible">
                        <img src="assets/images/redAlert.png" class="alerta_invisible">
                    </div>
                </div>
                <div class="dia_calendario_futuro">
                    <div class="dia_contenido">
                        <a class="numero_calendario_futuro">24</a>
                        <img src="assets/images/yellowAlert.png" class="alerta_invisible">
                        <img src="assets/images/redAlert.png" class="alerta_invisible">
                    </div>
                </div>
                <div class="dia_calendario_futuro">
                    <div class="dia_contenido">
                        <a class="numero_calendario_futuro">25</a>
                        <img src="assets/images/yellowAlert.png" class="alerta_invisible">
                        <img src="assets/images/redAlert.png" class="alerta_invisible">
                    </div>
                </div>
                <div class="dia_calendario_futuro">
                    <div class="dia_contenido">
                        <a class="numero_calendario_futuro">26</a>
                        <img src="assets/images/yellowAlert.png" class="alerta_invisible">
                        <img src="assets/images/redAlert.png" class="alerta_invisible">
                    </div>
                </div>
            </div>
            <div class="linea_calendario">
                <div class="dia_calendario_futuro">
                    <div class="dia_contenido">
                        <a class="numero_calendario_futuro">27</a>
                        <img src="assets/images/yellowAlert.png" class="alerta_invisible">
                        <img src="assets/images/redAlert.png" class="alerta_invisible">
                    </div>
                </div>
                <div class="dia_calendario_futuro">
                    <div class="dia_contenido">
                        <a class="numero_calendario_futuro">28</a>
                        <img src="assets/images/yellowAlert.png" class="alerta_invisible">
                        <img src="assets/images/redAlert.png" class="alerta_invisible">
                    </div>
                </div>
                <div class="dia_calendario_futuro">
                    <div class="dia_contenido">
                        <a class="numero_calendario_futuro">29</a>
                        <img src="assets/images/yellowAlert.png" class="alerta_invisible">
                        <img src="assets/images/redAlert.png" class="alerta_invisible">
                    </div>
                </div>
                <div class="dia_calendario_futuro">
                    <div class="dia_contenido">
                        <a class="numero_calendario_futuro">30</a>
                        <img src="assets/images/yellowAlert.png" class="alerta_invisible">
                        <img src="assets/images/redAlert.png" class="alerta_invisible">
                    </div>
                </div>
                <div class="dia_calendario_futuro">
                    <div class="dia_contenido">
                        <a class="numero_calendario_futuro">31</a>
                        <img src="assets/images/yellowAlert.png" class="alerta_invisible">
                        <img src="assets/images/redAlert.png" class="alerta_invisible">
                    </div>
                </div>
                <div class="dia_calendario_futuro">
                    <a class="numero_calendario_futuro"></a>
                    <img src="assets/images/yellowAlert.png" class="alerta_invisible">
                    <img src="assets/images/redAlert.png" class="alerta_invisible">
                </div>
                <div class="dia_calendario_futuro">
                    <a class="numero_calendario_futuro">    </a>
                    <img src="assets/images/yellowAlert.png" class="alerta_invisible">
                    <img src="assets/images/redAlert.png" class="alerta_invisible">
                </div>
            </div>
        </div>

        <div class="pestanya_mapa">
            <div class="contenedor__mapa">
                <!-- canvas mapa -->
                <canvas id="map"></canvas>
                <!-- end canvas mapa -->
                <div class="map_controls">
                    <div>
                        <button id="btn_con">Connect</button>
                        <button id="btn_dis" style="background-color: red">Disconnect</button>
                    </div>
                    <h5 >Move robot to: </h5>
                    <div>
                        <label for="goal_x">X</label>
                        <input name="goal_x" type="text" placeholder="pos x" id="goal_x">
                    </div>
                    <div>
                        <label for="goal_y">Y</label>
                        <input name="goal_y" type="text" placeholder="pos y" id="goal_y">
                    </div>
                    <button id="btn_goto">Go</button>
                </div>
            </div>
            <div class="contenedor__leyenda">
                <div class="marco_leyenda">
                    <h3 class="planta_seleccionada">Planta 0</h3>
                    <div class="propiedad-valor" id="robot_1">
                        <a class="simbolo_robot_activo">R1</a>
                        <p>Robot 1</p>
                        <img src="assets/images/flechaDerecha.png" class="img__arrow" >
                        <a class="simbolo_punto_activo">P1</a>

                    </div>
                    <div class="propiedad-valor">
                        <a class="simbolo_robot_inactivo">R2</a> <p>Robot 2</p>
                    </div>
                    <h3>Planta 1</h3>
                    <div class="propiedad-valor">
                        <a class="simbolo_robot_inactivo">R3</a><p>Robot 3</p>
                    </div>
                    <div class="propiedad-valor">
                        <a class="simbolo_robot_inactivo">R4</a> <p>Robot 4</p>
                    </div>
                    <h3>Planta 2</h3>

                    <div class="propiedad-valor">
                        <a class="simbolo_robot_inactivo">R5</a> <p>Robot 5</p>
                    </div>
                    <div class="propiedad-valor">
                        <a class="simbolo_robot_inactivo">R6</a> <p>Robot 6</p>
                    </div>
                    <h3>Planta 3</h3>
                    <div class="propiedad-valor">
                        <a class="simbolo_robot_inactivo">R7</a> <p>Robot 7</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="pestanya_robot">
            <div class="contenedor__robot">
                <div class="c_robot_parte1">
                    <h2 class="c_robot_titulo">Robot 1 </h2>
                    <a id="btn__cerrar_robot">Cerrar</a>
                </div>

                <div class="c_robot_parte2">
                    <div class="informacion_estado">
                        <h3>Informacion de Estado</h3>
                        <div class="propiedad-valor">
                            <p class="propiedad">Bateria:  </p>
                            <p class="valor">57%</p>
                        </div>
                        <div class="propiedad-valor">
                            <p class="propiedad">Horas de Autonomía:  </p>
                            <p class="valor">8h 34min</p>
                        </div>
                        <div class="propiedad-valor">
                            <p class="propiedad">Posición Actual:  </p>
                            <p class="valor">3</p>
                        </div>

                    </div>
                    <div class="control_manual">
                        <h3>Control Manual</h3>
                        <a class="btn-general">Ver Cámara</a><br>
                        <a class="btn-general">Asignar Destino</a>
                    </div>
                    <div class="informacion_robot">
                        <h3>Informacion</h3>
                        <a class="btn-general">Documentación Técnica</a><br>
                        <a class="btn-general">Ayuda</a>
                    </div>
                </div>

                <div class="c_robot_parte3">
                    <table>
                        <thead>
                        <tr>
                            <th>Horario</th>
                            <th>Posición</th>
                            <th>Descripción</th>
                            <th><a class="btn-general" style="float: right; padding: 10px 16px 10px 16px">Editar Horario</a></th>


                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>08:00</td>
                            <td>0</td>
                            <td>Ir a la entrada del edificio a fichar la entrada de los trabajadores</td>
                        </tr>

                        <tr>
                            <td>08:15</td>
                            <td>3</td>
                            <td>Ir a la sala 3 a indicar a los trabajadores que acaba su turno y fichar su salida</td>
                        </tr>

                        <tr>
                            <td>10:30</td>
                            <td>0</td>
                            <td>Ir a la entrada del edificio a fichar la entrada de los <trabajadores></trabajadores></td>
                        </tr>
                        <tr>
                            <td>15:00</td>
                            <td>6</td>
                            <td>Ir a la sala 6 a indicar a los trabajadores que acaba su turno y fichar su salida</td>
                        </tr>

                        <tr>
                            <td>15:15</td>
                            <td>4</td>
                            <td>Ir a la sala 4 a indicar a los trabajadores que acaba su turno y fichar su salida</td>
                        </tr>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<footer class="landing__footer">
    <div class="contenedor__footer">
        <div class="caja__footer">
            <div class="footer_marca">
                <div class="logo_footer">
                    <img src="assets/images/logoAetech.png" class="img__logo_v2">
                    <img src="assets/images/ROS2.png" class="img__logo_v2">
                </div>
            </div>

            <div class="companyia">
                <h3>Compañía</h3>
                <a href="#" id="footer__log_mapa">Mapa</a>
                <a href="#" id="footer__calendario">Calendario</a>
                <a href="#" id="footer__empleados">Empleados</a>
            </div>
            <div class="redes_sociales">
                <h3>Redes sociales</h3>
                <div style="display: flex"><div class="ico__twitter_f"></div> <p> Twitter</p></div>
                <div style="display: flex"><div class="ico__insta_f"></div> <p> Instagram</p></div>
                <div style="display: flex"><div class="ico__facebook_f"></div> <p> Facebook</p></div>
            </div>
        </div>
    </div>
    <div class="caja__copiright">
        <hr>
        <p id="copiright">© 2023 Aetech. Todos los derechos reservados.</p>
    </div>
</footer>

<script src="assets/js/script_usuario.js"></script>
</body>
</html>