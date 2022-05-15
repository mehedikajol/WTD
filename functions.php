<?php

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
}
add_action('wp_enqueue_scripts', 'wtd_scripts');
