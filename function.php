<?php

function ds_theme_assets(){
    //Main css
    wp_enqueue_style(
        'ds-style',
        get_stylesheet_uri()
        array(),
        '1.0',
        'all'
    );


    //Main css
    wp_enqueue_style(
        'ds-slider-style',
        get_template_directory_uri().'/css/slider.css',
        array(),
        '1.0',
        'all'
    );


    //js
    wp_enqueue_script(
        'ds-script',
        get_template_directory_uri().'/js/custom.js',
        array('jquery'),
        '1.0',
        'all'
    );
    if(is_singular() && comments_open() && get_option('thread_comments')){
        wp_enqueue_script('comment-reply');
    }
}
add_action('wp_enqueue_scripts', 'ds_theme_assets');


function register_taxonomy_movie_genre() {
    $labels = array(
        'name'                  => __( 'Movie Genres', 'taxonomy general name' ),
        'singular_name'         => __( 'Movie Genre', 'taxonomy singular name' ),
        'search_items'          => __( 'Search Movie Genres' ),
        'all_items'             => __( 'All Movie Genres' ),
        'parent_item'           => __( 'Parent Movie Genre' ),
        'parent_item_colon'     => __( 'Parent Movie Genre:' ),
        'edit_item'             => __( 'Edit Movie Genre' ),
        'update_item'           => __( 'Update Movie Genre' ),
        'add_new_item'          => __( 'Add New Movie Genre' ),
        'new_item_name'         => __('New Movie genre Name'),
        'menu_name'             => __('Movie Genre'),
    );

    $args = array(
        'hierarchical'          =>true,
        'labels'                =>$labels,
        'show_ui'               =>true,
        'show_admin_column'     =>true,
        'query_var'             =>true,
        'show_in_rest'          =>true,
        "rewrite"               =>array('slug' => 'movie-genre'),

    );

    register_taxonomy('movie_genres', array('movie'), $args);

    register_taxonomy('movietags', 'movie', array(
        'label'               => 'Movie Tags',
        'rewrite'             => array('slug' => 'movie-tag'),
        'hierarchical'        => false,
        'show_ui'             => true,
        'show_admin_column'   => true,
        'show_in_rest'        => true,
    ));

}
add_action( 'init', 'register_taxonomy_movie_genre' );