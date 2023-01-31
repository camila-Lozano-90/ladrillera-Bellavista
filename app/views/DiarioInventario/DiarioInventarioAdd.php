<?php
session_start();
error_reporting(0);
?>

<?php require_once APPROOT . '/views/user/inc/header.php'; ?>

<link rel="stylesheet" href="<?php echo URLROOT; ?>css/sweetalert2.min.css">
<script src="<?php echo URLROOT; ?>jQuery-3.6.0/jquery-3.6.0.min.js"></script>

<main class="col-md-12" style="background-color: white;height:auto;">
    <div class="container-fluid">
        <div class="card-header bg-gradient text-Dark">
            <h5>Control diario de despachos</h5>
        </div>

        <div class="row" style="display: inline-flex;">
            <hr>
            <?php require_once  APPROOT . '/views/primeraDespacho/primeraDespachoAdd.php'; ?>
            <hr>
            <?php require_once  APPROOT . '/views/segundaDespacho/segundaDespachoAdd.php'; ?>
            <hr>
            <?php require_once  APPROOT . '/views/RoturaDespacho/roturaDespachoAdd.php'; ?>
            <hr>
            <!-- fin del contenedor principal -->
        </div>
    </div>
</main>



<script src="<?php echo URLROOT; ?>DataTables-1.12.1/js/jquery.dataTables.min.js"></script>
<script src="<?php echo URLROOT; ?>js/bootstrap.bundle.min.js"></script>
<script src="<?php echo URLROOT; ?>js/sweetalert2.all.min.js"></script>

<?php require_once APPROOT . '/views/user/inc/footer.php'; ?>