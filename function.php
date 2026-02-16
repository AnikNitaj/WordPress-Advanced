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
?>