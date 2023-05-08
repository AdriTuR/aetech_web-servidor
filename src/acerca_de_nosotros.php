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
        <title>Acerca de Aetech</title>
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

        <!---------Scripts------------>

    </head>
<!---------------------------------------------------------------------------------------------------->
<!----------------------------------------- BODY ----------------------------------------------------->
    <body onload="menuOpcionActivado()">
<!---------------------------------------------------------------------------------------------------->
<!---------------------------------------- HEADER ---------------------------------------------------->
<?php include_once './includes/header.php';?>
<!---------------------------------------------------------------------------------------------------->
<!----------------------------------------SECCIÓN 1--------------------------------------------------->
    <section class="seccion_acerca_inicio d-flex justify-content-center">
        <!-----------------Imagen Logo----------------------->
        <!--------------------------------------------------->
        <div class="div_acerca_imagen_logo">
            <img class="imagen_logo_aetech m-4" src="../images/logo_AETECH.png" alt="imagen_logo_aetech">
        </div>
        <!--------------------------------------------------->
        <!--------------------------------------------------->
        <div class="justify-content-center m-5 div_acerca_texto1">
        <!--------------------------------------------------->
        <!--------------- Titulo Sección 1 ------------------>
            <h1 class="texto_verde">Empresa líder en la fabricación de robots guías interactivos</h1>
        <!--------------------------------------------------->
        <!--------------- Parrafo Sección 1 ----------------->
            <p class="m-2">
                Nos especializamos en crear soluciones innovadoras para mejorar la eficiencia
                y la productividad de las fábricas, a través de robots inteligentes equipados con tecnología
                avanzada, ofrecemos soluciones de robótica industrial de vanguardia que ayudan a nuestros
                clientes a mejorar su competitividad y a alcanzar sus objetivos de producción.
            </p>
        <!--------------------------------------------------->
        <!--------------------------------------------------->
        </div>
        <!--------------------------------------------------->
        <!------------ Botones arriba/abajo ----------------->
        <a id="boton_abajo" href="#rasgos"><i class="fa fa-angle-down"></i></a>
        <a id="boton_ir_arriba" href="#encabezado"><i class="fa fa-angle-up"></i></a>
        <!--------------------------------------------------->
        <!--------------------------------------------------->
    </section>
<!---------------------------------------------------------------------------------------------------->
<!----------------------------------------SECCIÓN 2--------------------------------------------------->
    <section class="seccion_acerca_rasgos" id="rasgos">
        <!--------------------------------------------------->
        <!--------------- Titulo Sección 2 ------------------>
        <h2 class="texto_blanco">RASGOS QUE NOS DEFINEN</h2>
        <!--------------------------------------------------->
        <!--------------- Listado Sección 2 ----------------->
        <ul class="d-flex justify-content-center paneles">
            <li class="panel panel-flip m-2">
                <div class="flip-card-front">
                    <img class="iconos" src="../images/innovacion_icono.png" alt="Icono Inovacción">
                    <h3 class="texto_verde titulo_panel">INNOVACIÓN</h3>
                </div>
                <div class="flip-card-back">
                    <div class="d-flex justify-content-center">
                        <p class="texto_paneles texto_blanco">
                            Capaces de diseñar y fabricar soluciones de robótica industrial avanzadas, que incorporan tecnología de vanguardia
                        </p>
                    </div>
                </div>
            </li>
            <li class="panel panel-flip m-2">
                <div class="flip-card-front">
                    <img class="iconos" src="../images/calidad_icono.png" alt="Icono Calidad">
                    <h3 class="texto_verde titulo_panel">CALIDAD</h3>
                </div>
                <div class="flip-card-back">
                    <div class="d-flex justify-content-center">
                        <p class="texto_paneles texto_blanco">
                            Esfuerzo por alcanzar los más altos estándares de calidad en nuestros productos y
                            servicios, y trabajo constante en mejorar.
                        </p>
                    </div>
                </div>
            </li>
            <li class="panel panel-flip m-2">
                <div class="flip-card-front">
                    <img class="iconos" src="../images/dedicacion_icono.png" alt="Icono dedicación">
                    <h3 class="texto_verde titulo_panel">DEDICACIÓN</h3>
                </div>
                <div class="flip-card-back">
                    <div class="d-flex justify-content-center">
                        <p class="texto_paneles texto_blanco">
                            Preocupación por entender las necesidades de nuestros clientes y ofrecer soluciones
                            personalizadas que se adaptan a sus requerimientos específicos.
                        </p>
                    </div>
                </div>
            </li>
            <li class="panel panel-flip m-2">
                <div class="flip-card-front">
                    <img class="iconos" src="../images/mejorar_icono.png" alt="Icono mejorar">
                    <h3 class="texto_verde titulo_panel">MEJORAR</h3>
                </div>
                <div class="flip-card-back">
                    <div class="d-flex justify-content-center">
                        <p class="texto_paneles texto_blanco">
                            Compromiso con la innovación y la mejora continua, enfocados en desarrollar
                            soluciones que anticipen las tendencias y los desafíos futuros del mercado.
                        </p>
                    </div>
                </div>
            </li>
        </ul>
        <!--------------------------------------------------->
        <!--------------------------------------------------->
    </section>
<!---------------------------------------------------------------------------------------------------->
<!---------------------------------------- FOOTER ---------------------------------------------------->
<?php include_once './includes/footer.php';?>
<!---------------------------------------------------------------------------------------------------->
<!---------------------------------------------------------------------------------------------------->

<!---------------------------------------------------------------------------------------------------->
<!-------------------------------------SCRIPTS-------------------------------------------------------->
    <script>
//-------------------------------------------------------------------------//
//------------------------MENU ITEM SELECCIONADO---------------------------//
        var menu_opcion_acerca = document.getElementById("menu_opcion_acerca");

        function menuOpcionActivado(){
            menu_opcion_acerca.classList.remove("menu_opcion")
            menu_opcion_acerca.classList.add("menu_opcion_activado")
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
