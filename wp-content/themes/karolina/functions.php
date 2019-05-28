<?php function register_my_menus() {
  register_nav_menus(
    array(
      'side-menu' => __( 'Side Menu' ),
      'footer-menu' => __( 'Footer Menu' )
    )
  );
}
add_action( 'init', 'register_my_menus' );
 ?>
