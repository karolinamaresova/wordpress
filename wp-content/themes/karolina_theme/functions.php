<?php 

function register_my_menu() {
    register_nav_menu('side-menu', __('Side menu'));
    register_nav_menu('left-menu', __('Left menu'));

}
add_action('init', 'register_my_menu');




//+css
wp_enqueue_style( 'style', get_stylesheet_uri());

//+bootstrap
//wp_enqueue_script( 'jquery-js', get_template_directory_uri() . "/libs/jquery/jquery-3.3.1.slim.min.js");
wp_enqueue_script( 'popper', get_template_directory_uri() . "/libs/popper/popper.min.js");
wp_enqueue_style( 'bootstrap', get_template_directory_uri() . "/libs/bootstrap/css/bootstrap.min.css");
wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . "/libs/bootstrap/js/bootstrap.bundle.js" );


add_theme_support('post-thumbnails');

require_once get_template_directory() . '/wp-bootstrap-navwalker.php';

?>