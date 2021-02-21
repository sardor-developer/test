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
    <div class="container">
        <div class="top_header">
            <div class="top_headerrr top_header_left">
                <div class="top_info">
                    <div class="top_info_addres">
                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                        <p>11860 FM 306<br> New Braunfels, TX 78132</p>
                    </div>
                    <div class="top_info_addres">
                        <i class="fa fa-mobile" aria-hidden="true"></i>
                        <p>830.964.3800 </p>
                    </div>
                </div>
            </div>

            <div class="top_headerrr top_header_center">
                <a class="navbar-brand" href="#"><?php the_custom_logo();  ?></a>
            </div>
            <div class="top_headerrr top_header_right">
                <div class="social_icon_top">
                    <h5>Follow us:</h5>
                    <ul>
                        <li>
                            <a href="#"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-youtube-play"></i></a>
                        </li>
                    </ul>
                </div>
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
    
   
 




  

 

