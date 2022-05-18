<?php 

function halim_setup(){
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails', array(
        'post', 'sliders', 'teams',
    ));
    load_theme_textdomain('halim', get_template_directory() . '/languages');

    register_nav_menus( array(
        'primary_menu' => __('Primarty Menu', 'halim'),
        'footer_menu' => __('Footer Menu', 'halim'),
    ));
}
add_action('after_setup_theme', 'halim_setup');

// ADDING STYLES AND SCRIPTS
function halim_assets() {

    wp_enqueue_style( 'google-font', '//fonts.googleapis.com/css?family=Poppins:300,400,500,600,700', array(), '1.0.0', 'all' );
    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), '1.0.0', 'all' );
    wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/assets/css/font-awesome.min.css', array(), '1.0.0', 'all' );
    wp_enqueue_style( 'magnific-popup', get_template_directory_uri() . '/assets/css/magnific-popup.css', array(), '1.0.0', 'all' );
    wp_enqueue_style( 'owl-carousel', get_template_directory_uri() . '/assets/css/owl.carousel.css', array(), '1.0.0', 'all' );
    wp_enqueue_style( 'main-style', get_template_directory_uri() . '/assets/css/style.css', array(), '1.0.0', 'all' );
    wp_enqueue_style( 'responsive', get_template_directory_uri() . '/assets/css/responsive.css', array(), '1.0.0', 'all' );
    wp_enqueue_style( 'style-name', get_stylesheet_uri());
    
    wp_enqueue_script( 'popper', get_template_directory_uri() . '/assets/js/popper.min.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'owl-carousel', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'magnific-popup', get_template_directory_uri() . '/assets/js/jquery.magnific-popup.min.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'isotope', get_template_directory_uri() . '/assets/js/isotope.min.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'imageloaded', get_template_directory_uri() . '/assets/js/imageloaded.min.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'counterup', get_template_directory_uri() . '/assets/js/jquery.counterup.min.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'waypoint', get_template_directory_uri() . '/assets/js/waypoint.min.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'main', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'halim_assets' );

// ADDING CUSTOM POSTS
function halim_custom_posts(){

    // ADDING SLIDERS
    register_post_type('sliders', array(
        'labels' => array(
            'name' => __('Sliders', 'halim'),
            'singular_name' => __('Slider', 'halim'),
            'menu_name' => __('Sliders', 'halim'),
            'name_admin_bar' => __('Slider', 'halim'),
            'add_new' => __('Add Slider', 'halim'),
            'add_new_item' => __('Add New Slider', 'halim'),
            'new_item' => __('New Slider', 'halim'),
            'edit_item' => __('Edit Slider', 'halim'),
            'view_item' => __('View Slider', 'halim'),
            'all_items' => __('All Sliders', 'halim'),
            'search_items' => __('Search Sliders', 'halim'),
            'not_found' => __('No Sliders Found', 'halim'),
            'not_found_in_trash' => __('No Sliders in Trash', 'halim'),
            'featured_image' => __( 'Slider Image', 'halim'),
            'set_featured_image'    => __( 'Set Slider Image', 'halim'),
            'remove_featured_image' => __( 'Remove Slider Image', 'halim'),
            'use_featured_image'    => __( 'Use Slider image', 'halim'),
        ),
        'public' => true,
        'show_ui' => true,
        'supports' => array(
            'title', 'editor', 'thumbnail', 'custom-fields',
        ),
        'show_in_rest' => true,
    ));

    // ADDING SERVICES
    register_post_type('services', array(
        'labels' => array(
            'name' => __('Services', 'halim'),
            'singular_name' => __('Service', 'halim'),
            'menu_name' => __('Services', 'halim'),
            'name_admin_bar' => __('Service', 'halim'),
            'add_new' => __('Add Service', 'halim'),
            'add_new_item' => __('Add New Service', 'halim'),
            'new_item' => __('New Service', 'halim'),
            'edit_item' => __('Edit Service', 'halim'),
            'view_item' => __('View Service', 'halim'),
            'all_items' => __('All Services', 'halim'),
            'search_items' => __('Search Services', 'halim'),
            'not_found' => __('No Services Found', 'halim'),
            'not_found_in_trash' => __('No Services in Trash', 'halim'),
        ),
        'public' => true,
        'show_ui' => true,
        'supports' => array(
            'title', 'editor', 'custom-fields', 'page-attributes',
        ),
        'show_in_rest' => true,
    ));

    // ADDING COUNTER
    register_post_type('counters', array(
        'labels' => array(
            'name' => __('Counters', 'halim'),
            'singular_name' => __('Counter', 'halim'),
            'menu_name' => __('Counters', 'halim'),
            'name_admin_bar' => __('Counter', 'halim'),
            'add_new' => __('Add Counter', 'halim'),
            'add_new_item' => __('Add New Counter', 'halim'),
            'new_item' => __('New Counter', 'halim'),
            'edit_item' => __('Edit Counter', 'halim'),
            'view_item' => __('View Counter', 'halim'),
            'all_items' => __('All Counters', 'halim'),
            'search_items' => __('Search Counters', 'halim'),
            'not_found' => __('No Counters Found', 'halim'),
            'not_found_in_trash' => __('No Counters in Trash', 'halim'),
        ),
        'public' => true,
        'show_ui' => true,
        'supports' => array(
            'title', 'custom-fields', 'page-attributes',
        ),
    ));

    // ADDING COUNTER
    register_post_type('teams', array(
        'labels' => array(
            'name' => __('Team', 'halim'),
            'singular_name' => __('Team', 'halim'),
            'menu_name' => __('Teams', 'halim'),
            'name_admin_bar' => __('Team', 'halim'),
            'add_new' => __('Add Team Member', 'halim'),
            'add_new_item' => __('Add New Team Member', 'halim'),
            'new_item' => __('New Team Member', 'halim'),
            'edit_item' => __('Edit Team Member', 'halim'),
            'view_item' => __('View Team Member', 'halim'),
            'all_items' => __('All Team Members', 'halim'),
            'search_items' => __('Search Team Members', 'halim'),
            'not_found' => __('No Team Members Found', 'halim'),
            'not_found_in_trash' => __('No Team Members in Trash', 'halim'),
        ),
        'public' => true,
        'show_ui' => true,
        'supports' => array(
            'title', 'custom-fields', 'page-attributes', 'thumbnail',
        ),
    ));

}
add_action('init', 'halim_custom_posts');