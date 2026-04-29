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
    add_theme_support( 'custom-logo', array(
        'height'      => 80,
        'width'       => 240,
        'flex-height' => true,
        'flex-width'  => true,
    ) );
    add_theme_support( 'woocommerce' ); // Add WooCommerce support for selling items
    register_nav_menus( array(
        'primary' => __( 'Primary Menu', 'personal-project' ),
    ) );
}
add_action( 'after_setup_theme', 'personal_project_setup' );

function personal_project_create_shop_page() {
    if ( function_exists( 'get_page_by_path' ) ) {
        $shop_page = get_page_by_path( 'shop', OBJECT, 'page' );

        if ( $shop_page && 'trash' === $shop_page->post_status ) {
            wp_untrash_post( $shop_page->ID );
        }

        if ( ! $shop_page ) {
            wp_insert_post( array(
                'post_title'   => 'Shop',
                'post_name'    => 'shop',
                'post_content' => 'Browse our shop below. Add products in the theme or build this page in WordPress.',
                'post_status'  => 'publish',
                'post_type'    => 'page',
            ) );
        }

        $about_page = get_page_by_path( 'about', OBJECT, 'page' );

        if ( $about_page && 'trash' === $about_page->post_status ) {
            wp_untrash_post( $about_page->ID );
        }

        if ( ! $about_page ) {
            wp_insert_post( array(
                'post_title'   => 'About',
                'post_name'    => 'about',
                'post_content' => 'Learn more about Porsche, its ambition, and the passion behind every model.',
                'post_status'  => 'publish',
                'post_type'    => 'page',
            ) );
        }
    }
}
add_action( 'init', 'personal_project_create_shop_page' );

// Remove WordPress footer credit text
remove_action( 'wp_footer', 'wp_admin_bar_render' );

// WooCommerce support
function personal_project_woocommerce_setup() {
    add_theme_support( 'woocommerce' );
}
add_action( 'after_setup_theme', 'personal_project_woocommerce_setup' );
?>