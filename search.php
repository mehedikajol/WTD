<?php
get_header();
global $wp_query;
?>
<div class="fix">
    <div class="search-page blog-left">
        <h1 style="margin-top: 30px; font-size: 32px;"> 
            <?php echo $wp_query->found_posts; ?>
            <?php _e( 'Search Results Found For', 'locale' ); ?>
            : 
            <?php the_search_query(); ?>
        </h1>

        <?php if ( have_posts() ) { ?>
            <ul>
                <?php while (have_posts()) { 
                    the_post(); 
                ?>
                    <div class="single-blog">
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
                <?php } ?>

            </ul>
            <?php echo paginate_links(); ?>
        <?php } ?>
    </div>
    <div>
        <?php get_sidebar();?>
    </div>
    
    </div>

<?php get_footer(); ?>