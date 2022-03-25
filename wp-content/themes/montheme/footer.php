<!-- ======= Footer ======= -->
<footer id="footer">
    <div class="footer-top">
        <div class="container">
            <div class="row">

                <div class="col-lg-4 col-md-6">
                    <div class="footer-info">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/zeleconceptwhite.png" alt="Logo" id="logo-white" />
                        <div class="address">
                            <span> <i class="bi bi-geo-alt"></i></span>

                            <p>Brusselstraat 338 2</p>
                            <p>B-1702 Grand-Bigard</p>
                        </div>
                        <!--
              <div class="social-links mt-3">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
              </div>
-->
                    </div>
                </div>


                <div class="col-lg-4 col-md-6 footer-links">
                    <h3>Nos services</h3>
                    <?php
                    wp_nav_menu(array(
                        'theme_location' => 'footer',
                        'container' => false,
                        'menu_class' => '',
                        'fallback_cb' => '__return_false',
                        'items_wrap' => '<ul id="%1$s" class="navbar-nav link-footer mb-md-0 %2$s">%3$s</ul>',
                        'depth' => 2,
                        'walker' => new bootstrap_5_wp_nav_menu_walker()
                    ));
                    ?>
                </div>

                <div class="col-lg-4 col-md-6 footer-newsletter">
                    <h3>Nous contacter</h3>
                    <div class="address">
                        <span> <i class="bi bi-at"></i></span>


                        <p class="mail justify-content-center align-items-center"><a href="mailto: info@zeleconcept.be">info@zeleconcept.be</a></p>
                    </div>
                    <div class="address">
                        <span> <i class="bi bi-phone"></i></span>


                        <p class="phone justify-content-center align-items-center"><a href="mailto: info@zeleconcept.be">info@zeleconcept.be</a></p>
                    </div>

                </div>

            </div>
        </div>
    </div>

    <div class="container">
        <div class="copyright">
            &copy; Copyright <strong><span>ZELE CONCEPT BV - 2022</span></strong>. All Rights Reserved
        </div>

    </div>
</footer><!-- End Footer -->


</div>
<?php
wp_footer();
?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://unpkg.com/splitting/dist/splitting.min.js"></script>
<script src="https://unpkg.com/scroll-out/dist/scroll-out.min.js"></script>
<script src="wp-content\themes\montheme\particles.js-master\particles.js">
</script>
<script src="wp-content\themes\montheme\particles.js-master\demo\js\app.js">
</script>
<script>
    Splitting();
</script>
<script>
    ScrollOut({
        targets: ".banner",
        threshold: 0.2,
        once: false
    });
</script>
<script>
    /* particlesJS.load(@dom-id, @path-json, @callback (optional)); */
    particlesJS.load('particles-js', 'wp-content/themes/montheme/particles.js-master/demo/particles.json', function() {
        console.log('callback - particles.js config loaded');
    });
</script>
<script src="wp-content\themes\montheme\script.js"></script>
</body>

</html>