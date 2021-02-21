<footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                      <?php if (get_theme_mod('basic-info-callout-display') == 'Yes') { ?>
                    <div class="footer_info">
                        <div class="footer_addres">
                            <i class="fa fa-map-marker"></i>
                            <?php $infoText = get_theme_mod('basic-info-callout-text'); if ($infoText != '') {  echo wpautop($infoText);
                }   else{   echo "";  }      ?>
                        </div>
                        <div class="footer_addres">
                            <i class="fa fa-mobile"></i>
                            <?php $infoText = get_theme_mod('basic-info-callout-number'); if ($infoText != '') {  echo wpautop($infoText);
                }   else{   echo "";  }      ?>
                        </div>
                    </div>
                   <?php } ?>
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
                    <?php if (get_theme_mod('basic-footer-callout-display') == 'Yes') { ?>
                    <div class="Copyright"><?php $copyrightText = get_theme_mod('basic-footer-callout-copyright');
                  if ($copyrightText != '') {
                echo wpautop($copyrightText);
                   }      else     {
                     echo "";
                   }
                   ?></div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </footer>
    <?php wp_footer(); ?>
</body>

</html>