<?php
include locate_template('/includes/options-theme/options_theme.php');
include('includes/wp_bootstrap_navwalker.php');
include('includes/metabox.php');
include('includes/shortcodes.php');

add_theme_support('post-thumbnails', array('post', 'page', 'product'));

add_filter('use_block_editor_for_post', '__return_false', 10);
add_filter('use_block_editor_for_post_type', '__return_false', 10);

function esmumex_scripts_estilos() {
    // all styles
    wp_enqueue_style( 'bootstrapt-css', get_stylesheet_directory_uri() . '/assets/css/bootstrap.min.css', array(), "34234" );
    wp_enqueue_style( 'estilot-css', get_stylesheet_directory_uri() . '/assets/css/estilos.css', array(), "34234" );
    wp_enqueue_style( 'fontawesome47-css', get_stylesheet_directory_uri() . '/assets/css/font-awesome.min.css', array(), "34234" );
    wp_enqueue_style( 'icofont-css', get_stylesheet_directory_uri() . '/assets/css/icofont.min.css', array(), "34234" );
    wp_enqueue_style( 'owl-theme-css', get_stylesheet_directory_uri() . '/assets/css/owl.theme.default.min.css', array(), "34234" );
    wp_enqueue_style( 'owl-carousel-css', get_stylesheet_directory_uri() . '/assets/css/owl.carousel.min', array(), "34234" );
    wp_enqueue_style( 'slick-theme-css', get_stylesheet_directory_uri() . '/assets/js/slick/slick-theme.css', array(), "34234" );
    wp_enqueue_style( 'slickt-css', get_stylesheet_directory_uri() . '/assets/js/slick/slick.css', array(), "34234" );

    wp_enqueue_style( 'stylet-css', get_stylesheet_directory_uri() . '/style.css', array(), "234234" );
    wp_enqueue_style( 'styletr-css', get_stylesheet_directory_uri() . '/assets/css/responsive.css', array(), "234234" );

    

    // all scripts
    wp_enqueue_script( 'jquert-js', get_template_directory_uri() . '/assets/js/jquery-3.3.1.min.js', array('jquery'), "234234", true );
    wp_enqueue_script( 'poppert-js', get_template_directory_uri() . '/assets/js/popper.min.js', array('jquery'), "234234", true );
    wp_enqueue_script( 'bootstrapt-js', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array('jquery'), "234234", true );

    wp_enqueue_script( 'owl-carousel-js', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', array('jquery'), "234234", true );
    wp_enqueue_script( 'slick-js', get_template_directory_uri() . '/assets/js/slick/slick.min.js', array('jquery'), "234234", true );
    wp_enqueue_script( 'appt-js', get_template_directory_uri() . '/assets/js/app.js', array('jquery'), "234234", true );
}
add_action( 'wp_enqueue_scripts', 'esmumex_scripts_estilos' );

function agregarMenu() {
	register_nav_menus(
	array(
	'footer_nav' => __( 'Footer Menu', 'bootpress' ),
	'top_menu' => __( 'Header Menu', 'bootpress' ),
	)
	);
}
add_action( 'after_setup_theme', 'agregarMenu' );


function add_my_favicon() {
   global $configG;
   $favicon_path = $configG['med_favicon']['url'];
   echo "<link rel='shortcut icon' href='$favicon_path' />";
}
add_action( 'wp_head', 'add_my_favicon' );
add_action( 'admin_head', 'add_my_favicon' );
?>
