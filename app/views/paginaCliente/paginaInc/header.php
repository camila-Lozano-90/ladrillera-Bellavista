<!doctype html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="Camila Lozano">
  <meta name="generator" content="Hugo 0.84.0">

  <link rel="icon" href="<?php echo URLROOT; ?>img/muro.png">
  <title><?php echo SITENAME; ?></title>

  <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/carousel/">



  <!-- Bootstrap core CSS -->
  <link href="<?php echo URLROOT; ?>css/bootstrap.min.css" rel="stylesheet">

  <link href="<?php echo URLROOT; ?>css/product.css" rel="stylesheet">

  <style>
    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      user-select: none;
    }

    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }
  </style>


  <!-- Custom styles for this template -->
  <link href="dashboard.css" rel="stylesheet">
</head>

<body>

<!--   <header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
    <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="#">Company name</a>
    <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
    <div class="navbar-nav">
      <div class="nav-item text-nowrap">
        <a class="nav-link px-3" href="#">Sign out</a>
      </div>
    </div>
  </header> -->
  <!-- Favicons -->
  <link rel="apple-touch-icon" href="/docs/5.0/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
  <link rel="icon" href="/docs/5.0/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
  <link rel="icon" href="/docs/5.0/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
  <link rel="manifest" href="/docs/5.0/assets/img/favicons/manifest.json">
  <link rel="mask-icon" href="/docs/5.0/assets/img/favicons/safari-pinned-tab.svg" color="#7952b3">
  <link rel="icon" href="/docs/5.0/assets/img/favicons/favicon.ico">
  <meta name="theme-color" content="#7952b3">


  <style>
    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      user-select: none;
    }

    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }
  </style>


  <!-- Custom styles for this template -->
  <link href="carousel.css" rel="stylesheet">
  <!-- Custom styles for this template -->
  <link href="starter-template.css" rel="stylesheet">
  </head>

  <body>

    <header style="margin-bottom: 2%;">
      <nav class="navbar navbar-expand-md navbar-light fixed-top bg-light">
        <!--<nav class="navbar navbar-expand-md navbar fixed-top " style="background-color: #FC3D05;">-->
        <div class="container-fluid">
          <!--<a class="navbar-brand" href="<?php #echo URLROOT; 
                                            ?>Libros/renderIndex">Inicio</a>-->
          <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav me-auto mb-2 mb-md-0">
              <img src="<?php echo URLROOT; ?>img/LogotipoLadrillera.jpeg" alt="" width="60px" height="60px">
              <!-- <h2 style="color: white;">Inicio</h2> -->
            </ul>

            <!-- Div de los links del navbar-->
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
<!--                 <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li> -->
                <li class="nav-item">
                  <a class="nav-link" href="<?php URLROOT ?>Pagina/productos">Productos</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="<?php URLROOT ?>Pagina/quienesSomos">Nosotros</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="<?php URLROOT ?>Pagina/nuestrasActividades">Nuestras actividades</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="<?php URLROOT ?>Pagina/contacto">Contáctanos</a>
                </li>
              </ul>
<!--               <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
              </form> -->
            </div>
            <!-- fin del div links-->

            <!--  PEGO EL INICIO DE SESIÓN DEL NAVBAR -->
            <div class="navbar-nav">
              <!-- <div class="nav-item text-nowrap">
                <a class="nav-link px-3" href="<?php echo URLROOT; ?>Inicio/renderLogin">Iniciar sesión</a>
              </div> -->
            </div>
          </div>




        </div>
      </nav>
    </header>