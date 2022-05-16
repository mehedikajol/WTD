

<!-- Blog Start Here -->
        <div class="blog">
            <?php 
                if(have_posts()){
                    while(have_posts()){
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

            <?php 
                    }
                    wp_reset_postdata();
                }
            ?>                             
        </div>
<!-- Blog End Here -->