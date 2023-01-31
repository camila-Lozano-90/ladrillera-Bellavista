<!-- Modal Items-->
<div class="modal fade" id="modalEliminaReferencia" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">¿Seguro que desea eliminar ésta referencia?</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="frmEliminarReferencia">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-4">
                                <div class="mb-3">
                                    <label for="" class="form-label">ID:</label>
                                    <input type="text" name="idDel" id="idDel" class="form-control form-control-sm" aria-describedby="helpId" readonly>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="mb-3">
                                    <label for="" class="form-label">Nombre:</label>
                                    <input type="text" name="nombreDel" id="nombreDel" class="form-control form-control-sm" aria-describedby="helpId" readonly>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="mb-3">
                                    <label for="" class="form-label">Medidas:</label>
                                    <input type="text" name="medidasDel" id="medidasDel" class="form-control form-control-sm" aria-describedby="helpId" readonly>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="mb-3">
                                    <label for="" class="form-label">Rendimiento:</label>
                                    <input type="text" name="rendimientoDel" id="rendimientoDel" class="form-control form-control-sm" aria-describedby="helpId" readonly>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="mb-3">
                                    <label for="" class="form-label">Peso:</label>
                                    <input type="text" name="pesoDel" id="pesoDel" class="form-control form-control-sm" placeholder="" aria-describedby="helpId" readonly>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="mb-3">
                                    <label for="" class="form-label">Referencia:</label>
                                    <input type="text" name="referenciaDel" id="referenciaDel" class="form-control form-control-sm" placeholder="" aria-describedby="helpId" readonly>
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

    <script type="text/javascript">
    let frmEliminarReferencia = document.getElementById("frmEliminarReferencia");

    //Carga Inicial de las interacciones
    function init() {
        frmEliminarReferencia.addEventListener("submit", function(e) {
            guardarEliminacion(e);
        });
    }

    //Guardar el documento
    function guardarEliminacion(e) {
        e.preventDefault();
        let datos = new FormData(frmEliminarReferencia);

        fetch("http://localhost/ProyectoBellavista/Referencias/Delete", {
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