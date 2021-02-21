<?php get_header(); ?>
    <!-- Header Slider -->
    <section class="header_slider">
        <div class="container">
            <div class="slider_main">
            <?php $slider = new WP_Query(array('post_type' => 'slider' ,'posts_per_page' => -1)); ?>
                <?php if ($slider->have_posts()) : while ($slider->have_posts()) : $slider->the_post();  ?>
                <div class="slider_item">
                <?php the_post_thumbnail(); ?>
                    <div class="slider_text">
                        <h4 class="wow bounceInLeft" data-wow-delay="100ms"><?php the_title(); ?></h4>
                        <p class="wow fadeInUp" data-wow-delay="200ms"><span><?php the_time( 'D, M, j ' ); ?></span> -   <?php the_field('text1'); ?></p>
                        <a href="<?php the_permalink(); ?>" class="btn slider_btn_tickets wow fadeInUp" data-wow-delay="500ms"><img src="http://test.ninito.uz/wp-content/uploads/2021/02/ticket.png" alt="">Get
                            Tickets</a>
                    </div>
                </div>
                <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    </section>
    <!--  Header Slider End -->
  <!-- Upcoming_shows -->
    <section class="upcoming_shows">
        <div class="container">
            <div class="row">
                <h3 class="upcoming_shows_title wow slideInDown" data-wow-delay="100ms">Upcoming shows</h3>
                <div class="col-lg-8 order-lg-0">
                <?php $blog = new WP_Query(array('post_type' => 'blog' ,'posts_per_page' => -1)); ?>
                <?php if ($blog->have_posts()) : while ($blog->have_posts()) : $blog->the_post();  ?>
                    <div class="upcoming_shows_blog wow fadeInUp" data-wow-delay="300ms">
                        <div class="data"><?php the_time( 'M' ); ?><h3><?php the_time( 'j' ); ?></h3> <?php the_time( 'D' ); ?></div>
                        <img src="<?php the_post_thumbnail_url(); ?>" class="main_img_blog" alt="">
                        <div class="blog_text">
                            <p class="blog_text_info"><?php the_field('text'); ?></p>
                            <h4><?php the_title(); ?></h4>
                            <p><?php the_field('text2'); ?></p>
                            <a href="<?php the_permalink(); ?>" class="btn btn_upcoming_shows"><img src="http://test.ninito.uz/wp-content/uploads/2021/02/ticket.png" alt="">Get
                                Tickets</a>
                            <span class="tickets_price"><?php the_field('price'); ?></span>
                            <p class="blog_text_ages"><?php the_field('text3'); ?></p>
                        </div>
                    </div>
                    <?php endwhile; ?>
                <?php endif; ?>
                </div>
                <?php get_sidebar(); ?>
            </div>
        </div>

    </section>
 <!--  Upcoming_shows End  -->
  <!-- Services -->
    <section class="services">
        <div class="container">
            <div class="row">
            <?php $services = new WP_Query(array('post_type' => 'services' ,'posts_per_page' => -1)); ?>
                <?php if ($services->have_posts()) : while ($services->have_posts()) : $services->the_post();  ?>
                <div class="col-lg-4 col-md-6">
                    <div class="services_text wow fadeInUp" data-wow-delay="300ms" style="background: url('<?php the_post_thumbnail_url(); ?>') no-repeat center; background-size: cover;">
                        <a href="<?php the_permalink(); ?>" class="services_text_title">Need a place to stay?</a>
                        <p>Hideout on the Horseshoe</p>
                    </div>
                </div>
                <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    </section>
 <!--  Services End -->
 <?php get_footer(); ?>
    