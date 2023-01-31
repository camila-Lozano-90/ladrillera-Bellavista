<?php require_once APPROOT . '/views/inc/header.php'; ?>
<script src="<?php echo URLROOT; ?>jQuery-3.6.0/jquery-3.6.0.min.js"></script>

<div class="inner-banner py-5 pb-sm-0" style="background-image: url(<?php echo URLROOT; ?>img/imagesIndex/banner2.jpg);">
	<section class="w3l-breadcrumb text-left py-sm-5 pb-0">
		<div class="container">
			<div class="w3breadcrumb-gids">
				<div class="w3breadcrumb-right">
					<ul class="breadcrumbs-custom-path">
						<li><a href="<?php echo URLROOT ?>Pagina">Inicio</a></li>
						<li class="active"><span class="fas fa-angle-double-right mx-2"></span>Productos</li>
					</ul>
				</div>
			</div>
		</div>
	</section>
</div>


<link href="<?php echo URLROOT; ?>css/price-range.css" rel="stylesheet">
<link href="<?php echo URLROOT; ?>..css/animate.css" rel="stylesheet">
<link href="<?php echo URLROOT; ?>css/main.css" rel="stylesheet">
<link href="<?php echo URLROOT; ?>css/responsive.css" rel="stylesheet">
<!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
<link rel="shortcut icon" href="images/ico/favicon.ico">
<link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
<link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">

<script type="application/x-javascript">
	addEventListener("load", function() {
		setTimeout(hideURLbar, 0);
	}, false);

	function hideURLbar() {
		window.scrollTo(0, 1);
	}
</script>



<div id="carouselExampleDark" style="height: 10%;" class="carousel carousel-dark slide" data-bs-ride="carousel">
	<div class="carousel-indicators">
		<button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
		<button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
		<button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
	</div>
	<div class="carousel-inner">
		<div class="carousel-item active" data-bs-interval="5000">
			<img src="<?php echo URLROOT; ?>img/ladrillo liso-PhotoRoom.png" style="padding-left: 25%;" alt="...">
			<div class="carousel-caption d-none d-md-block" style="padding-left: 35%;padding-bottom:5%;">
				<h4>Ladrillo Farol Liso</h4>
				<h5>Referencia:<p>10x20x30</p>
				</h5>
				<h5>Peso:<p>4.4 Kg Aprox.</p>
				</h5>
				<h5>Rendimiento:<p>15,5 U/M2</p>
				</h5>
				<!-- <p>Trabajamos para construir un mañana más sólido.</p> -->
			</div>
		</div>
		<div class="carousel-item" data-bs-interval="5000">
			<img src="<?php echo URLROOT; ?>img/7 DV-PhotoRoom (1).png" style="padding-left: 25%;" alt="...">
			<div class="carousel-caption d-none d-md-block" style="padding-left: 35%;padding-bottom:5%;">
				<h4>Ladrillo Divisorio</h4>
				<h5>Referencia:<p>7x20x30</p>
				</h5>
				<h5>Peso:<p>3.4 Kg Aprox.</p>
				</h5>
				<h5>Rendimiento:<p>15,5 U/M2</p>
				</h5>
				<!-- <p>Constribuimos para construir el sueño de miles de familias colombianas.</p> -->
			</div>
		</div>
		<div class="carousel-item" data-bs-interval="5000">
			<img src="<?php echo URLROOT; ?>img/ladrillo rayado-PhotoRoom.png" style="padding-left: 25%;" alt="...">
			<div class="carousel-caption d-none d-md-block" style="padding-left: 35%;padding-bottom:5%;">
				<h5>Referencia:<p>10x20x30</p>
				</h5>
				<h5>Peso:<p>4.0 Kg Aprox.</p>
				</h5>
				<h5>Rendimiento:<p>15,5 U/M2</p>
				</h5>
				<!-- <p>Estamos siempre en el mejoramiento continuo de nuestros productos y procesos, garantizando un desarrollo permanente de los colaboradores, comprometidos con su seguridad, salud y el medio ambiente</p> -->
			</div>
		</div>
	</div>
	<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
		<span class="carousel-control-prev-icon" aria-hidden="true"></span>
		<span class="visually-hidden">Anterior</span>
	</button>
	<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
		<span class="carousel-control-next-icon" aria-hidden="true"></span>
		<span class="visually-hidden">Siguiente</span>
	</button>
</div>

<div class="btn-group" role="group" aria-label="Basic example">
	<button type="button" class="btn" style="background-color: #FF6800; color: white;">Left</button>
	<button type="button" class="btn" style="background-color: #FF6800; color: white;">Middle</button>
	<button type="button" class="btn" style="background-color: #FF6800; color: white;">Right</button>
</div>

<div class="container text-center">
	<div class="row align-items-center">
		<div class="col-sm-4">
			<div class="product-image-wrapper">
				<div class="single-products">
					<div class="productinfo text-center">
						<img src="<?php echo URLROOT; ?>img/ladrillo liso-PhotoRoom.png" alt="" />
						<h2>Ladrillo Farol Liso</h2>
						<h3 style="color:black;">10x20x30</h3>
						<a href="https://api.whatsapp.com/send?phone=+573207971327&text=Hola, Necesito más información acerca del producto" style="background-color: #FF6800;color: white;" class="btn btn-default add-to-cart"><i class="bi bi-whatsapp"></i></i>Asesórate</a>
					</div>
					<div class="product-overlay">
						<div class="overlay-content">
							<h2>Ladrillo Farol Liso</h2>
							<p>10x20x30</p>
							<p>4.4 Kg Aprox.</p>
							<a href="https://api.whatsapp.com/send?phone=+573207971327&text=Hola, Necesito más información acerca del producto" class="btn btn-default add-to-cart"><i class="bi bi-whatsapp"></i></i>Asesórate</a>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="col-sm-4">
			<div class="product-image-wrapper">
				<div class="single-products">
					<div class="productinfo text-center">
						<img src="<?php echo URLROOT; ?>img/7 DV-PhotoRoom (1).png" alt="" />
						<h2>Ladrillo Divisorio</h2>
						<h3 style="color:black;">7x20x30</h3>
						<a href="https://api.whatsapp.com/send?phone=+573207971327&text=Hola, Necesito más información acerca del producto" style="background-color: #FF6800;color: white;" class="btn btn-default add-to-cart"><i class="bi bi-whatsapp"></i>Asesórate</a>
					</div>
					<div class="product-overlay">
						<div class="overlay-content">
							<h2>Ladrillo Divisorio</h2>
							<p>7x20x30</p>
							<p>3.4 Kg Aprox.</p>
							<a href="https://api.whatsapp.com/send?phone=+573207971327&text=Hola, Necesito más información acerca del producto" class="btn btn-default add-to-cart"><i class="bi bi-whatsapp"></i>Asesórate</a>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="col-sm-4">
			<div class="product-image-wrapper">
				<div class="single-products">
					<div class="productinfo text-center">
						<img src="<?php echo URLROOT; ?>img/ladrillo rayado-PhotoRoom.png" alt="" />
						<h2>Ladrillo Farol Rayado</h2>
						<h3 style="color:black;">10x20x30</h3>
						<a href="https://api.whatsapp.com/send?phone=+573207971327&text=Hola, Necesito más información acerca del producto" style="background-color: #FF6800;color: white;" class="btn btn-default add-to-cart"><i class="bi bi-whatsapp"></i>Asesórate</a>
					</div>
					<div class="product-overlay">
						<div class="overlay-content">
							<h2>Ladrillo Farol Rayado</h2>
							<p>10x20x30</p>
							<p>4.0 Kg Aprox.</p>
							<a href="https://api.whatsapp.com/send?phone=+573207971327&text=Hola, Necesito más información acerca del producto" class="btn btn-default add-to-cart"><i class="bi bi-whatsapp"></i>Asesórate</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="row align-items-center">
		<div class="col-sm-4">
			<div class="product-image-wrapper">
				<div class="single-products">
					<div class="productinfo text-center">
						<img src="<?php echo URLROOT; ?>img/ladrillo liso-PhotoRoom.png" alt="" />
						<h2>Ladrillo Farol Liso</h2>
						<h3 style="color:black;">10x20x30</h3>
						<a href="https://api.whatsapp.com/send?phone=+573207971327&text=Hola, Necesito más información acerca del producto" style="background-color: #FF6800;color: white;" class="btn btn-default add-to-cart"><i class="bi bi-whatsapp"></i></i>Asesórate</a>
					</div>
					<div class="product-overlay">
						<div class="overlay-content">
							<h2>Ladrillo Farol Liso</h2>
							<p>10x20x30</p>
							<p>4.4 Kg Aprox.</p>
							<a href="https://api.whatsapp.com/send?phone=+573207971327&text=Hola, Necesito más información acerca del producto" class="btn btn-default add-to-cart"><i class="bi bi-whatsapp"></i></i>Asesórate</a>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="col-sm-4">
			<div class="product-image-wrapper">
				<div class="single-products">
					<div class="productinfo text-center">
						<img src="<?php echo URLROOT; ?>img/7 DV-PhotoRoom (1).png" alt="" />
						<h2>Ladrillo Divisorio</h2>
						<h3 style="color:black;">7x20x30</h3>
						<a href="https://api.whatsapp.com/send?phone=+573207971327&text=Hola, Necesito más información acerca del producto" style="background-color: #FF6800;color: white;" class="btn btn-default add-to-cart"><i class="bi bi-whatsapp"></i>Asesórate</a>
					</div>
					<div class="product-overlay">
						<div class="overlay-content">
							<h2>Ladrillo Divisorio</h2>
							<p>7x20x30</p>
							<p>3.4 Kg Aprox.</p>
							<a href="https://api.whatsapp.com/send?phone=+573207971327&text=Hola, Necesito más información acerca del producto" class="btn btn-default add-to-cart"><i class="bi bi-whatsapp"></i>Asesórate</a>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="col-sm-4">
			<div class="product-image-wrapper">
				<div class="single-products">
					<div class="productinfo text-center">
						<img src="<?php echo URLROOT; ?>img/ladrillo rayado-PhotoRoom.png" alt="" />
						<h2>Ladrillo Farol Rayado</h2>
						<h3 style="color:black;">10x20x30</h3>
						<a href="https://api.whatsapp.com/send?phone=+573207971327&text=Hola, Necesito más información acerca del producto" style="background-color: #FF6800;color: white;" class="btn btn-default add-to-cart"><i class="bi bi-whatsapp"></i>Asesórate</a>
					</div>
					<div class="product-overlay">
						<div class="overlay-content">
							<h2>Ladrillo Farol Rayado</h2>
							<p>10x20x30</p>
							<p>4.0 Kg Aprox.</p>
							<a href="https://api.whatsapp.com/send?phone=+573207971327&text=Hola, Necesito más información acerca del producto" class="btn btn-default add-to-cart"><i class="bi bi-whatsapp"></i>Asesórate</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="row align-items-center">
		<div class="col-sm-4">
			<div class="product-image-wrapper">
				<div class="single-products">
					<div class="productinfo text-center">
						<img src="<?php echo URLROOT; ?>img/ladrillo liso-PhotoRoom.png" alt="" />
						<h2>Ladrillo Farol Liso</h2>
						<h3 style="color:black;">10x20x30</h3>
						<a href="https://api.whatsapp.com/send?phone=+573207971327&text=Hola, Necesito más información acerca del producto" style="background-color: #FF6800;color: white;" class="btn btn-default add-to-cart"><i class="bi bi-whatsapp"></i></i>Asesórate</a>
					</div>
					<div class="product-overlay">
						<div class="overlay-content">
							<h2>Ladrillo Farol Liso</h2>
							<p>10x20x30</p>
							<p>4.4 Kg Aprox.</p>
							<a href="https://api.whatsapp.com/send?phone=+573207971327&text=Hola, Necesito más información acerca del producto" class="btn btn-default add-to-cart"><i class="bi bi-whatsapp"></i></i>Asesórate</a>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="col-sm-4">
			<div class="product-image-wrapper">
				<div class="single-products">
					<div class="productinfo text-center">
						<img src="<?php echo URLROOT; ?>img/7 DV-PhotoRoom (1).png" alt="" />
						<h2>Ladrillo Divisorio</h2>
						<h3 style="color:black;">7x20x30</h3>
						<a href="https://api.whatsapp.com/send?phone=+573207971327&text=Hola, Necesito más información acerca del producto" style="background-color: #FF6800;color: white;" class="btn btn-default add-to-cart"><i class="bi bi-whatsapp"></i>Asesórate</a>
					</div>
					<div class="product-overlay">
						<div class="overlay-content">
							<h2>Ladrillo Divisorio</h2>
							<p>7x20x30</p>
							<p>3.4 Kg Aprox.</p>
							<a href="https://api.whatsapp.com/send?phone=+573207971327&text=Hola, Necesito más información acerca del producto" class="btn btn-default add-to-cart"><i class="bi bi-whatsapp"></i>Asesórate</a>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="col-sm-4">
			<div class="product-image-wrapper">
				<div class="single-products">
					<div class="productinfo text-center">
						<img src="<?php echo URLROOT; ?>img/ladrillo rayado-PhotoRoom.png" alt="" />
						<h2>Ladrillo Farol Rayado</h2>
						<h3 style="color:black;">10x20x30</h3>
						<a href="https://api.whatsapp.com/send?phone=+573207971327&text=Hola, Necesito más información acerca del producto" style="background-color: #FF6800;color: white;" class="btn btn-default add-to-cart"><i class="bi bi-whatsapp"></i>Asesórate</a>
					</div>
					<div class="product-overlay">
						<div class="overlay-content">
							<h2>Ladrillo Farol Rayado</h2>
							<p>10x20x30</p>
							<p>4.0 Kg Aprox.</p>
							<a href="https://api.whatsapp.com/send?phone=+573207971327&text=Hola, Necesito más información acerca del producto" class="btn btn-default add-to-cart"><i class="bi bi-whatsapp"></i>Asesórate</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="row align-items-center">
		<div class="col-sm-4">
			<div class="product-image-wrapper">
				<div class="single-products">
					<div class="productinfo text-center">
						<img src="<?php echo URLROOT; ?>img/ladrillo liso-PhotoRoom.png" alt="" />
						<h2>Ladrillo Farol Liso</h2>
						<h3 style="color:black;">10x20x30</h3>
						<a href="https://api.whatsapp.com/send?phone=+573207971327&text=Hola, Necesito más información acerca del producto" style="background-color: #FF6800;color: white;" class="btn btn-default add-to-cart"><i class="bi bi-whatsapp"></i></i>Asesórate</a>
					</div>
					<div class="product-overlay">
						<div class="overlay-content">
							<h2>Ladrillo Farol Liso</h2>
							<p>10x20x30</p>
							<p>4.4 Kg Aprox.</p>
							<a href="https://api.whatsapp.com/send?phone=+573207971327&text=Hola, Necesito más información acerca del producto" class="btn btn-default add-to-cart"><i class="bi bi-whatsapp"></i></i>Asesórate</a>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="col-sm-4">
			<div class="product-image-wrapper">
				<div class="single-products">
					<div class="productinfo text-center">
						<img src="<?php echo URLROOT; ?>img/7 DV-PhotoRoom (1).png" alt="" />
						<h2>Ladrillo Divisorio</h2>
						<h3 style="color:black;">7x20x30</h3>
						<a href="https://api.whatsapp.com/send?phone=+573207971327&text=Hola, Necesito más información acerca del producto" style="background-color: #FF6800;color: white;" class="btn btn-default add-to-cart"><i class="bi bi-whatsapp"></i>Asesórate</a>
					</div>
					<div class="product-overlay">
						<div class="overlay-content">
							<h2>Ladrillo Divisorio</h2>
							<p>7x20x30</p>
							<p>3.4 Kg Aprox.</p>
							<a href="https://api.whatsapp.com/send?phone=+573207971327&text=Hola, Necesito más información acerca del producto" class="btn btn-default add-to-cart"><i class="bi bi-whatsapp"></i>Asesórate</a>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="col-sm-4">
			<div class="product-image-wrapper">
				<div class="single-products">
					<div class="productinfo text-center">
						<img src="<?php echo URLROOT; ?>img/ladrillo rayado-PhotoRoom.png" alt="" />
						<h2>Ladrillo Farol Rayado</h2>
						<h3 style="color:black;">10x20x30</h3>
						<a href="https://api.whatsapp.com/send?phone=+573207971327&text=Hola, Necesito más información acerca del producto" style="background-color: #FF6800;color: white;" class="btn btn-default add-to-cart"><i class="bi bi-whatsapp"></i>Asesórate</a>
					</div>
					<div class="product-overlay">
						<div class="overlay-content">
							<h2>Ladrillo Farol Rayado</h2>
							<p>10x20x30</p>
							<p>4.0 Kg Aprox.</p>
							<a href="https://api.whatsapp.com/send?phone=+573207971327&text=Hola, Necesito más información acerca del producto" class="btn btn-default add-to-cart"><i class="bi bi-whatsapp"></i>Asesórate</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="row align-items-end">
		<div class="col">
			One of three columns
		</div>
		<div class="col">
			One of three columns
		</div>
		<div class="col">
			One of three columns
		</div>
	</div>
</div>

<script type="text/javascript">
	$(document).ready(function() {

		if (window.innerWidth < 768) {
			$('.btn').addClass('btn-sm');
		}

		// Medida por defecto (Sin ningún nombre de clase)
		else if (window.innerWidth < 900) {
			$('.btn').removeClass('btn-sm');
		}

		// Si el ancho del navegador es menor a 1200 px le asigno la clase 'btn-lg' 
		else if (window.innerWidth < 1200) {
			$('.btn').addClass('btn-lg');
		}

	});
</script>
<?php require_once APPROOT . '/views/inc/footer.php'; ?>