<?php
function my_theme_enqueue_styles() 
    { 
         wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
         wp_enqueue_style( 'index-style', get_stylesheet_directory_uri() . '/css/index.css' );
         wp_enqueue_style( 'header_footer-style', get_stylesheet_directory_uri() . '/css/header_footer.css' );
         wp_enqueue_style( 'inner-style', get_stylesheet_directory_uri() . '/css/inner.css' );

    }
    add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
?>