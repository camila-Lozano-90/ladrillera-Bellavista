<!-- Modal Items-->
<div class="modal fade" id="modalEliminar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">¿Seguro que desea eliminar este Horario?</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="frmEliminarHorario">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-4">
                                <div class="mb-3">
                                    <label for="" class="form-label">Día:</label>
                                    <input type="text" name="diaDel" id="diaDel" class="form-control form-control-sm" placeholder="" aria-describedby="helpId" readonly>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="mb-3">
                                    <label for="" class="form-label">Horario apertura:</label>
                                    <input type="time" name="horarioAperDel" id="horarioAperDel" class="form-control form-control-sm" placeholder="" aria-describedby="helpId" readonly>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="mb-3">
                                    <label for="" class="form-label">Horario cierre:</label>
                                    <input type="time" name="horarioCierreDel" id="horarioCierreDel" class="form-control form-control-sm" placeholder="" aria-describedby="helpId" readonly>
                                </div>
                            </div>
                            <hr>
                        </div>

                        <!--items*************************************************************************************************************** -->
                        <div class="card-footer d-flex justify-content-center">
                            <button type="reset" class="btn btn-secondary btn-sm ms-1">Cancelar</button>
                            <input value="Enviar" type="submit" style="background-color: #FF5733 ; color:#ffffff;" class="btn  btn-sm ms-1" name="btnGuardar1" id="btnGuardar1">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    let frmEliminarHorario = document.getElementById("frmEliminarHorario");

    //Carga Inicial de las interacciones
    function init() {
        frmEliminarHorario.addEventListener("submit", function(e) {
            guardarEdicionD(e);
        });
    }

    //Guardar el documento
    function guardarEdicionD(e) {
        e.preventDefault();
        let datos = new FormData(frmEliminarHorario);

        fetch("http://localhost/ProyectoBellavista/Configuracion/DeleteHorario", {
                method: "POST",
                body: datos,
            })
            .then((response) => response.json())
            .then((data) => {
                Swal.fire({
                    title: data,
                    icon: "success",
                    confirmButtonText: "Ok",
                });
            })
            .catch((error) => {
                console.log("hay un error :", error);
            });
    }


    init();
</script>