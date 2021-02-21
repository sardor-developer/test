<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php wp_head(); ?>
</head>

<body>
    <!-- Top Header -->
    <?php if (get_theme_mod('basic-info-callout-display') == 'Yes') { ?>
    <div class="container">
        <div class="top_header">
            <div class="top_headerrr top_header_left">
                <div class="top_info">
                    <div class="top_info_addres">
                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                        <?php $infoText = get_theme_mod('basic-info-callout-text'); if ($infoText != '') {  echo wpautop($infoText);
                }   else{   echo "";  }      ?>
                    </div>
                    <div class="top_info_addres">
                        <i class="fa fa-mobile" aria-hidden="true"></i>
            <?php $infoText = get_theme_mod('basic-info-callout-number'); if ($infoText != '') {  echo wpautop($infoText);
                }   else{   echo "";  }      ?>
                    </div>
                </div>
            </div>
            <?php } ?>
            <div class="top_headerrr top_header_center">
                <a class="navbar-brand" href="#"><?php the_custom_logo();  ?></a>
            </div>
            <div class="top_headerrr top_header_right">
            <?php if (get_theme_mod('basic-social-callout-display') == 'Yes') { ?>
                <div class="social_icon_top">
                    <h5><?php $socialText = get_theme_mod('basic-social-callout-text');
                  if ($socialText != '') {
                echo wpautop($socialText);
                   }      else     {
                     echo "";
                   }
                   ?></h5>
                    <?php get_template_part( '/inc/social', 'social' );  if(have_posts()) {  while(have_posts()) : the_post();  endwhile;  } ?>
                </div>
                <?php } ?>
            </div>
        </div>
    </div>
    <!--  Top Header End -->
    <!-- Header -->
    <header class="header-style-two">
		<div class="header-wrapper">
			<div class="header-navigation-area two-layers-header">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
                            <?php the_custom_logo();  ?>
							<div class="mobile-menu-right"></div>
							<div class="main-menu f-right">
								<nav id="mobile-menu-right">
                                <?php wp_nav_menu( [
	                               'theme_location'  => 'top',
	                               'container'       => false, 
	                               'menu_class'      => 'nav', 
	                               'menu_id'         => 'nav',
                                 ] ); ?>
								</nav>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>
    <!--  Header End -->
    
   
 




  

 

