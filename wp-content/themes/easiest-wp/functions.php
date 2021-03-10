<?php
function easiestwp_scripts() {
   wp_enqueue_style( 'easiestwp-style', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'easiestwp_scripts' );