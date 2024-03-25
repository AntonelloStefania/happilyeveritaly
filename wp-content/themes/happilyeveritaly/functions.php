<?php 
// css
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

// bootstrap
function enqueue_bootstrap() {
    wp_enqueue_style('bootstrap-css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css', array(), '4.5.2', 'all');
    wp_enqueue_script('bootstrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js', array('jquery'), '4.5.2', true);
}

add_action('wp_enqueue_scripts', 'enqueue_bootstrap');