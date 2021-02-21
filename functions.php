<?php
   add_action('wp_enqueue_scripts','theme_style');
   add_action('wp_enqueue_scripts','theme_script');
   add_action('after_setup_theme','theme_menu');
   add_action('widgets_init','theme_sidebar');
   add_action('init','register_entry');
   
   function theme_sidebar(){
	$args = array(
        'name'          => 'Sidebar',
        'id'            => "sidebar",
        'description'   => 'Вставь сюда виджатов',
        'before_widget' => '<div class="widget %2$s">',
        'after_widget'  => "</div>\n",
        'before_title'  => '<h5 class="widget-title">',
        'after_title'   => "</h5>\n"
    );
    register_sidebars( 1, $args );
   }
   
   
   function register_entry(){
    register_post_type( 'slider', [
		'label'  => null,
		'labels' => [
			'name'               => 'Слайдер', // основное название для типа записи
			'singular_name'      => 'Слайдер', // название для одной записи этого типа
			'add_new'            => 'Добавить Слайдер', // для добавления новой записи
			'add_new_item'       => 'Добавление Слайдер', // заголовка у вновь создаваемой записи в админ-панели.
			'edit_item'          => 'Редактирование Слайдер', // для редактирования типа записи
			'new_item'           => 'Новое Слайдер', // текст новой записи
			'view_item'          => 'Смотреть Слайдер', // для просмотра записи этого типа.
			'search_items'       => 'Искать Слайдер', // для поиска по этим типам записи
			'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
			'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
			'parent_item_colon'  => '', // для родителей (у древовидных типов)
			'menu_name'          => 'Слайдер', // название меню
		],
		'description'         => ' Слайдер',
		'public'              => true,
		'publicly_queryable'  => true, // зависит от public
		 'exclude_from_search' => true, // зависит от public
		'show_ui'             => true, // зависит от public
	   'show_in_nav_menus'   => true, // зависит от public
		'show_in_menu'        => true, // показывать ли в меню адмнки
	   'show_in_admin_bar'   => true, // зависит от show_in_menu
		'show_in_rest'        => null, // добавить в REST API. C WP 4.7
		'rest_base'           => null, // $post_type. C WP 4.7
		'menu_position'       => null,
		'menu_icon'           => null,
		//'capability_type'   => 'post',
		//'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
		//'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
		'hierarchical'        => false,
        'supports'            => [ 'title', 'editor','thumbnail','post-formats' ], 
        // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes'
		'taxonomies'          => [],
		'has_archive'         => false,
		'rewrite'             => true,
		'query_var'           => true,
	] );
	register_post_type( 'blog', [
		'label'  => null,
		'labels' => [
			'name'               => 'Блок', // основное название для типа записи
			'singular_name'      => 'Блок', // название для одной записи этого типа
			'add_new'            => 'Добавить Блок', // для добавления новой записи
			'add_new_item'       => 'Добавление Блок', // заголовка у вновь создаваемой записи в админ-панели.
			'edit_item'          => 'Редактирование Блок', // для редактирования типа записи
			'new_item'           => 'Новое Блок', // текст новой записи
			'view_item'          => 'Смотреть Блок', // для просмотра записи этого типа.
			'search_items'       => 'Искать Блок', // для поиска по этим типам записи
			'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
			'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
			'parent_item_colon'  => '', // для родителей (у древовидных типов)
			'menu_name'          => 'Блок', // название меню
		],
		'description'         => ' Блок',
		'public'              => true,
		'publicly_queryable'  => true, // зависит от public
		 'exclude_from_search' => true, // зависит от public
		'show_ui'             => true, // зависит от public
	   'show_in_nav_menus'   => true, // зависит от public
		'show_in_menu'        => true, // показывать ли в меню адмнки
	   'show_in_admin_bar'   => true, // зависит от show_in_menu
		'show_in_rest'        => null, // добавить в REST API. C WP 4.7
		'rest_base'           => null, // $post_type. C WP 4.7
		'menu_position'       => null,
		'menu_icon'           => null,
		//'capability_type'   => 'post',
		//'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
		//'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
		'hierarchical'        => false,
        'supports'            => [ 'title', 'editor','thumbnail','post-formats' ], 
        // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes'
		'taxonomies'          => [],
		'has_archive'         => false,
		'rewrite'             => true,
		'query_var'           => true,
	] );
	register_post_type( 'services', [
		'label'  => null,
		'labels' => [
			'name'               => 'Сервисы', // основное название для типа записи
			'singular_name'      => 'Блок', // название для одной записи этого типа
			'add_new'            => 'Добавить Сервисы', // для добавления новой записи
			'add_new_item'       => 'Добавление Сервисы', // заголовка у вновь создаваемой записи в админ-панели.
			'edit_item'          => 'Редактирование Сервисы', // для редактирования типа записи
			'new_item'           => 'Новое Сервисы', // текст новой записи
			'view_item'          => 'Смотреть Сервисы', // для просмотра записи этого типа.
			'search_items'       => 'Искать Сервисы', // для поиска по этим типам записи
			'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
			'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
			'parent_item_colon'  => '', // для родителей (у древовидных типов)
			'menu_name'          => 'Сервисы', // название меню
		],
		'description'         => ' Сервисы',
		'public'              => true,
		'publicly_queryable'  => true, // зависит от public
		 'exclude_from_search' => true, // зависит от public
		'show_ui'             => true, // зависит от public
	   'show_in_nav_menus'   => true, // зависит от public
		'show_in_menu'        => true, // показывать ли в меню адмнки
	   'show_in_admin_bar'   => true, // зависит от show_in_menu
		'show_in_rest'        => null, // добавить в REST API. C WP 4.7
		'rest_base'           => null, // $post_type. C WP 4.7
		'menu_position'       => null,
		'menu_icon'           => null,
		//'capability_type'   => 'post',
		//'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
		//'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
		'hierarchical'        => false,
        'supports'            => [ 'title', 'editor','thumbnail','post-formats' ], 
        // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes'
		'taxonomies'          => [],
		'has_archive'         => false,
		'rewrite'             => true,
		'query_var'           => true,
	] );
}
   
   function theme_menu(){
    register_nav_menu('top', 'Меню в шапке') ;
    register_nav_menu('bottom', 'Меню в подвале');
    add_theme_support( 'custom-logo' );
    add_theme_support( 'post-thumbnails' ,array ('post', 'slider', 'blog', 'services'));
}
   
   
   function theme_style() {
    wp_enqueue_style('style', get_stylesheet_uri());
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css');
    wp_enqueue_style('slick', get_template_directory_uri() . '/assets/css/slick.css');
    wp_enqueue_style('font-awesome', get_template_directory_uri() . '/assets/css/font-awesome.css');
	wp_enqueue_style('main_menu', get_template_directory_uri() . '/assets/menu/meanmenu.min.css');
	wp_enqueue_style('wowanimate', get_template_directory_uri() . '/assets/wow/animate.css');
    wp_enqueue_style('customc_css', get_template_directory_uri() . '/assets/css/style.css');
    
}
    function theme_script() {
 wp_enqueue_script( 'jquery' );
 wp_enqueue_script( 'popper' ,get_template_directory_uri() . '/assets/js/popper.min.js',['jquery'],null,true);
 wp_enqueue_script( 'bootstrapjs' ,get_template_directory_uri() . '/assets/js/bootstrap.min.js',['jquery'],null,true);
 wp_enqueue_script( 'bootstrap.navbar' ,get_template_directory_uri() . '/assets/js/bootstrap-4-navbar.min.js',['jquery'],null,true);
 wp_enqueue_script( 'slickjs' ,get_template_directory_uri() . '/assets/js/slick.min.js',['jquery'],null,true);
 wp_enqueue_script( 'jquerycore' ,get_template_directory_uri() . '/assets/menu/jquery-core-plugins.js',['jquery'],null,true);
 wp_enqueue_script( 'wowjs' ,get_template_directory_uri() . '/assets/wow/wow.min.js',false,null,false);
 wp_enqueue_script( 'customjs' ,get_template_directory_uri() . '/assets/js/custom.js',false,null,false);
}



// Customizer Settings
require get_stylesheet_directory() . '/inc/theminimalist-customizer.php';
new TheMinimalist_Customizer();
 

if ( ! isset( $content_width ) ) {
	$content_width = 600;
} 

add_theme_support( 'post-thumbnails', array( 'post' ) );          // Posts only



function theme_get_customizer_css() {
    ob_start();
  
    $text_color = get_theme_mod( 'text_color', '' );
    if ( ! empty( $text_color ) ) {
      ?>
      body {
        color: <?php echo $text_color; ?>;
      }
      <?php
    }
  
    $link_color = get_theme_mod( 'link_color', '' );
    if ( ! empty( $link_color ) ) {
      ?>
      a {
        color: <?php echo $link_color; ?>;
        border-bottom-color: <?php echo $link_color; ?>;
      }
      <?php
    }
  
    $accent_color = get_theme_mod( 'accent_color', '' );
    if ( ! empty( $accent_color ) ) {
      ?>
      a:hover {
        color: <?php echo $accent_color; ?>;
        border-bottom-color: <?php echo $accent_color; ?>;
      }
  
      button,
      input[type="submit"] {
        background-color: <?php echo $accent_color; ?>;
      }
      <?php
    }
  
    $custom_background_color = get_theme_mod( 'custom_background_color', '' );
    if ( ! empty( $custom_background_color ) ) {
      ?>
      body {
        background-color: <?php echo $custom_background_color; ?>;
      }
      <?php
    }
  
    $wrapper_background_color = get_theme_mod( 'wrapper_background_color', '' );
    if ( ! empty( $wrapper_background_color ) ) {
      ?>
      .wrapper {
        background-color: <?php echo $wrapper_background_color; ?>;
      }
      <?php
    }
  
    $social_icon_color = get_theme_mod( 'social_icon_color', '' );
    if ( ! empty( $social_icon_color ) ) {
      ?>
      .social-icon {
        fill: <?php echo $social_icon_color; ?>;
      }
      <?php
    }
  
    $css = ob_get_clean();
    return $css;
}


// function theme_enqueue_styles() {
//     wp_enqueue_style( 'theme-styles', get_stylesheet_uri() ); // This is where you enqueue your theme's main stylesheet
//     $custom_css = theme_get_customizer_css();
//     wp_add_inline_style( 'theme-styles', $custom_css );
// }
    
// add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );


// Comment Reply Fix
function load_script_for_fake_threading() {
  if (is_singular()) wp_enqueue_script('comment-reply');
}
add_action('wp_enqueue_scripts','load_script_for_fake_threading');