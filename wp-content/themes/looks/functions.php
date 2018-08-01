<?php

function theme_enqueue_scripts() {
    wp_enqueue_script( 'looks_scripts', get_template_directory_uri() . '/js/app.js', false, null, true );
    wp_enqueue_style( 'looks_styles', get_template_directory_uri() . '/css/style.css' );
}

add_action('wp_enqueue_scripts', 'theme_enqueue_scripts');
