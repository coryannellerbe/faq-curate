<?php
/* enqueue scripts and style from parent theme */        
function twentytwenty_styles() {
	wp_enqueue_style( 'parent', get_template_directory_uri() . '/style.css' );
	wp_enqueue_style( 'curate-styles', get_stylesheet_directory_uri() . '/styles/css/curate-styles.css', '', filemtime(get_stylesheet_directory() . '/styles/css/curate-styles.css') );
	wp_enqueue_style( 'tachyons', 'https://unpkg.com/tachyons/css/tachyons.min.css' );
}
add_action( 'wp_enqueue_scripts', 'twentytwenty_styles');

