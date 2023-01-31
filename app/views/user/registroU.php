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

<body>

    <div class="wrapper">
        <div id="msg"></div>
        <!-- Mensajes de Verificación -->
        <div id="error" class="alert alert-danger ocultar" role="alert">
            Las Contraseñas no coinciden, vuelve a intentar !
        </div>
        <div id="ok" class="alert alert-success ocultar" role="alert">
            Las Contraseñas coinciden ! (Procesando formulario ... )
        </div>
        <!-- Fin Mensajes de Verificación -->
        
        <div class="inner">
            <img src="<?php echo URLROOT; ?>img/image-1.png" alt="" class="image-1">
            <form id="frmRegistroU" method="POST">
                <h3>¿Nuevo usuario?</h3>
                <div class="form-holder">
                    <span class="lnr lnr-user"></span>
                    <input id="nombresU" name="nombresU" type="text" class="form-control" placeholder="Nombres" required>
                </div>
                <div class="form-holder">
                    <span class="lnr lnr-user"></span>
                    <input id="apellidosU" name="apellidosU" type="text" class="form-control" placeholder="Apellidos" required>
                </div>
                <div class="form-holder">
                    <span class="lnr lnr-user"><i class="bi bi-person-vcard"></i></span>
                    <input id="numeroIdU" name="numeroIdU" type="num" class="form-control" placeholder="Número de C.C" required>
                </div>
                <div class="form-holder">
                    <span class="lnr lnr-lock"></span>
                    <input id="passU" name="passU" type="password1" class="form-control" placeholder="Contraseña" required>
                </div>
                <div class="form-holder">
                    <span class="lnr lnr-lock"></span>
                    <input type="password2" class="form-control" placeholder="Contraseña" required>
                </div>
                <button type="submit" id="enviar">
                    <span>Register</span>
                </button>
            </form>
            <img src="<?php echo URLROOT; ?>img/image-2.png" alt="" class="image-2">
        </div>

    </div>

    <style class="text/css">
        .ocultar {
            display: none;
        }

        .mostrar {
            display: block;
        }
    </style>
    <script src="<?php echo URLROOT; ?>js/jquery-3.3.1.min.js"></script>
</body>
<!-- Widgets End -->


<script src="<?php echo URLROOT; ?>jQuery-3.6.0/jquery-3.6.0.min.js"></script>
<script src="<?php echo URLROOT; ?>DataTables-1.12.1/js/jquery.dataTables.min.js"></script>
<script src="<?php echo URLROOT; ?>js/bootstrap.bundle.min.js"></script>
<script src="<?php echo URLROOT; ?>js/usuarios.js"></script>
<script src="<?php echo URLROOT; ?>js/sweetalert2.all.min.js"></script>

<?php require_once APPROOT . '/views/user/inc/footer.php'; ?>