<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <link rel="icon" href="<?php echo URLROOT; ?>img/LogotipoLadrillera.png">
    <title><?php echo SITENAME; ?></title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">


    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="<?php echo URLROOT; ?>owlcarousel/assets/owl.carousel.min.css">
    <link href="<?php echo URLROOT; ?>tempusdominus/css/tempusdominus-bootstrap-4.min.css"  />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="<?php echo URLROOT; ?>css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="<?php echo URLROOT; ?>css/style.css" rel="stylesheet">
</head>

<body>
    <div class="container-xxl position-relative bg-white d-flex p-0">
        <!-- Spinner Start -->
        <!--         <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div> -->
        <!-- Spinner End -->


        <!-- Sidebar Start -->
        <div class="sidebar pe-4 pb-3">
            <nav class="navbar bg-light navbar-light">
                <a href="<?php echo URLROOT; ?>Login" class="navbar-brand mx-4 mb-3">
                    <h4 class="text">Ladrillera Bellavista</h4>
                </a>
                <div class="d-flex align-items-center ms-4 mb-4">
                    <div class="position-relative">
                        <img class="rounded-circle" src="<?php echo URLROOT; ?>img/logoBellavista.jpg" alt="" style="width: 40px; height: 40px;">
                        <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
                    </div>
                    <div class="ms-3">
                        <h6 class="mb-0"><?php echo $_SESSION['nombres']; ?></h6>
                        <span>Admin</span>
                    </div>
                </div>
                <div class="navbar-nav w-100" style="color: orangered;">
                    <a href="<?php echo URLROOT; ?>Usuarios" class="nav-item nav-link active"><i class="fa fa-tachometer-alt me-2"></i>Inicio</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="bi bi-file-earmark-spreadsheet"></i>Reportes</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="<?php echo URLROOT; ?>CargueDescargueHornos/expoExcel" class="dropdown-item"><i class="bi bi-file-excel"></i>Cargue del horno</a>
                            <a href="<?php echo URLROOT; ?>DescargueHornos/expoExcel" class="dropdown-item"><i class="bi bi-file-excel"></i>Descargue del Horno</a>
                            <a href="#" class="dropdown-item"><i class="bi bi-file-excel"></i>Diario de despachos</a>
                        </div>
                    </div>
                    <a href="<?php echo URLROOT; ?>CargueDescargueHornos/Add" class="nav-item nav-link"><i class="fa fa-th me-2"></i>Nuevo cargue</a>
                    <a href="<?php echo URLROOT; ?>DiarioInventario/Add" class="nav-item nav-link"><i class="fa fa-th me-2"></i>Nuevo diario</a>
                    <a href="<?php echo URLROOT; ?>DescargueHornos/Add" class="nav-item nav-link"><i class="fa fa-th me-2"></i>Nuevo descargue</a>
                    <a href="<?php echo URLROOT; ?>Referencias/" class="nav-item nav-link"><i class="fa fa-table me-2"></i>Referencias</a>
                    <a href="<?php echo URLROOT; ?>Usuarios/registroUsuario" class="nav-item nav-link"><i class="fa fa-keyboard me-2"></i>Nuevos usuarios</a>
                    <a href="<?php echo URLROOT; ?>CargueDescargueHornos/operariosNuevos" class="nav-item nav-link"><i class="fa fa-table me-2"></i>Nuevo Personal</a>
                </div>
            </nav>
        </div>
        <!-- Sidebar End -->


        <!-- Content Start -->
        <div class="content">
            <!-- Navbar Start -->
            <nav class="navbar navbar-expand bg-light navbar-light sticky-top px-4 py-0">
                <div class="navbar-nav align-items-center ms-auto">
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <img class="rounded-circle me-lg-2" src="<?php echo URLROOT; ?>img/logoBellavista.jpg" alt="" style="width: 40px; height: 40px;">
                            <span class="d-none d-lg-inline-flex"><?php echo $_SESSION['nombres']; ?></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0 n">
                            <a href="#" class="dropdown-item">Mi Perfil</a>
                            <a href="<?php echo URLROOT; ?>Configuracion" class="dropdown-item">Configuración</a>
                            <a href="<?php echo URLROOT; ?>Login/logout" class="dropdown-item">Cerrar sesión</a>
                        </div>
                    </div>
                </div>
            </nav>
            <!-- Navbar End -->