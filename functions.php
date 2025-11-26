<?php

function jadoo_enqueue_assets() {

    wp_enqueue_style( 
        'jadoo-google-fonts', 
        'https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Volkhov:ital,wght@0,400;0,700;1,400;1,700&display=swap', 
        array(), 
        null 
    );

    wp_enqueue_style( 'bootstrap-css', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '5.3.0' );

    wp_enqueue_style( 'jadoo-custom-styles', get_template_directory_uri() . '/css/main.css', array('bootstrap-css', 'jadoo-google-fonts'), '1.0' );

    wp_enqueue_script( 'jquery' ); 

    wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/js/bootstrap.bundle.min.js', array('jquery'), '5.3.0', true );

    wp_enqueue_script( 'jadoo-custom-js', get_template_directory_uri() . '/js/custom-scripts.js', array('jquery', 'bootstrap-js'), '1.0', true );
}
add_action( 'wp_enqueue_scripts', 'jadoo_enqueue_assets' );


function jadoo_register_menus() {
    register_nav_menu( 'primary-menu', __( 'Primary Header Navigation', 'jadoo' ) );
}
add_action( 'init', 'jadoo_register_menus' );


add_theme_support( 'post-thumbnails' );

