<div class="modal fade" id="modal-editar">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Asignar Roles a Empleados</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>


            <div class="modal-body">
                <form Method="POST" action="../../BD/editar-roles.php" id="formulario">

                    <div class="row">
                        <div class="form col-6">
                            <label>Identificador de Empleado</label>
                            <input type="text" readonly class="form-control" id="IE" name="ie" required>
                        </div>

                    </div>

                    <div class="row">
                        <div class="form col-6">
                            <label>Nombre(s)</label>
                            <input type="text" readonly class="form-control" id="nombre" name="nombre" required>
                        </div>

                        <div class="form col-6">
                            <label>Apellido(s) </label>
                            <input type="text" readonly class="form-control" id="apellidos" name="apellidos" required>

                        </div>
                    </div>

                    <div class="row">

                    
                        <div class="form col-6">
                            <label>ROL</label>
                            <select class="form-control select2 select2-danger" name="rol" data-dropdown-css-class="select2-danger"
                                style="width: 100%;">
                                <option selected="selected"> Administrador</option>
                                <option>Empleado</option>
                            </select>
                        </div>



                        <div class="form-group col-6">


                            <label for="">Usuario</label>
                            <input type="text" readonly class="form-control" id="claveacceso" name="claveacceso"
                                required>

                        </div>
                    </div>


                    <div class="row">
                        <div class="form-group col-12">
                            <label for="">Contraseña</label>
                            <input type="text" class="form-control" id="credencialacceso" name="credencialacceso"
                                required>

                        </div>
                    </div>





                    <!--Botones del modal. -->
                    <div class="modal-footer justify-content-between">
                        <button type="button" onclick="limpiarform()" class="btn btn-default"
                            data-dismiss="modal">Cerrar</button>

                        <button type="submit" class="btn btn-primary" name="funcion" value="btnActualizarRol">Guardar
                            Cambios</button>

                    </div>

                </form>

            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->


<!--Limpiar datos  en el formulario al momento de presionar el boton cerrar. -->
<script>
function limpiarform() {
    document.getElementById("formulario").reset();
}
</script>
<!--Limpiar datos  en el formulario al momento de presionar el boton cerrar. -->