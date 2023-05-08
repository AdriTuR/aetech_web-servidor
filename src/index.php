<!---------------------------------------------------------------------------------------------------->
<!---------------------------------------------------------------------------------------------------->
<!--                                         Index.php                                              -->
<!---------------------------------------------------------------------------------------------------->
<!---------------------------------------------------------------------------------------------------->
<!DOCTYPE html>
<!---------------------------------------------------------------------------------------------------->
<!---------------------------------------------------------------------------------------------------->
<html lang="es">
<!---------------------------------------------------------------------------------------------------->
<!----------------------------------------- HEAD ----------------------------------------------------->
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, shrink-to-fit=no, initial-scale=1"> <!--Configuraciones de la ventana-->
        <meta http-equiv="X-UA-Compatible" content="IE=edge"> <!--Compatible para todos los nevegadores-->
        <title>Inicio</title>
        <link rel="icon" href="../images/logo_AETECH2.png">

        <!-----Bootstrap & CSS-------->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="../src/css/all.css">
        <link rel="stylesheet" href="../src/css/responsive.css">

        <!------Iconos FontAwsome----->
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

        <!-------Fonts---------->
        <link href='https://fonts.googleapis.com/css?family=Titillium Web' rel='stylesheet'>
    </head>
<!---------------------------------------------------------------------------------------------------->
<!----------------------------------------- BODY ----------------------------------------------------->
    <body onload="menuOpcionActivado()">
<!---------------------------------------------------------------------------------------------------->
<!---------------------------------------- HEADER ---------------------------------------------------->
<?php include_once './includes/header.php';?>
<!---------------------------------------------------------------------------------------------------->
<!---------------------------------------- SECCION 1 ------------------------------------------------->
        <section class="seccion_landing_inicio d-flex justify-content-center">
           <!--------------------------------------------------->
           <!--------------- Parrafo Sección 1 ----------------->
           <div class="justify-content-center m-5 div_landing_texto1">
           <!--------------------------------------------------->
           <!--------------- Titulo Sección 1 ------------------>
               <h1 class="texto_verde">Mejora la producción de tu fábrica con nuestro robot guía interactivo</h1>
           <!--------------------------------------------------->
           <!--------------- Parrafo Sección 1 ----------------->
               <p class="m-2">
                   Nuestro robot guía interactivo es la solución perfecta para mejorar la eficiencia y
                   comunicación en tu fábrica. Gracias a su avanzada tecnología, este robot es capaz de
                   interactuar con tus trabajadores y junto con nuestra plataforma web, llevar la gestión
                   de tu fábrica al siguiente nivel nunca fue tan fácil.
               </p>
           <!--------------------------------------------------->
           <!--------------------------------------------------->
           </div>
           <!--------------------------------------------------->
           <!--------------- Imagen Sección 1 ------------------>
           <div class="m-4 div_landing_imagen_robot">
               <img class="imagen_robot" src="../images/turtlebot3-burger.png" alt="imagen_robot">
           </div>
            <!--------------------------------------------------->
            <!------------ Botones arriba/abajo ----------------->
            <a id="boton_abajo" href="#fun_robot"><i class="fa fa-angle-down fa-xl "></i></a>
            <a id="boton_ir_arriba" href="#encabezado"><i class="fa fa-angle-up fa-xl "></i></a>
            <!--------------------------------------------------->
            <!--------------------------------------------------->
       </section>
<!---------------------------------------------------------------------------------------------------->
<!---------------------------------------- SECCION 2 ------------------------------------------------->
       <section class="seccion_landing_fun_robot" id="fun_robot">
           <!--------------------------------------------------->
           <!--------------- Titulo Sección 2 ------------------>
           <h2 class="texto_blanco">FUNCIONALIDADES DEL ROBOT</h2>
           <!--------------------------------------------------->
           <!--------------- Listado Sección 2 ----------------->
           <ul class="d-flex justify-content-center paneles">
               <li class="panel panel-flip m-2">
                   <div class="flip-card-front">
                       <img class="iconos" src="../images/consultas_icono.png" alt="Icono Consultar">
                       <h3 class="texto_verde titulo_panel">CONSULTAS</h3>
                   </div>
                   <div class="flip-card-back">
                       <p class="texto_paneles texto_blanco">
                           Los trabajadores pueden hacer consultas a través del robot para obtener
                           información sobre las tareas que deben realizar y resolver dudas de forma rápida
                           y eficiente.
                       </p>
                   </div>
               </li>
               <li class="panel panel-flip m-2">
                   <div class="flip-card-front">
                       <img class="iconos" src="../images/integracion_icono.png" alt="Icono Integrar">
                       <h3 class="texto_verde titulo_panel">INTEGRAR</h3>
                   </div>
                   <div class="flip-card-back">
                       <p class="texto_paneles texto_blanco">
                           Ayuda a la integración de nuevos empleados al proporcionar información detallada
                           sobre sus tareas y resolviendo sus dudas, haciendo que se familiarize en la fábrica.
                       </p>
                   </div>
               </li>
               <li class="panel panel-flip m-2">
                   <div class="flip-card-front">
                       <img class="iconos" src="../images/guia_icono.png" alt="Icono Guiar">
                       <h3 class="texto_verde titulo_panel">GUIAR</h3>
                   </div>
                   <div class="flip-card-back">
                       <p class="texto_paneles texto_blanco">
                           Es capaz de guiar a los trabajadores por las instalaciones de la fábrica, indicando
                           las diferentes zonas de trabajo e incluso decirle en que zona debería de estar.
                       </p>
                   </div>
               </li>
               <li class="panel panel-flip m-2">
                   <div class="flip-card-front">
                       <img class="iconos" src="../images/registro_icono.png" alt="Icono Registrar Empleados">
                       <h3 class="texto_verde titulo_panel">REGISTRAR EMPLEADOS</h3>
                   </div>
                   <div class="flip-card-back">
                       <p class="texto_paneles texto_blanco">
                           Puede registrar de manera automática y precisa la entrada y salida de los empleados,
                           lo que permite llevar un control exacto de las horas trabajadas.
                       </p>
                   </div>
               </li>
           </ul>
           <!--------------------------------------------------->
           <!--------------------------------------------------->
       </section>
<!---------------------------------------------------------------------------------------------------->
<!---------------------------------------- SECCION 3 ------------------------------------------------->
        <section class="seccion_landing_fun_web">
            <!--------------------------------------------------->
            <!--------------- Titulo Sección 3 ------------------>
            <h2 class="texto_verde">FUNCIONALIDADES DE LA WEB</h2>
            <!--------------------------------------------------->
            <!--------------- Parrafo Sección 3 ----------------->
            <div class="div_landing_fun_web d-flex justify-content-center align-items-center">
                <img class="imagen_fun_web" src="../images/ordenador_icono.png" alt="icono_ordenador">
                <p class="p-5 text-left">
                    Gestiona fácilmente desde nuestra plataforma web tu robot guía interactivo, puedes
                    realizar acciones como controlar al robot y acceder a datos en tiempo real sobre él y el
                    rendimiento de tu fábrica.
                </p>
            </div>
            <!--------------------------------------------------->
            <!-------------- Listado Sección 3 ------------------>
            <div class="d-flex div_listado_fun_web">
                <ul class="d-block">
                    <li class="d-flex justify-content-center">
                        <div class="d-flex align-items-center">
                            <img class="iconos_fun_web" src="../images/desplazar_icono.png" alt="Icono desplazar">
                        </div>
                        <div class="m-3">
                            <h4 class="text-left font-weight-bold texto_verde">Desplazar el robot</h4>
                            <p class="text-left texto_fun_web">Controla la dirección y velocidad del robot guía para facilitar su desplazamiento en la fábrica.</p>
                        </div>
                    </li>
                    <li class="d-flex justify-content-center">
                        <div class="d-flex align-items-center">
                            <img class="iconos_fun_web" src="../images/ubicacion_icono.png" alt="Icono ubicacion">
                        </div>
                        <div class="m-3">
                            <h4 class="text-left font-weight-bold texto_verde">Conocer ubicación</h4>
                            <p class="text-left texto_fun_web">Permite visualizar la posición del robot en tiempo real y su ruta en un mapa interactivo.</p>
                        </div>
                    </li>
                </ul>
                <ul class="d-block">
                    <li class="d-flex justify-content-center">
                        <div class="d-flex align-items-center">
                            <img class="iconos_fun_web" src="../images/estado_icono.png" alt="Icono desplazar">
                        </div>
                        <div class="m-3">
                            <h4 class="text-left font-weight-bold texto_verde">Visualizar estado</h4>
                            <p class="text-left texto_fun_web">Proporciona información sobre la batería, la carga y otros aspectos técnicos relevantes.</p>
                        </div>
                    </li>
                    <li class="d-flex justify-content-center">
                        <div class="d-flex align-items-center">
                            <img class="iconos_fun_web" src="../images/horarios_icono.png" alt="Icono ubicacion">
                        </div>
                        <div class="m-3">
                            <h4 class="text-left font-weight-bold texto_verde">Comprobar horarios</h4>
                            <p class="text-left texto_fun_web">
                                Permite verificar los horarios los empleados en la fábrica para coordinar las tareas con el robot guía.</p>
                        </div>
                    </li>
                </ul>
            </div>
            <!--------------------------------------------------->
            <!--------------------------------------------------->
        </section>
<!---------------------------------------------------------------------------------------------------->
<!---------------------------------------- FOOTER ---------------------------------------------------->
<?php include_once './includes/footer.php';?>
<!---------------------------------------------------------------------------------------------------->
<!-----------------------------------------SCRIPTS---------------------------------------------------->
        <script>
        //-------------------------------------------------------------------------//
        //------------------------MENU ITEM SELECCIONADO---------------------------//
            var menu_opcion_landing = document.getElementById("menu_opcion_landing");

            function menuOpcionActivado(){
                menu_opcion_landing.classList.remove("menu_opcion")
                menu_opcion_landing.classList.add("menu_opcion_activado")
            }
        //-------------------------------------------------------------------------//
        //-------------------------BOTON ARRIBA-ABAJO------------------------------//
            var buttonUp = document.getElementById("boton_ir_arriba");
            var buttonDown = document.getElementById("boton_abajo");

            window.onscroll = function() {scrollFunction()};

            function scrollFunction() {
                if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                    buttonUp.style.display = "block";
                    buttonDown.style.display="none";

                } else {
                    buttonUp.style.display = "none";
                    buttonDown.style.display="";
                }
            }
        //-------------------------------------------------------------------------//
        //-------------------------------------------------------------------------//
</script>
<!---------------------------------------------------------------------------------------------------->
<!---------------------------------------------------------------------------------------------------->
    </body>
<!---------------------------------------------------------------------------------------------------->
<!---------------------------------------------------------------------------------------------------->
</html>
