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
            <h5>Nueva Referencia</h5>
        </div>
        <div class="col-md-12">
            <div class="card">
                <form id="frmNuevaReferencia">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-4">
                                <div class="mb-3">
                                    <label for="" class="form-label">Nombre:</label>
                                    <input type="text" name="nombre" id="nombre" class="form-control form-control-sm" aria-describedby="helpId" required>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="mb-3">
                                    <label for="" class="form-label">Medidas:</label>
                                    <input type="text" name="medidas" id="medidas" class="form-control form-control-sm" aria-describedby="helpId" required>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="mb-3">
                                    <label for="" class="form-label">Rendimiento:</label>
                                    <input type="text" name="rendimiento" id="rendimiento" class="form-control form-control-sm" aria-describedby="helpId" required>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="mb-3">
                                    <label for="" class="form-label">Peso:</label>
                                    <input type="text" name="peso" id="peso" class="form-control form-control-sm" placeholder="" aria-describedby="helpId">
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="mb-3">
                                    <label for="" class="form-label">Referencia:</label>
                                    <input type="text" name="referencia" id="referencia" class="form-control form-control-sm" placeholder="" aria-describedby="helpId">
                                </div>
                            </div>
                            <hr>
                        </div>

                        <!--items*************************************************************************************************************** -->
                        <div class="card-footer d-flex justify-content-center">
                            <button type="reset" class="btn btn-secondary btn-sm ms-1">Cancelar</button>
                            <input value="Enviar" type="submit" style="background-color: #FF5733 ; color:#ffffff;" class="btn  btn-sm ms-1" name="btnGuardar1" id="btnGuardar1">
                        </div>
                </form>
            </div>
        </div>
    </div>
    </div>
</main>
<!-- fin del contenedor principal -->



