<footer class="w3l-footer9">
    <section class="footer-inner-main py-5">
        <div class="container py-md-3">
            <div class="right-side">
                <div class="row footer-hny-grids sub-columns">
                    <div class="col-lg-4 sub-one-left pe-lg-5">
                        <h6>Sobre nosotros</h6>
                        <p class="footer-phny pe-lg-3">Nos esforzamos día a día por ofrecerle lo mejor de nuestra compañía a nuestros socios y clientes para construír un mañana más sólido con productos de la mejor calidad. </p>
                        <div class="columns-2 mt-lg-5 mt-4">
                            <ul class="social">
                                <li><a href="https://www.facebook.com/ladrillera.bellavista.58/"><span class="fab fa-facebook-f"></span></a>
                                </li>
                                <li><a href="#linkedin"><span class="fab fa-linkedin-in"></span></a>
                                </li>
                                <li><a href="#twitter"><span class="fab fa-twitter"></span></a>
                                </li>
                                <li><a href="#google"><span class="fab fa-google-plus-g"></span></a>
                                </li>

                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2 sub-two-right">
                        <h6>Enlaces útiles</h6>
                        <ul>
                            <li><a href="<?php echo URLROOT ?>Pagina">Inicio</a>
                            </li>
                            <li><a href="<?php echo URLROOT; ?>Pagina/quienesSomos">Sobre nosotros</a>
                            </li>

                            <li><a href="<?php echo URLROOT; ?>Pagina/productos">Productos</a>
                            </li>

                            <li><a href="#blog">Blog</a>
                            </li>
                            <li><a href="<?php echo URLROOT; ?>Pagina/contacto">Contacto</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-2 sub-two-right">
                        <h6>Compañía</h6>
                        <ul>

                            <li><a href='mailto:ventas@ladrillerabellavista.com'>Trabaja con nosotros
                                </a></li>
<!--                             <li><a href="#licence">Prompt Delivery
                                </a></li>
                            <li><a href="#log">Offers
                                </a></li>
                            <li><a href="#log">Reliable Equipment
                                </a></li>
                            <li><a href="#career">Careers
                                </a></li> -->

                        </ul>
                    </div>
                    <div class="col-lg-4 sub-one-left">
                        <h6>Twitter Feed</h6>
                        <ul>
                            <li class="w3tweet-holder-grids">
                                <div class="w3-twitter-icon"><i class="fab fa-twitter"></i></div>
                                <div class="w3tweet-text">
                                    <a target="_blank" href="#">@Honynilf</a> Hi <a target="_blank" href="#">@Honynilf</a> , can you please submit a ticket at <a target="_blank" href="#">https://v.co/ij123A34J45A</a> and one of our support agent… <a target="_blank" href="#">https://v.co/ij123A34J45A</a> <a class="w3tweet-time" target="_blank" href="#">
                                        1 year ago </a>
                                </div>
                            </li>
                            <li class="w3tweet-holder-grids">
                                <div class="w3-twitter-icon"><i class="fab fa-twitter"></i></div>
                                <div class="w3tweet-text">
                                    <a target="_blank" href="#">@Honynilf</a> Hi <a target="_blank" href="#">@Honynilf</a> , can you please submit a ticket at <a target="_blank" href="#">https://v.co/ij123A34J45A</a> and one of our support agent… <a target="_blank" href="#">https://v.co/ij123A34J45A</a> <a class="w3tweet-time" target="_blank" href="#">
                                        2 year ago </a>
                                </div>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
            <div class="below-section mt-5">
                <div class="copyright-footer">
                    <div class="columns text-left">
                        <p>© 2022 Inversiones Bellavista S.A.S. Todos los derechos reservados | Desarrollado por <a href="https://w3layouts.com" target="_blank">Camila lozano</a>
                        </p>
                    </div>
                    <ul class="footer-w3list text-right">
                        <li><a href="#url">Política de privacidad</a>
                        </li>
                        <li><a href="#url">Términos &amp; Condiciones</a>
                        </li>
                    </ul>
                </div>

            </div>
        </div>
    </section>

    <!-- Js scripts -->
    <!-- move top -->
    <button onclick="topFunction()" id="movetop" title="Go to top">
        <span class="fas fa-level-up-alt" aria-hidden="true"></span>
    </button>
    <script>
        // When the user scrolls down 20px from the top of the document, show the button
        window.onscroll = function() {
            scrollFunction()
        };

        function scrollFunction() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                document.getElementById("movetop").style.display = "block";
            } else {
                document.getElementById("movetop").style.display = "none";
            }
        }

        // When the user clicks on the button, scroll to the top of the document
        function topFunction() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        }
    </script>
    <!-- //move top -->
</footer>
<!--//footer-9 -->

<!-- Template JavaScript -->
<script src="<?php echo URLROOT; ?>js/jquery-3.3.1.min.js"></script>
<script src="<?php echo URLROOT; ?>js/theme-change.js"></script>
<!-- MENU-JS -->
<script>
    $(window).on("scroll", function() {
        var scroll = $(window).scrollTop();

        if (scroll >= 80) {
            $("#site-header").addClass("nav-fixed");
        } else {
            $("#site-header").removeClass("nav-fixed");
        }
    });

    //Main navigation Active Class Add Remove
    $(".navbar-toggler").on("click", function() {
        $("header").toggleClass("active");
    });
    $(document).on("ready", function() {
        if ($(window).width() > 991) {
            $("header").removeClass("active");
        }
        $(window).on("resize", function() {
            if ($(window).width() > 991) {
                $("header").removeClass("active");
            }
        });
    });
</script>
<!-- //MENU-JS -->

<!-- disable body scroll which navbar is in active -->
<script>
    $(function() {
        $('.navbar-toggler').click(function() {
            $('body').toggleClass('noscroll');
        })
    });
</script>
<!-- //disable body scroll which navbar is in active -->
<!-- //bootstrap -->
<script src="<?php echo URLROOT; ?>js/bootstrap.min.js"></script>

</body>
<script src="<?php echo URLROOT; ?>jQuery-3.6.0/jquery-3.6.0.min.js"></script>
<script src="<?php echo URLROOT; ?>js/bootstrap.bundle.min.js"></script>
<script src="<?php echo URLROOT; ?>js/mostrarAnimaciones.js"></script>
<script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script>
<!-- <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script> -->
<!-- <script src="<?php echo URLROOT; ?>js/dashboard.js"></script> -->

</html>