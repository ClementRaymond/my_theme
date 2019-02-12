<?php
function ajout_style() {

wp_register_style( 'sass_style', get_template_directory_uri() . '/css/style.css' );
wp_enqueue_style( 'sass_style' );

}

add_action( 'wp_enqueue_scripts', 'ajout_style' );
