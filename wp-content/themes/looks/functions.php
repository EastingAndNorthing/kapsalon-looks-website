<?php

function theme_enqueue_scripts() {
    wp_enqueue_script( 'looks_scripts', get_template_directory_uri() . '/js/app.js', array( 'jquery' ), null, true );
    wp_enqueue_style( 'looks_styles', get_template_directory_uri() . '/css/style.css' );

    wp_enqueue_script( 'swipebox', get_template_directory_uri() . '/js/swipebox/src/js/jquery.swipebox.min.js', array( 'jquery' ), null, true );
    wp_enqueue_style( 'swipebox_styles', get_template_directory_uri() . '/js/swipebox/src/css/swipebox.min.css' );
}
add_action('wp_enqueue_scripts', 'theme_enqueue_scripts');

add_image_size( 'larger', 1920, 1920 );

function theme_setup() {
    add_theme_support( 'menus' );
    add_theme_support( 'title-tag' ); // Add the <title> to wp_head.
    add_theme_support('post-thumbnails');
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

function create_post_type() {
  register_post_type( 'modellenboek',
    array(
      'labels' => array(
        'name' => __( 'Modellenboek' ),
        'singular_name' => __( 'Item' )
      ),
      'public' => true,
      'has_archive' => true,
      'supports' => array(
          'title',
          'thumbnail'
      )
    )
  );
}
add_action( 'init', 'create_post_type' );

function get_nav() { ?>

    <nav class="main-nav">
         <?php wp_nav_menu( array( 'theme_location' => 'main-nav', 'container' => false ) ); ?>
    </nav>
    
    <?php
}