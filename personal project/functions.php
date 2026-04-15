<?php
function personal_project_enqueue_scripts() {
    // Enqueue main stylesheet
    wp_enqueue_style( 'personal-project-style', get_stylesheet_uri() );

    // Enqueue custom CSS
    wp_enqueue_style( 'personal-project-custom', get_template_directory_uri() . '/assets/css/custom.css', array(), '1.0.0' );

    // Enqueue JavaScript
    wp_enqueue_script( 'personal-project-script', get_template_directory_uri() . '/assets/js/script.js', array('jquery'), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'personal_project_enqueue_scripts' );

// Add theme support
function personal_project_setup() {
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'title-tag' );
    add_theme_support( 'custom-logo' );
    add_theme_support( 'woocommerce' ); // Add WooCommerce support for selling items
    register_nav_menus( array(
        'primary' => __( 'Primary Menu', 'personal-project' ),
    ) );
}
add_action( 'after_setup_theme', 'personal_project_setup' );

// WooCommerce support
function personal_project_woocommerce_setup() {
    add_theme_support( 'woocommerce' );
}
add_action( 'after_setup_theme', 'personal_project_woocommerce_setup' );
?>