<?php 

function happilyeveritaly_styles() {
    wp_enqueue_style( 
        'happily-ever-italy', 
        get_stylesheet_uri()
    );
    wp_enqueue_style( 
        'happily-ever-italy-parent-style', 
        get_template_directory_uri() . '/style.css' 
    );
}
add_action( 'wp_enqueue_scripts', 'happilyeveritaly_styles' );