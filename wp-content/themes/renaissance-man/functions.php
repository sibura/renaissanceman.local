<?php 
add_action( 'wp_enqueue_scripts', 'renaissance_man_enqueue_styles' );
function renaissance_man_enqueue_styles() {
	wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' ); 
} 
function regis_options($args) {
	return $args;
}
?>