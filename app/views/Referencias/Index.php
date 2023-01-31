<?php
session_start();
error_reporting(0);
?>

<?php require_once APPROOT . '/views/user/inc/header.php'; ?>

<?php require_once APPROOT . '/views/Referencias/referenciasAdd.php'; ?>


<!-- Recent Sales Start -->

<div class="container-fluid pt-4 px-4">
    <div class="bg-light text-center rounded p-4">
        <div class="d-flex align-items-center justify-content-between mb-4">
            <h6 class="mb-0">Referencias</h6>
        </div>
        <div class="table-responsive">
            <table id="tblReferencias" class="table text-start align-middle table-bordered table-hover mb-0">
                <thead>
                    <tr class="text-dark">
                        <th scope="col">Nombre</th>
                        <th scope="col">Medidas</th>
                        <th scope="col">Rendimiento</th>
                        <th scope="col">Peso</th>
                        <th scope="col">Referencia</th>

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

<?php require_once APPROOT . '/views/Referencias/referenciasEditar.php'; ?>

<?php require_once APPROOT . '/views/Referencias/referenciasEliminar.php'; ?>

<script src="<?php echo URLROOT; ?>DataTables-1.12.1/js/jquery.dataTables.min.js"></script>
<script src="<?php echo URLROOT; ?>js/bootstrap.bundle.min.js"></script>
<script src="<?php echo URLROOT; ?>js/referencias.js"></script>
<script src="<?php echo URLROOT; ?>js/sweetalert2.all.min.js"></script>

