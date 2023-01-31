<?php
session_start();
error_reporting(0);

?>
<?php require_once APPROOT . '/views/user/inc/header.php'; ?>

<link rel="stylesheet" href="<?php echo URLROOT; ?>css/sweetalert2.min.css">
<script src="<?php echo URLROOT; ?>jQuery-3.6.0/jquery-3.6.0.min.js"></script>

<main class="col-md-12" style="background-color: white;height:auto;">
    <div class="container-fluid">
        <div style="background-color: #FF6800;" class="card-header bg-gradient text-white">
            <h5>Control de cargue y descargue horno</h5>
        </div>
        <div class="col-md-12">

            <div class="card">
                <form id="frmCargueDescargue" action="">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-5" style="display:inline-block;">
                                <label for="" class="form-label">Responsable Cargue:</label>
                                <div class="input-group form-group" style="padding-top:0%;padding-left:1%;margin-top:0%;margin-bottom:2%;">
                                    <input id="responsableCargue" name="responsableCargue" type="text" class="form-control" placeholder="Buscar...">
                                    <button id="buscarResp" class="btn" type="button" style="background-color: #FF6800;color: white;" data-bs-toggle="modal" data-bs-target="#items2"><span class="bi bi-search"></span></button>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="mb-3">
                                    <label for="" class="form-label">Nave #:</label>
                                    <input type="number" name="nave" id="nave" class="form-control form-control-sm" placeholder="<?php ?>" aria-describedby="helpId">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="mb-3">
                                    <label for="" class="form-label">Quema #:</label>
                                    <input type="number" name="quema" id="quema" class="form-control form-control-sm" placeholder="" aria-describedby="helpId">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="mb-3">
                                    <label for="" class="form-label">Paquete:</label>
                                    <input type="number" name="paquete" id="paquete" class="form-control form-control-sm" placeholder="" aria-describedby="helpId">
                                </div>
                            </div>
                            <div class="col-5">
                                <div class="mb-3">
                                    <label for="" class="form-label">Línea:</label>
                                    <input type="number" name="linea" id="linea" class="form-control form-control-sm" placeholder="" aria-describedby="helpId">
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="mb-3">
                                    <label for="" class="form-label">Fecha:</label>
                                    <input type="date" name="fechaCargue" id="fechaCargue" class="form-control form-control-sm" aria-describedby="helpId">
                                </div>
                            </div>
                            <div class="col-2">
                                <button type="button" style="background-color: #FF6800; color:#ffffff;" class="btn  btn-sm shadow-sm" data-bs-toggle="modal" data-bs-target="#items">
                                    <i class="bi bi-plus-circle">Agregar Referencia</i>
                                </button>
                            </div>
                            <hr>
                        </div>
                        <!--items*************************************************************************************************************** -->
                        <div class="row mb-1">
                            <div class="col-4"></div>
                        </div>
                        <div class="row">
                            <div class="col-12">

                                <table class="table table-bordered table-sm" id="detalle">
                                    <thead class=" table-light">
                                        <tr>
                                            <th>id</th>
                                            <th>nombre</th>
                                            <th>medidas</th>
                                            <th>Rendimiento</th>
                                            <th>Peso</th>
                                            <th>referencia</th>
                                            <th>Cantidad</th>
                                            <th>Acciones</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                    </tbody>
                                </table>
                            </div>

                        </div>
                        <div class="card-footer d-flex justify-content-center">
                            <button type="reset" class="btn btn-secondary btn-sm ms-1">Cancelar</button>
                            <input value="Enviar" type="submit" style="background-color: #FF5733 ; color:#ffffff;" class="btn  btn-sm ms-1" name="btnGuardar" id="btnGuardar">

                        </div>
                </form>
            </div>
        </div>
    </div>
    </div>

    <!-- Modal Items-->
    <div class="modal fade" id="items" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Referencias</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <table class="table table-bordered table-sm table-hover" id="tblReferencias">
                        <thead class="table-light">
                            <tr>
                                <th></th>
                                <th>id</th>
                                <th>nombre</th>
                                <th>medidas</th>
                                <th>Rendimiento</th>
                                <th>Peso</th>
                                <th>referencia</th>
                            </tr>
                        </thead>
                        <tbody class="table-group-divider">

                        </tbody>
                        <tfoot>
                            <tr>
                                <th></th>
                                <th>id</th>
                                <th>nombre</th>
                                <th>medidas</th>
                                <th>Rendimiento</th>
                                <th>Peso</th>
                                <th>referencia</th>
                            </tr>

                        </tfoot>
                    </table>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
    <!-- fin del contenedor principal -->
</main>

<!-- Modal Items-->
<div class="modal fade" id="items2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Operarios</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <table class="table table-bordered table-sm table-hover" id="tblOperarios">
                    <thead class="table-light">
                        <tr>
                            <th></th>
                            <th>Nombres</th>
                            <th>Apellidos</th>
                        </tr>
                    </thead>
                    <tbody class="table-group-divider">

                    </tbody>
                    <tfoot>
                        <tr>
                            <th></th>
                            <th>Nombres</th>
                            <th>Apellidos</th>
                        </tr>
                    </tfoot>
                </table>



            </div>
            <div class="modal-footer">
                <button type="button" style="background-color: #FF6800;color: white;" class="btn" data-bs-dismiss="modal">Aceptar</button>
            </div>
        </div>
    </div>
</div>

<!-- fin del contenedor principal -->

<script src="<?php echo URLROOT; ?>DataTables-1.12.1/js/jquery.dataTables.min.js"></script>
<script src="<?php echo URLROOT; ?>js/bootstrap.bundle.min.js"></script>
<script src="<?php echo URLROOT; ?>js/prestamosAdd.js"></script>
<script src="<?php echo URLROOT; ?>js/sweetalert2.all.min.js"></script>

<?php require_once APPROOT . '/views/user/inc/footer.php'; ?>