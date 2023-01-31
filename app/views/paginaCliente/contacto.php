<?php require_once APPROOT . '/views/inc/header.php'; ?>
<link rel="stylesheet" href="<?php echo URLROOT; ?>css/sweetalert2.min.css">
<script src="<?php echo URLROOT; ?>jQuery-3.6.0/jquery-3.6.0.min.js"></script>

<div class="inner-banner py-5 pb-sm-0" style="background-image: url(<?php echo URLROOT; ?>img/imagesIndex/banner2.jpg);">
    <section class="w3l-breadcrumb text-left py-sm-5 pb-0">
        <div class="container">
            <div class="w3breadcrumb-gids">
                <div class="w3breadcrumb-right">
                    <ul class="breadcrumbs-custom-path">
                        <li><a href="<?php echo URLROOT ?>Pagina">Inicio</a></li>
                        <li class="active"><span class="fas fa-angle-double-right mx-2"></span>Contáctanos</li>
                    </ul>
                </div>
            </div>

        </div>
    </section>
</div>
<!--//inner-page-->
<!-- /contact-section -->
<section class="py-5 about-main" id="contact">
    <div class="container py-md-4 py-2">
        <!--/form-->
        <div class="map-content-9 py-5" id="contact">
            <div class="map-content-9-in">
                <div class="w3-map-content-9-form">
                    <h6 class="title-subw3hny mb-2 text-center mx-auto">Llena el formulario</h6>
                    <h3 class="title-w3l mb-sm-5 mb-3 text-center">Contáctanos</h3>
                    <form action="<?php echo URLROOT; ?>Pagina/envioEmail" method="post">
                        <div class="twice-two">
                            <input type="text" class="form-control" name="nombreU" id="nombreU" placeholder="Ingrese su nombre" required="">
                            <input type="text" class="form-control" name="telefonoU" id="telefonoU" placeholder="Número telefónico" required="">
                        </div>
                        <div class="twice">
                            <input type="text" class="form-control" name="asunto" id="asunto" placeholder="Asunto" required="">
                        </div>
                        <textarea name="cuerpo" id="cuerpo" class="form-control" placeholder="Mensaje" required=""></textarea>
                        <div class="text-right">
                            <button type="submit" class="btn btn-primary btn-style mt-4 d-sm-inline d-block">Enviar mensaje<i class="fas fa-paper-plane ms-2"></i></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!--//form-->
        <div class="row cont-details">
            <div class="col-md-6 col-md-6 inn-con-phnema-gd margin-up mt-lg-5 mt-4">
                <div class="cont-top">
                    <div class="cont-left text-center">
                        <span class="fas fa-phone-alt"></span>
                    </div>
                    <div class="cont-right">
                        <h6>Más información al:</h6>
                        <p><a href="tel:+57 320 797 1318">+57 320 797 1318</a></p>
                        <p><a href="tel:+57 320 797 1327">+57 320 797 1327</a></p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-md-6 inn-con-phnema-gd margin-up mt-lg-5 mt-4">
                <div class="cont-top">
                    <div class="cont-left text-center">
                        <span class="far fa-envelope"></span>
                    </div>
                    <div class="cont-right">
                        <h6>
                            Correo:</h6>
                        <p><a href="#" class="mail">ventas@ladrillerabellavista.com</a></p>
                        <!-- <p><a href="mailto:contact@mail.com" class="mail">contact@mail.com</a></p> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="wthree-row py-5 about-main" id="contact1">
    <div class="container py-md-4 py-2">
        <div class="row getform-info">
            <div class="col-lg-6 mb-lg-0 mb-lg-5 pr-lg-5">
                <div class="title-content text-left w3l-content-6">
                    <h6 class="title-subw3hny mb-2">Recuerda</h6>
                    <h3 class="title-w3l">Mantente en contacto con nosotros.</h3>
                </div>

            </div>
            <div class="col-lg-6 pl-lg-3">
                <p class="pt-4">Inspirados en la construcción de un mañana más sólido y de la mano con nuestras políticas, valores y principios edificamos sueños a través del diseño, fabricación y comercialización de productos de arcilla, trabajando por la calidad y satisfacción de nuestros clientes.
                </p>
            </div>
        </div>
    </div>
</section>
<div class="map-iframe">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3976.205859919579!2d-75.92569088523761!3d4.734269096561501!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e386fc27bd1cc4f%3A0xf7b4f36d62c7c1d8!2sLadrillera%20Bellavista!5e0!3m2!1ses!2sco!4v1666898201401!5m2!1ses!2sco" width="100%" height="400" frameborder="0" style="border: 0px;" allowfullscreen=""></iframe>
</div>
<!-- //contact-section -->
<!-- //contact block -->
<!--/footer-9-->


<!-- <footer  style="background-color:#FF7D0E; text-align: center; padding: 1%;">
    <strong><h5 style="color: white;">¡Síguenos en nuestras redes sociales!</h5></strong>
    <div id="redesSociales">
        <a href="https://m.facebook.com/login/?locale=es_ES"><img src="<?php echo URLROOT; ?>img/facebookLOGO.png" width="40px" alt=""></a>
        <a href="https://web.whatsapp.com/"><img src="<?php echo URLROOT; ?>img/whatsappLOGO.png" width="40px" alt=""></a>
        <a href="https://www.instagram.com/"><img src="<?php echo URLROOT; ?>img/instagramLOGO.png" width="40px" alt=""></a>
        <a href="https://twitter.com/?lang=es"><img src="<?php echo URLROOT; ?>img/twitterLOGO.png" width="40px" alt=""></a>
    </div>
-->



<script src="<?php echo URLROOT; ?>DataTables-1.12.1/js/jquery.dataTables.min.js"></script>
<script src="<?php echo URLROOT; ?>js/bootstrap.bundle.min.js"></script>
<script src="<?php echo URLROOT; ?>js/prestamosAdd.js"></script>
<script src="<?php echo URLROOT; ?>js/sweetalert2.all.min.js"></script>

<?php require_once APPROOT . '/views/inc/footer.php'; ?>