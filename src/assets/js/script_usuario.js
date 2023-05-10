/*========== Cambiar de sección ==========*/
document.getElementById("icono__menu").addEventListener("click", mostrar_Menu);

document.getElementById("header__empleados_txt").addEventListener("click", seccionEmpleados);
document.getElementById("logo__main_loged").addEventListener("click", seccionEmpleados);

document.getElementById("footer__empleados").addEventListener("click", seccionEmpleados);


document.getElementById("header__calendario_txt").addEventListener("click", seccionCalendario);
document.getElementById("header__mapa_txt").addEventListener("click", seccionMapa);
document.getElementById("footer__calendario").addEventListener("click", seccionCalendario);
document.getElementById("footer__log_mapa").addEventListener("click", seccionMapa);
document.getElementById("btn__cerrar_robot").addEventListener("click", seccionMapa);

document.getElementById("robot_1").addEventListener("click", seccionRobot);





var sec_empleados = document.querySelector(".pestanya__empleados");
var sec_nuevo_empleado = document.querySelector(".pestanya__nuevo_empleado");
var sec_calendario = document.querySelector(".pestanya_calendario");
var sec_mapa = document.querySelector(".pestanya_mapa");
var sec_robot = document.querySelector(".pestanya_robot");

/*========== Footer ==========*/
var footer_sin_sesion = document.querySelector(".landing__footer");

var color_fondo = document.querySelector("#body_landing");

var editor_imagen_perfil = document.querySelector("#selector_foto_perfil");
var icono_editor_imagen_perfil = document.querySelector(".imagen_editor_perfil_container");
var id_icono_perfil = 1;

var open_close = 1;

/*%%%%%%%%%% FUNCIONES %%%%%%%%%%*/

//Cabecera responsive boton abrir y cerrar menú
//mostrar_Menu()
function mostrar_Menu(){
    document.getElementById("ensenyar__menu").classList.toggle("mostrar__menu_L");
    if ( document.getElementById("icono__menu_m_o_x").className == "ico__menu_bar"){
        document.getElementById("icono__menu_m_o_x").className = "ico__menu_x";
    }
    else {
        document.getElementById("icono__menu_m_o_x").className = "ico__menu_bar";
    }
}//()


//En el cuerpo de la web hace que se muestre la sección inicio
//seccionEmpleados()
function seccionEmpleados(){
    document.getElementById("header__empleados_txt").className = "text-menu-selected";
    document.getElementById("header__calendario_txt").className = null;
    document.getElementById("header__mapa_txt").className = null;

    document.getElementById("header__empleados-sub").className = "header__menu-selected";
    document.getElementById("header__calendario-sub").className = null;
    document.getElementById("header__mapa-sub").className = null;

    sec_empleados.style.display="flex";
    sec_nuevo_empleado.style.display="none";
    sec_calendario.style.display="none";
    sec_mapa.style.display="none";
    footer_sin_sesion.style.marginTop="100px";
    sec_robot.style.display="none";

    color_fondo.style.backgroundImage = "none";
    color_fondo.style.backgroundColor = "#fafafa";

    scrollArriba();
    cerrarMenu();
}//()

function seccionNuevoEmpleado(){
    document.getElementById("header__empleados_txt").className = "text-menu-selected";
    document.getElementById("header__calendario_txt").className = null;
    document.getElementById("header__mapa_txt").className = null;

    document.getElementById("header__empleados-sub").className = "header__menu-selected";
    document.getElementById("header__calendario-sub").className = null;
    document.getElementById("header__mapa-sub").className = null;

    sec_empleados.style.display="none";
    sec_nuevo_empleado.style.display="flex";
    sec_calendario.style.display="none";
    sec_mapa.style.display="none";
    sec_robot.style.display="none";

    footer_sin_sesion.style.marginTop="100px";

    color_fondo.style.backgroundImage = "none";
    color_fondo.style.backgroundColor = "#fafafa";

    scrollArriba();
    cerrarMenu();
}//()



//En el cuerpo de la web hace que se muestre la sección Contactanos
//seccionCalendario()
function seccionCalendario(){
    document.getElementById("header__empleados_txt").className = null;
    document.getElementById("header__calendario_txt").className = "text-menu-selected";
    document.getElementById("header__mapa_txt").className = null;

    document.getElementById("header__empleados-sub").className = null;
    document.getElementById("header__calendario-sub").className = "header__menu-selected";
    document.getElementById("header__mapa-sub").className = null;

    sec_empleados.style.display="none";
    sec_nuevo_empleado.style.display="none";
    sec_calendario.style.display="flex";
    sec_mapa.style.display="none";
    sec_robot.style.display="none";

    footer_sin_sesion.style.marginTop="100px";
    //color_fondo.style.backgroundImage = "url('assets/images/fondo.jpeg')";
    color_fondo.style.backgroundImage = "none";
    color_fondo.style.backgroundColor = "#fafafa";

    scrollArriba();
    cerrarMenu();
}//()



//En el cuerpo de la web hace que se muestre la sección Mapa
//seccionMapa()
function seccionMapa(){
    document.getElementById("header__empleados_txt").className = null;
    document.getElementById("header__calendario_txt").className = null;
    document.getElementById("header__mapa_txt").className = "text-menu-selected";

    document.getElementById("header__empleados-sub").className = null;
    document.getElementById("header__calendario-sub").className = null;
    document.getElementById("header__mapa-sub").className = "header__menu-selected";

    sec_empleados.style.display="none";
    sec_nuevo_empleado.style.display="none";
    sec_calendario.style.display="none";
    sec_mapa.style.display="flex";
    sec_robot.style.display="none";

    footer_sin_sesion.style.marginTop="-150px";

    color_fondo.style.backgroundImage = "none";
    color_fondo.style.backgroundColor = "#fafafa";

    scrollArriba();
    cerrarMenu();
}//()

//En el cuerpo de la web hace que se muestre la sección inicio
//function seccionSinDispositivo()
function seccionRobot(){
    document.getElementById("header__empleados_txt").className = null;
    document.getElementById("header__calendario_txt").className = null;
    document.getElementById("header__mapa_txt").className = "text-menu-selected";

    document.getElementById("header__empleados-sub").className = null;
    document.getElementById("header__calendario-sub").className = null;
    document.getElementById("header__mapa-sub").className = "header__menu-selected";

    sec_empleados.style.display="none";
    sec_nuevo_empleado.style.display="none";
    sec_calendario.style.display="none";
    sec_mapa.style.display="none";
    sec_robot.style.display="flex";

    footer_sin_sesion.style.marginTop="100px";


    color_fondo.style.backgroundImage = "none";
    color_fondo.style.backgroundColor = "#fafafa";

    scrollArriba();
    cerrarMenu();
}//()




//Cierra el menu lateral de las secciones
//cerrarMenu()
function cerrarMenu(){
    if (
        document.getElementById("icono__menu_m_o_x").className == "ico__menu_x"){
        document.getElementById("ensenyar__menu").classList.toggle("mostrar__menu_L");
        document.getElementById("icono__menu_m_o_x").className = "ico__menu_bar";
    }
}//()

//Hace scroll hasta la parte superior de la web
//scrollArriba()
function scrollArriba(){
    window.scrollTo({ top: 0, behavior: 'smooth' });
}//()

