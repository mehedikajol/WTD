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
                <div class="blog">
                    <?php
                        $args = array(
                            'post_type'    => 'post',
                            'posts_per_page' => 6,
                        );
                        $query1 = new WP_Query( $args );

                        while ( $query1->have_posts() ) {
                            $query1->the_post();
                        ?>
                            <div class="single-blog home-blog">
                                <h4><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h4>
                                <?php the_post_thumbnail('post-thumbnail'); ?>
                                <div class="blog-meta">
                                    <?php the_author_posts_link(); ?>
                                    <?php the_date('M d'); ?>
                                    <?php the_category(); ?>
                                </div>
                                <p><?php the_excerpt(); ?></p>
                                <a href="<?php the_permalink(); ?>">read more</a>
                            </div> 
                        <?php 
                        }
                        wp_reset_postdata();
                    ?>
                </div> 
            </div>
            <?php get_sidebar(); ?>
        </div>
        <?php get_footer(); ?>


