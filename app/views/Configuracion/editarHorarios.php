<!-- Modal Items-->
<div class="modal fade" id="modalEditar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Editar Horario:</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="frmEditarHorario">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-4">
                                <div class="mb-3">
                                    <label for="" class="form-label">Día:</label>
                                    <input type="text" name="diaEdit" id="diaEdit" class="form-control form-control-sm" placeholder="" aria-describedby="helpId">
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="mb-3">
                                    <label for="" class="form-label">Horario apertura:</label>
                                    <input type="time" name="horarioAperEdit" id="horarioAperEdit" class="form-control form-control-sm" placeholder="" aria-describedby="helpId">
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="mb-3">
                                    <label for="" class="form-label">Horario cierre:</label>
                                    <input type="time" name="horarioCierreEdit" id="horarioCierreEdit" class="form-control form-control-sm" placeholder="" aria-describedby="helpId">
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
    let frmEditarHorario = document.getElementById("frmEditarHorario");

    //Carga Inicial de las interacciones
    function init() {
        frmEditarHorario.addEventListener("submit", function(e) {
            guardarEdicionH(e);
        });
    }

    //Guardar el documento
    function guardarEdicionH(e) {
        e.preventDefault();
        let datos = new FormData(frmEditarHorario);

        fetch("http://localhost/ProyectoBellavista/Configuracion/UpdateHorario", {
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