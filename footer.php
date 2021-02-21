<footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="footer_info">
                        <div class="footer_addres">
                            <i class="fa fa-map-marker"></i>
                            <p>11860 FM 306<br>New Braunfels, TX 78132</p>
                        </div>
                        <div class="footer_addres">
                            <i class="fa fa-mobile"></i>
                            <p>830.964.3800</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="footer_menu">
                    <?php wp_nav_menu( [
	                               'theme_location'  => 'bottom',
	                               'container'       => false, 
	                               'menu_class'      => '', 
	                               'menu_id'         => '',
                                 ] ); ?>
                    </div>
                    <p class="Copyright">© 2016 WhiteWater Amphitheater</p>
                </div>
            </div>
        </div>
    </footer>
    <?php wp_footer(); ?>
</body>

</html>