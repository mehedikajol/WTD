<?php

function wtd_setup(){
    // TEXT DOMAIN
    load_theme_textdomain('wtd');

    // TITLE 
    add_theme_support( 'title-tag' );

    // REGISTERING MENUs
    register_nav_menus( 
        array(
            'main-menu' => __('Main Menu', 'wtd'),
            'footer-menu' => __('Footer Menu', 'wtd'),
        ) 
    ); 
}add_action( 'after_setup_theme', 'wtd_setup' );


function wtd_scripts() {
    // FONT-AWESOME CSS
    wp_enqueue_style( 'font-awesome', get_template_directory_uri().'/assets/css/font-awesome.min.css', array(), '5.15.3', 'all');
    // OWL THEME DEFAULT CSS
    wp_enqueue_style( 'owl-theme', get_template_directory_uri().'/assets/css/owl.theme.default.min.css', array(), '2.3.4', 'all');
    // OWL CAROUSEL CSS
    wp_enqueue_style( 'owl-carousel', get_template_directory_uri().'/assets/css/owl.carousel.min.css', array(), '2.3.4', 'all');
    // MAIN CSS
    wp_enqueue_style( 'main-style', get_template_directory_uri().'/assets/css/style.css', array(), '1.0.0', 'all');
    // RESPONSIVE CSS
    wp_enqueue_style( 'responsive', get_template_directory_uri().'/assets/css/responsive.css', array(), '1.0.0', 'all');
    // STYLESHEET
    wp_enqueue_style( 'style', get_stylesheet_uri());

    // OWL CAROUSEL JS
    wp_enqueue_script( 'owl-carousel', get_template_directory_uri().'/assets/js/owl.carousel.min.js', array('jquery'), '2.3.4', true );
    // MAIN JS
    wp_enqueue_script( 'main', get_template_directory_uri().'/assets/js/main.js', array('jquery'), '1.0.0', true );
}add_action('wp_enqueue_scripts', 'wtd_scripts');

// REGISTER SIDEBAR 
function wtd_widgets(){
    register_sidebar( 
        array(
            'name' => __('Main Sidebar', 'wtd'),
            'id' => 'sidebar-1',
            'description' => __('Our Main Sidebar', 'wtd'),
            'before_widget' => '<div class="single-sidebar">',
            'after_widget' => '</div>',
            'before_title' => '<h4>',
            'after_title' => '</h4>',
        )
    );
}add_action( 'widgets_init', 'wtd_widgets' );