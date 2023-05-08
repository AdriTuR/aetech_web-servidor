<!---------------------------------------------------------------------------------------------------->
<!---------------------------------------- HEADER ---------------------------------------------------->

<!--------------------------------------------------->
<!--------------------- MODAL ----------------------->
<div class="modal" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <!--------------------------------------------------->
            <!--------------- MODAL - Header -------------------->
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h3 class="modal-title texto_verde" id="exampleModalLabel">RERCUPERAR CONTRASEÑA</h3>
            </div>
            <!--------------------------------------------------->
            <!---------------- MODAL - Body --------------------->
            <div class="modal-body">
                <div class="d-flex justify-content-center flex-column m-4">
                    <p class="py-2">
                        Introduce tu correo y te enviaremos un mail con las intrucciones para restaurar tu contraseña.
                    </p>
            <!--------------------------------------------------->
            <!--------- Formulario Recuperar Contra ------------->
                    <form class="formulario_recuperar_contra" id="formulario_recuperar_contra">
                        <div class="container_input d-flex">
                            <i class="fa fa-envelope iconos_login m-2"></i>
                            <input id="correo" type="email" class="form-control input_login" placeholder="Correo" required>
                        </div>
            <!--------------------------------------------------->
            <!----------------- Boton Enviar -------------------->
                        <div class="d-flex justify-content-center">
                            <button class="botones" type="submit">Enviar</button>
                        </div>
                    </form>
            <!--------------------------------------------------->
            <!--------------------------------------------------->
                </div>
            </div>
        </div>
    </div>
</div>
<!---------------------------------------------------------------------------------------------------->
<!---------------------------------------------------------------------------------------------------->