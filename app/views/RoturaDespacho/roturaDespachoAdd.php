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
            <h5>Rotura en Despacho</h5>
        </div>

        <div class="col-md-12">
            <div class="card">
                <form id="frmRoturaDespacho">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-4">
                                <div class="mb-3">
                                    <label for="" class="form-label">Fecha:</label>
                                    <input type="date" name="fecha3" id="fecha3" class="form-control form-control-sm" aria-describedby="helpId" required>
                                </div>
                            </div>
                            <div class="col-md-5" style="display:inline-block;">
                                <label for="" class="form-label">Responsable:</label>
                                <div class="input-group form-group" style="padding-top:0%;padding-left:1%;margin-top:0%;margin-bottom:2%;">
                                    <input id="responsableDiario3" name="responsableDiario3" type="text" class="form-control" placeholder="Buscar...">
                                    <button id="buscarResp3" class="btn" type="button" style="background-color: #FF6800;color: white;" data-bs-toggle="modal" data-bs-target="#items6"><span class="bi bi-search"></span></button>
                                </div>
                            </div>
                            <div class="col-md-5" style="display:inline-block;">
                                <label for="" style="margin-top: 1%;" class="form-label">Referencia:</label>
                                <div class="input-group form-group" style="padding-top:0%;padding-left:1%;margin-top:0%;margin-bottom:2%;">
                                    <input id="referencial3" name="referencial3" type="text" class="form-control" placeholder="Buscar..." required>
                                    <button id="buscarRef" class="btn" type="button" style="background-color: #FF6800;color: white;" data-bs-toggle="modal" data-bs-target="#items5"><span class="bi bi-search"></span></button>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="mb-3">
                                    <label for="" class="form-label">Cantidad:</label>
                                    <input type="number" name="unidades" id="unidades" class="form-control form-control-sm" placeholder="" aria-describedby="helpId">
                                </div>
                            </div>
                            <hr>
                        </div>
                        <!--items*************************************************************************************************************** -->
                        <div class="card-footer d-flex justify-content-center">
                            <button type="reset" class="btn btn-secondary btn-sm ms-1">Cancelar</button>
                            <input value="Enviar" type="submit" style="background-color: #FF5733 ; color:#ffffff;" class="btn  btn-sm ms-1" name="btnGuardar3" id="btnGuardar3">
                        </div>
                </form>
            </div>
        </div>
    </div>
    </div>
    <!-- fin del contenedor principal -->
</main>


<!-- Modal Items-->
<div class="modal fade" id="items5" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Referencias:</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <table class="table table-bordered table-sm table-hover" id="tblReferencias4">
                    <thead class="table-light">
                        <tr>
                            <th></th>
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
                <button type="button" style="background-color: #FF6800;color: white;" class="btn" data-bs-dismiss="modal">Aceptar</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal Items-->
<div class="modal fade" id="items6" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Operarios</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <table class="table table-bordered table-sm table-hover" id="tblOperarios3">
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


<script src="<?php echo URLROOT; ?>js/bootstrap.bundle.min.js"></script>
<script src="<?php echo URLROOT; ?>DataTables-1.12.1/js/jquery.dataTables.min.js"></script>
<script src="<?php echo URLROOT; ?>js/roturaDespacho.js"></script>
<script src="<?php echo URLROOT; ?>js/sweetalert2.all.min.js"></script>

