<?php get_header();?>

<section class="breadcumb-area">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="breadcumb">
                    <h4><?php the_archive_title(); ?></h4>
                    <ul>
                        <li><a href="<?php echo site_url(); ?>">Home</a></li> / 
                        <li><?php the_archive_title(); ?></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="blog-area pb-100 pt-100" id="blog">
         <div class="container">
            <div class="row">
               <?php
                  while(have_posts()){
                     the_post();
               ?>
                  <div class="col-md-4">
                     <div class="single-blog">

                        <div class="single-blog-img" style="background-image: url('<?php echo esc_url(the_post_thumbnail_url()); ?>'); width: 100%; height: 250px;">
                        </div>
                        <div class="post-content">
                           <div class="post-title">
                              <h4><a href="<?php echo esc_url(the_permalink()); ?>"><?php echo esc_attr(the_title()); ?></a></h4>
                           </div>
                           <div class="post-meta">
                                 <?php echo get_the_date('j F Y'); ?> / 
                                 <?php the_author_posts_link(); ?> / 
                                 <?php the_category(', '); ?>
                           </div>
                           <p><?php echo esc_attr(the_excerpt()); ?></p>
                           <a href="<?php echo esc_url(the_permalink()); ?>" class="box-btn">read more <i class="fa fa-angle-double-right"></i></a>
                        </div>
                     </div>
                  </div>
               <?php
                  }
                  wp_reset_postdata();
               ?>
               
            </div>
         </div>
      </section>
      <!-- Latest News Area End -->
 <?php get_footer(); ?>