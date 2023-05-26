<!---------------------------------------------------------------------------------------------------->
<!---------------------------------------------------------------------------------------------------->
<!--                                         Login.php                                              -->
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
        <title>Iniciar Sesión</title>
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
    <body onload="esconderBotonIniciarSesion()">
<!---------------------------------------------------------------------------------------------------->
<!---------------------------------------- HEADER ---------------------------------------------------->
<?php include_once './includes/header.php';?>
<!---------------------------------------------------------------------------------------------------->
<!------------------------------------ SECCION LOGIN ------------------------------------------------->
    <section class="seccion_login d-flex justify-content-center">
        <div class="justify-content-center m-3">
            <!--------------------------------------------------->
            <!----------------- Titulo Login -------------------->
            <h1 class="texto_verde">INICIAR SESIÓN</h1>
            <!--------------------------------------------------->
            <!----------------- Texto Login --------------------->
            <p class="m-2"> Introduce tus datos para acceder al panel de tu robot.</p>
            <!--------------------------------------------------->
            <!---------------- Alerta Login --------------------->
            <div class="alert alert-danger m-4" id="alerta_login" role="alert">
                <strong>Oh vaya!</strong> Parece que la contraseña y el usuario no son correctos.
            </div>
            <!--------------------------------------------------->
            <!----------------- Form Login ---------------------->
            <div class="div_formulario_login justify-content-center">
                <form class="formulario_login" id="formulario_login" action="Servidor/ComprobarCredenciales.php" method="post">
                    <div class="container_input d-flex">
                        <i class="fa fa-user iconos_login m-2"></i>
                        <input id="correo" type="text" class="form-control input_login" placeholder="Usuario" name="correo" required>
                    </div>
                    <div class="container_input d-flex">
                        <i class="fa fa-lock iconos_login m-2"></i>
                        <input id="contrasenya" type="password" class="form-control input_login" placeholder="Contraseña" name="contrasenya" required>
                    </div>
            <!--------------------------------------------------->
            <!----------------- Boton Login --------------------->
                    <div class="d-flex justify-content-center">
                        <button class="botones" type="submit">Iniciar Sesión</button>
                    </div>
                </form>
            <!--------------------------------------------------->
            <!------------- Boton Contra Olvidada --------------->
                <div class="d-flex justify-content-center">
                    <button type="button" class="boton_contra_olvidada" data-toggle="modal" data-target="#exampleModal">¿Has olvidado tu contraseña?</button>
                </div>
            <!--------------------------------------------------->
            <!--------------------------------------------------->
            </div>
            <!--------------------------------------------------->
            <!---------- Form Recuperar Contra ------------------>
            <?php include_once './includes/recuperar_contrasenya.php';?>
            <!--------------------------------------------------->
            <!--------------------------------------------------->
        </div>
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
        //----------------------OCULTAR BOTON INICIAR SESION-----------------------//
        var MenuBotonIniciarSesion = document.getElementById("boton_iniciar_sesion")
        var MenuBotonIniciarSesionSecundario = document.getElementById("boton_iniciar_sesion_secundario")

        function esconderBotonIniciarSesion(){
            MenuBotonIniciarSesion.style.visibility = "hidden"
            MenuBotonIniciarSesionSecundario.style.visibility = "hidden"
        }
        //-------------------------------------------------------------------------//
        //-------------------------------------------------------------------------//
    </script>
<!---------------------------------------------------------------------------------------------------->
<!---------------------------------------------------------------------------------------------------->
    </body>
<!--  <script src="../src/js/login.js"></script>-->
<!---------------------------------------------------------------------------------------------------->
<!---------------------------------------------------------------------------------------------------->
</html>
