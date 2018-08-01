<?php

function theme_enqueue_scripts() {
    wp_enqueue_script( 'looks_scripts', get_template_directory_uri() . '/js/app.js', false, null, true );
    wp_enqueue_style( 'looks_styles', get_template_directory_uri() . '/css/style.css' );
}

add_action('wp_enqueue_scripts', 'theme_enqueue_scripts');

function theme_setup() {
    add_theme_support( 'menus' );
    add_theme_support( 'title-tag' ); // Add the <title> to wp_head.
}
add_action( 'after_setup_theme', 'theme_setup' );

function looks_register_nav_menus() {
    register_nav_menus(
        array(
            'main-nav' => 'Main Menu',
            // 'footer-nav' => 'Footer Menu'
        )
    );
}
add_action( 'after_setup_theme', 'looks_register_nav_menus' );

function get_nav() { ?>

    <nav class="main-nav">
         <?php wp_nav_menu( array( 'theme_location' => 'main-nav', 'container' => false ) ); ?>
    </nav>
    
    <?php
}