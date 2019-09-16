<?php

/**
 * 
 * Enqueue the relevant scripts and stylesheets for the child theme
 */

function karavic_theme_enqueue_styles() {
 
    $parent_style = 'parent-style'; // This is 'colormag-style' for the Color Mag Theme.
   
    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style ),
        wp_get_theme()->get('Version')
    );
   }
   
add_action( 'wp_enqueue_scripts', 'karavic_theme_enqueue_styles' );

/**
 *Additional removal of WordPress default options

 */

 

