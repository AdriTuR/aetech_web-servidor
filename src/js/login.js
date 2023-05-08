<!---------------------------------------------------------------------------------------------------->
<!---------------------------------------------------------------------------------------------------->
<!--                                          Login.js                                              -->
<!---------------------------------------------------------------------------------------------------->
<!---------------------------------------------------------------------------------------------------->
var form = document.getElementById("formulario_login");

form.addEventListener("submit", function(event) {
    event.preventDefault();
    var usuario = document.getElementById("usuario").value;
    var contrasenya = document.getElementById("contrasenya").value;
    var usuarioCorrecto = "usuario";
    var  contrasenyaCorrecta = "12345";

    if (usuario === usuarioCorrecto && contrasenya === contrasenyaCorrecta) {
        window.location.href = "panel_robot.php";
    } else {
        var alerta = document.getElementById("alerta_login")
        alerta.style.display = "flex";
    }
});
<!---------------------------------------------------------------------------------------------------->
<!---------------------------------------------------------------------------------------------------->
<!---------------------------------------------------------------------------------------------------->
<!---------------------------------------------------------------------------------------------------->