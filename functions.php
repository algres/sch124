<?php
add_action( 'wp_enqueue_scripts', function () {
  wp_enqueue_style( 'style', get_stylesheet_uri() );
  wp_enqueue_style('font-awesome.min', get_stylesheet_directory_uri().'/css/font-awesome.min.css');
} );
//миниатюра
add_theme_support( 'post-thumbnails');

//headermenu
register_nav_menu('hatmenu', 'hatmenu');


//topmenu
register_nav_menu('topmenu', 'topmenu');

?>