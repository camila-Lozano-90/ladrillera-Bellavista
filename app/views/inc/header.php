<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="<?php echo URLROOT; ?>img/LogotipoLadrillera.png">
    <title><?php echo SITENAME; ?></title>
    <!--/google-fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Sarabun:ital,wght@0,400;0,600;0,700;0,800;1,600&display=swap" rel="stylesheet">
    <!--//google-fonts -->
    <!--/Template-CSS -->
    <link rel="stylesheet" href="<?php echo URLROOT; ?>css/style-starter.css">
    <!--//Template-CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
</head>

<body onload="Init()">

    <!-- top header -->
    <section class="w3l-top-header py-3">
        <div class="container">
            <div class="d-grid main-top">
                <div class="top-header-left">
                    <ul class="info-top-gridshny">
                        <li class="info-grid">
                        <div class="info-icon"><span class="far fa-clock"></span></div>
                            <div class="info-text">

                        <p name="h1" id="h1"><?php echo "Lunes - Viernes ".$valor->{'horarioApertura'}; ?></p>
                                <p name="h2" id="h2"></p>
                            </div>
                        </li>

                        <script type="text/javascript">
                            
                            const URLROOT = "http://localhost/ProyectoBellavista/";

                            let h1 = document.getElementById("h1");
                            let h2 = document.getElementById("h2");

                            function Init(){
                                cargarH1();
                                cargarH2();
                                cargarTel1();
                                //cargarTel2();
                            }
                            // para visualizar los horarios desde la bd 
                            function cargarH1() {
                                fetch(URLROOT + "Configuracion/semana")
                                    .then(function(response) {
                                        return response.json();
                                    })
                                    .then(function(datos) {

                                        for (var i = 0; i < datos.length; i++) {
                                            t1 = "Lunes - Viernes ";
                                            t2 = datos[i].horarioApertura;
                                            t3 = " - ";
                                            t4 = datos[i].horarioCierre;
                                            h1.textContent = t1 + t2 + t3 + t4;
                                        }

                                    })
                            }
                            // para visualizar los horarios desde la bd 
                            function cargarH2(){
                                fetch(URLROOT + "Configuracion/finde")
                                .then(function(response) {
                                    return response.json();
                                })
                                .then(function(datos) {

                                    for (var i = 0; i < datos.length; i++) {
                                        t1 = "Sábado - ";
                                        t2 = datos[i].horarioApertura;
                                        t3 = " - ";
                                        t4 = datos[i].horarioCierre;
                                        h2.textContent = t1 + t2 + t3 + t4;
                                    }

                                })
                            }
                        </script>
                        <li class="info-grid">
                            <div class="info-icon"><span class="fas fa-phone-alt"></span></div>
                            <div class="info-text">
                                <p id="tel1" name="tel1"></p>
                                <p id="tel2" name="tel2"></p>
                            </div>
                        </li>
                        <script type="text/javascript">
                            let tel1 = document.getElementById("tel1");
                            //let tel2 = document.getElementById("tel2");

                            function cargarTel1() {
                                fetch(URLROOT + "Configuracion/telefonos")
                                    .then(function(response) {
                                        return response.json();
                                    })
                                    .then(function(datos) {
                                        
                                        for (var i = 0; i < datos.length; i++) {
                                            tel1.innerHTML = `<a href="tel:+57 ${datos[0].numero}">+57 ${datos[0].numero}</a>`;
                                            tel2.innerHTML = `<a href="tel:+57 ${datos[1].numero}">+57 ${datos[1].numero}</a>`;
                                        }

                                    })
                            }
                        </script>


                        <li class="info-grid">
                            <div class="info-icon"><span class="fas fa-map-marker-alt"></span></div>
                            <div class="info-text">
                                <p>Carretera cucharalarga vía la Julia</p>
                                <p>Cartago - Valle del Cauca</p>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="top-header-right text-lg-right">
                    <ul>
                        <li>
                            <a href="https://www.facebook.com/ladrillera.bellavista.58/"><span class="fab fa-facebook-f"></span></a>
                        </li>
                        <li>
                            <a href="#twitter"><span class="fab fa-twitter"></span></a>



                        <li><a href="https://www.instagram.com/ladrillerabella12/" class="instagram mr-0"><span class="fab fa-instagram"></span></a></li>

                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- //top header -->

    <!--/Header-->
    <header id="site-header" style="background-image:<?php echo URLROOT ?>img/imagesIndex/banner4.jpg;" class="">
        <div class="container" style="background-image:<?php echo URLROOT ?>img/imagesIndex/banner4.jpg;">
            <nav class="navbar navbar-expand-lg navbar-light stroke py-lg-0">
                <ul class="navbar-nav me-auto mb-2 mb-md-0">
                    <a href="<?php echo URLROOT ?>Pagina"><img src="<?php echo URLROOT; ?>img/LogotipoLadrillera.png" alt="" width="90px" height="90px"></a>
                    <!-- <h2 style="color: white;">Inicio</h2> -->
                </ul>
                <h1><a class="navbar-brand pe-xl-5 pe-lg-4" href="<?php echo URLROOT ?>Pagina">
                        Ladrillera Bellavista
                    </a></h1>
                <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon fa icon-expand fa-bars"></span>
                    <span class="navbar-toggler-icon fa icon-close fa-times"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarScroll">
                    <ul class="navbar-nav ms-lg-auto my-2 my-lg-0 navbar-nav-scroll">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="<?php echo URLROOT; ?>Pagina">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo URLROOT; ?>Pagina/quienesSomos">Sobre Nosotros</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo URLROOT; ?>Pagina/productos">Productos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo URLROOT; ?>Pagina/contacto">Contáctanos</a>
                        </li>

                    </ul>
                    <div>
                        <a style="background-color: #FF6800; color: #ffffff;" class="btn" href="<?php echo URLROOT; ?>Login">Iniciar sesión</a>
                    </div>
                </div>
                <!-- toggle switch for light and dark theme -->
                <div class="mobile-position">
                    <nav class="navigation">
                        <div class="theme-switch-wrapper">
                            <label class="theme-switch" for="checkbox">
                                <input type="checkbox" id="checkbox">
                                <div class="mode-container">
                                    <i class="gg-sun"></i>
                                    <i class="gg-moon"></i>
                                </div>
                            </label>
                        </div>
                    </nav>
                </div>
                <!-- //toggle switch for light and dark theme -->
            </nav>
        </div>
    </header>