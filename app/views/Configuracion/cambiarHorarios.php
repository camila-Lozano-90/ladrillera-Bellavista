
<?php
##session_start();
error_reporting(0);
?>
<?php require_once APPROOT . '/views/user/inc/header.php'; ?>

<link rel="stylesheet" href="<?php echo URLROOT; ?>css/sweetalert2.min.css">
<script src="<?php echo URLROOT; ?>jQuery-3.6.0/jquery-3.6.0.min.js"></script>

<main class="col-md-12" style="background-color: white;height:auto;">
    <div class="container-fluid">
        <div style="background-color: #FF6800;" class="card-header bg-gradient text-white">
            <h5>Cambiar Horarios de atención</h5>
        </div>
        <div class="col-md-12">
            <div class="card">
                <form id="frmHorarioAdd">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-4">
                                <div class="mb-3">
                                    <label for="" class="form-label">Día:</label>
                                    <select class="form-select" name="dia" id="dia">
                                        <option value="Lunes">Lunes - Viernes</option>
                                        <option value="Sabado">Sábado</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="mb-3">
                                    <label for="" class="form-label">Horario apertura:</label>
                                    <input type="time" name="horarioAper" id="horarioAper" class="form-control form-control-sm" placeholder="" aria-describedby="helpId">
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="mb-3">
                                    <label for="" class="form-label">Horario cierre:</label>
                                    <input type="time" name="horarioCierre" id="horarioCierre" class="form-control form-control-sm" placeholder="" aria-describedby="helpId">
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
    <!-- fin del contenedor principal -->
</main>

<!-- Recent Sales Start -->
<div class="container-fluid pt-4 px-4">
    <div class="bg-light text-center rounded p-4">
        <div class="d-flex align-items-center justify-content-between mb-4">
            <h6 class="mb-0">Horario</h6>
        </div>
        <div class="table-responsive">
            <table id="tblHorario" class="table text-start align-middle table-bordered table-hover mb-0">
                <thead>
                    <tr class="text-dark">
                        <th scope="col">#</th>
                        <th scope="col">Día</th>
                        <th scope="col">Apertura</th>
                        <th scope="col">Cierre</th>

                        <th scope="col">Editar</th>
                        <th scope="col">Eliminar</th>
                    </tr>
                </thead>
                <tbody>
                </tbody>
            </table>
        </div>
    </div>
</div>
<!-- Recent Sales End -->


<script src="<?php echo URLROOT; ?>DataTables-1.12.1/js/jquery.dataTables.min.js"></script>
<script src="<?php echo URLROOT; ?>js/bootstrap.bundle.min.js"></script>
<script src="<?php echo URLROOT; ?>js/horarios.js"></script>
<script src="<?php echo URLROOT; ?>js/sweetalert2.all.min.js"></script>

<!-- FOOTER -->
<?php require_once APPROOT . '/views/user/inc/footer.php'; ?>

<?php require_once APPROOT . '/views/Configuracion/editarHorarios.php'; ?>
<?php require_once APPROOT . '/views/Configuracion/eliminarHorarios.php'; ?>