<?php
session_start();
error_reporting(0);
?>
<?php require_once APPROOT . '/views/user/inc/header.php'; ?>

<link rel="stylesheet" href="<?php echo URLROOT; ?>css/sweetalert2.min.css">
<script src="<?php echo URLROOT; ?>jQuery-3.6.0/jquery-3.6.0.min.js"></script>
<link rel="stylesheet" href="<?php echo URLROOT; ?>fonts/linearicons/style.css">

<!-- STYLE CSS -->
<link rel="stylesheet" href="<?php echo URLROOT; ?>css/styleR.css">
<link rel="stylesheet" href="<?php echo URLROOT; ?>css/style.css">

<body>

    <div class="wrapper">
        <div class="inner">
            <img src="<?php echo URLROOT; ?>img/img-2.png" alt="" style="position: absolute; bottom: -12px; left: -350px; z-index: 80;" class="image-">
            <form id="frmOperariosAdd">
                <h3>¿Nuevo usuario?</h3>
                <div class="form-holder">
                    <span class="lnr lnr-user"></span>
                    <input id="nombres" name="nombres" type="text" class="form-control" placeholder="Nombres" required>
                </div>
                <div class="form-holder">
                    <span class="lnr lnr-user"></span>
                    <input id="apellidos" name="apellidos" type="text" class="form-control" placeholder="Apellidos" required>
                </div>
                <button type="submit">
                    <span>Guardar</span>
                </button>
            </form>
            <img src="<?php echo URLROOT; ?>img/image-2.png" alt="" class="image-2">
        </div>

    </div>

    <script src="<?php echo URLROOT; ?>js/jquery-3.3.1.min.js"></script>
</body>
<!-- Widgets End -->


<script src="<?php echo URLROOT; ?>jQuery-3.6.0/jquery-3.6.0.min.js"></script>
<script src="<?php echo URLROOT; ?>DataTables-1.12.1/js/jquery.dataTables.min.js"></script>
<script src="<?php echo URLROOT; ?>js/bootstrap.bundle.min.js"></script>
<script src="<?php echo URLROOT; ?>js/operarios.js"></script>
<script src="<?php echo URLROOT; ?>js/sweetalert2.all.min.js"></script>

<?php require_once APPROOT . '/views/user/inc/footer.php'; ?>