<?php get_header(); ?>
<!-- Blog Start Here -->
<div class="blogs">
    <div class="blog-left">

            <div class="single">
                <img style="width:100%; height: 350px; margin-bottom: 20px;" src="<?php the_post_thumbnail_url(); ?>" alt="">
                <h4><?php the_title(); ?></h4>
                <div class="blog-meta">
                    <a href="<?php the_author_posts_link(); ?>"><?php the_author(); ?></a>
                    <a href="">3 July</a>
                    <a href="">Food</a>
                </div>
                <?php the_content(); ?>
            </div>                
        
    </div>
    <?php get_sidebar(); ?>
</div>
<!-- Blog End Here -->



<?php get_footer(); ?>