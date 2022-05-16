<?php
/*
    Template Name: Home Template
*/

get_header(); ?>
        
        <!-- Banner Start Here -->
        <div class="banner owl-carousel">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/slide1.jpg" alt="Banner">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/slide2.jpg" alt="Banner">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/slide3.jpg" alt="Banner">
        </div>
        <!-- Banner End Here -->

        <?php get_template_part( 'template-parts/content', 'services' ); ?>

        <div <?php post_class(array('blogs', 'fix')); ?>>
            <div class="blog-left">
                <h4>Latest Posts</h4>
                <?php get_template_part( 'template-parts/content', 'blogs' ); ?>  
            </div>
            <?php get_sidebar(); ?>
        </div>
        <?php get_footer(); ?>