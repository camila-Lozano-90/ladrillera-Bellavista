<!-- Modal Items-->
<div class="modal fade" id="modalEditar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Editar Referencia:</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="frmEditarReferencia">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-4">
                                <div class="mb-3">
                                    <label for="" class="form-label">ID:</label>
                                    <input type="text" name="idEdit" id="idEdit" class="form-control form-control-sm" aria-describedby="helpId" readonly>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="mb-3">
                                    <label for="" class="form-label">Nombre:</label>
                                    <input type="text" name="nombreEdit" id="nombreEdit" class="form-control form-control-sm" aria-describedby="helpId" required>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="mb-3">
                                    <label for="" class="form-label">Medidas:</label>
                                    <input type="text" name="medidasEdit" id="medidasEdit" class="form-control form-control-sm" aria-describedby="helpId" required>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="mb-3">
                                    <label for="" class="form-label">Rendimiento:</label>
                                    <input type="text" name="rendimientoEdit" id="rendimientoEdit" class="form-control form-control-sm" aria-describedby="helpId" required>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="mb-3">
                                    <label for="" class="form-label">Peso:</label>
                                    <input type="text" name="pesoEdit" id="pesoEdit" class="form-control form-control-sm" placeholder="" aria-describedby="helpId">
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="mb-3">
                                    <label for="" class="form-label">Referencia:</label>
                                    <input type="text" name="referenciaEdit" id="referenciaEdit" class="form-control form-control-sm" placeholder="" aria-describedby="helpId">
                                </div>
                            </div>
                            <hr>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                        <input type="submit" class="btn" value="Guardar Cambios" style="background-color: #FF5733 ; color:#ffffff;">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    let frmEditarReferencia = document.getElementById("frmEditarReferencia");

    //Carga Inicial de las interacciones
    function init() {
        frmEditarReferencia.addEventListener("submit", function(e) {
            guardarEdicion(e);
        });
    }

    //Guardar el documento
    function guardarEdicion(e) {
        e.preventDefault();
        let datos = new FormData(frmEditarReferencia);

        fetch("http://localhost/ProyectoBellavista/Referencias/Update", {
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