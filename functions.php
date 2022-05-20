<?php 

function halim_setup(){
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails', array(
        'post', 'sliders', 'teams', 'testimonials', 'portfolio'
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

    // ADDING TEAM MEMBERS
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

    // ADDING TESTIMONIALS
    register_post_type('testimonials', array(
        'labels' => array(
            'name' => __('Testimonials', 'halim'),
            'singular_name' => __('Testimonial', 'halim'),
            'menu_name' => __('Testimonials', 'halim'),
            'name_admin_bar' => __('Testimonial', 'halim'),
            'add_new' => __('Add Testimonial', 'halim'),
            'add_new_item' => __('Add New Testimonial', 'halim'),
            'new_item' => __('New Testimonial', 'halim'),
            'edit_item' => __('Edit Testimonial', 'halim'),
            'view_item' => __('View Testimonial', 'halim'),
            'all_items' => __('All Testimonials', 'halim'),
            'search_items' => __('Search Testimonials', 'halim'),
            'not_found' => __('No Testimonials Found', 'halim'),
            'not_found_in_trash' => __('No Testimonials in Trash', 'halim'),
        ),
        'public' => true,
        'show_ui' => true,
        'supports' => array(
            'title', 'custom-fields', 'page-attributes', 'thumbnail',
        ),
    ));

    // ADDING PORTFOLIO
    register_post_type('portfolio', array(
        'labels' => array(
            'name' => __('Portfolios', 'halim'),
            'singular_name' => __('Portfolio', 'halim'),
            'menu_name' => __('Portfolios', 'halim'),
            'name_admin_bar' => __('Portfolio', 'halim'),
            'add_new' => __('Add Portfolio', 'halim'),
            'add_new_item' => __('Add New Portfolio', 'halim'),
            'new_item' => __('New Portfolio', 'halim'),
            'edit_item' => __('Edit Portfolio', 'halim'),
            'view_item' => __('View Portfolio', 'halim'),
            'all_items' => __('All Portfolios', 'halim'),
            'search_items' => __('Search Portfolios', 'halim'),
            'not_found' => __('No Portfolios Found', 'halim'),
            'not_found_in_trash' => __('No Portfolios in Trash', 'halim'),
            'featured_image' => __( 'Portfolio Image', 'halim'),
            'set_featured_image'    => __( 'Set Portfolio Image', 'halim'),
            'remove_featured_image' => __( 'Remove Portfolio Image', 'halim'),
            'use_featured_image'    => __( 'Use Portfolio image', 'halim'),
        ),
        'public' => true,
        'show_ui' => true,
        'supports' => array(
            'title', 'editor', 'custom-fields', 'thumbnail',
        ),
    ));
    register_taxonomy( 'portfolio-cat', 'portfolio', array(
        'labels' => array(
            'name' => __('Categories', 'halim'),
            'singular_name' => __('Category', 'halim'),
        ),
        'hierarchical' => true,
        'show_admin_column' => true,
    ));

}
add_action('init', 'halim_custom_posts');


function acf_custom_css(){
?>
    <style>
        .header-top{
            background-color: <?php the_field('header_background_color', 'option') ?>
        }
    </style>
<?php
}
add_action('wp_head', 'acf_custom_css');

// ACF OPTIONS PAGE
if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> __('Halim Theme Options', 'halim'),
		'menu_title'	=> __('Halim Theme Options', 'halim'),
		'menu_slug' 	=> 'halim-options',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> __('Halim Theme Header Options', 'halim'),
		'menu_title'	=> __('Header', 'halim'),
		'parent_slug'	=> 'halim-options',
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> __('Halim Theme About Options', 'halim'),
		'menu_title'	=> __('About Section', 'halim'),
		'parent_slug'	=> 'halim-options',
	));

    acf_add_options_sub_page(array(
		'page_title' 	=> __('Halim FAQ & Skill Options', 'halim'),
		'menu_title'	=> __('FAQ & Skill Section', 'halim'),
		'parent_slug'	=> 'halim-options',
	));
	
    acf_add_options_sub_page(array(
		'page_title' 	=> __('Halim Services Header Options', 'halim'),
		'menu_title'	=> __('Services Section', 'halim'),
		'parent_slug'	=> 'halim-options',
	));

    acf_add_options_sub_page(array(
		'page_title' 	=> __('Halim Team Header Options', 'halim'),
		'menu_title'	=> __('Team Section', 'halim'),
		'parent_slug'	=> 'halim-options',
	));

    acf_add_options_sub_page(array(
		'page_title' 	=> __('Halim Testimonial Header Options', 'halim'),
		'menu_title'	=> __('Testimonial Section', 'halim'),
		'parent_slug'	=> 'halim-options',
	));

    acf_add_options_sub_page(array(
		'page_title' 	=> __('Halim Blog Header Options', 'halim'),
		'menu_title'	=> __('Blog Section', 'halim'),
		'parent_slug'	=> 'halim-options',
	));

    acf_add_options_sub_page(array(
		'page_title' 	=> __('Halim CTA Options', 'halim'),
		'menu_title'	=> __('CTA Section', 'halim'),
		'parent_slug'	=> 'halim-options',
	));

    acf_add_options_sub_page(array(
		'page_title' 	=> __('Halim Footer Options', 'halim'),
		'menu_title'	=> __('Footer Section', 'halim'),
		'parent_slug'	=> 'halim-options',
	));
}