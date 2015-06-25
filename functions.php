<?php
/**
 * Additional Functions
 *
 * Designed by Sarah Maris for Carleton85.com based on TwentyFifteen theme
 * revised 06-25-15
 *
 */

/*
 * Contents:
 *
 *  1.0 - Enqueue parent theme styles
 *
 *  2.0 - Add flex slider
 *
 *
 *
 *
 *
 *
 *
 */


/* 1.0 Enqueue parent theme styles 
-------------------------------------------------*/
 
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array('parent-style')
    );
}

/* 2.0 Add flex slider 
------------------------------------------------ */

/* 2.1  Create Slider Post Type */
require( get_stylesheet_directory() . '/inc/slider/slider_post_type.php' );

/* 2.2 Create Slider */
require( get_stylesheet_directory() . '/inc/slider/slider.php' );

?>