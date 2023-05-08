<!---------------------------------------------------------------------------------------------------->
<!---------------------------------------- HEADER ---------------------------------------------------->
<header id="encabezado">
    <div class="d-flex justify-content-between encabezado">
        <!--------------------------------------------------->
        <!---------------- Logo Aetech ---------------------->
        <a href="index.php"><img class="logo_aetech_landing" src="../images/logo_AETECH.png" alt="Logo Aetech"></a>
        <!--------------------------------------------------->
        <!-------------------- MENU ------------------------->
        <nav class="menu">
            <ul class="d-flex flex-row menu_elementos">
                <li class="m-4"><a class="menu_opcion" id="menu_opcion_landing" href="index.php">INICIO</a></li>
                <li class="m-4"><a class="menu_opcion" id="menu_opcion_acerca" href="acerca_de_nosotros.php">ACERCA DE AETECH</a></li>
            </ul>
        </nav>
        <!--------------------------------------------------->
        <!---------------- INICIAR SESIÓN ------------------->
        <button class="botones m-4" id="boton_iniciar_sesion" onclick="window.location.href = 'login.php';">Iniciar Sesión</button>
        <!--------------------------------------------------------------------------->
        <!----------------------------- HEADER SECUNDARIO --------------------------->
        <div class="d-none justify-content-end align-items-center div_menu_secundario">
        <!--------------------------------------------------->
        <!----------- INICIAR SESIÓN SECUNDARIO ------------->
            <button class="" id="boton_iniciar_sesion_secundario" onclick="window.location.href = 'login.php';">
                <i class="fa fa-user-circle icono_menu"></i>
            </button>
        <!--------------------------------------------------->
        <!-------------BOTON MENU SECUNDARIO----------------->
            <button class="" id="boton_menu_secundario" data-toggle="collapse" href="#menu_secundario" aria-expanded="false" aria-controls="menu_secundario">
                <i class="fa fa-bars icono_menu" id="icono_menu"></i>
            </button>
        <!--------------------------------------------------->
        <!--------------------------------------------------->
        </div>
    </div>
        <!--------------------------------------------------->
        <!------------------MENU SECUNDARIO------------------>
    <nav class="menu_secundario collapse" id="menu_secundario">
        <ul class="d-block flex-row menu_elementos">
            <li class="p-4 text-center menu_secundario_opcion" id="menu_opcion_landing" onclick="location.href='index.php';">INICIO</li>
            <li class="p-4 text-center menu_secundario_opcion" id="menu_opcion_acerca" onclick="location.href='acerca_de_nosotros.php';">ACERCA DE AETECH</li>
        </ul>
    </nav>
        <!--------------------------------------------------->
        <!--------------------------------------------------->
</header>
<!---------------------------------------------------------------------------------------------------->
<!---------------------------------------------------------------------------------------------------->

