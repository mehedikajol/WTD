<?php 

/*
   Template Name: About Template
*/

get_header();?>

<section class="breadcumb-area">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="breadcumb">
                    <h4><?php the_title(); ?></h4>
                    <ul>
                        <li><a href="<?php echo site_url(); ?>">Home</a></li> / 
                        <li><?php the_title(); ?></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- About Area Start -->
<section class="about-area pt-100 pb-100" id="about">
         <div class="container">
            <div class="row">
               <div class="col-md-7">
                  
                  <div class="about">
                     <div class="page-title">
                        <h4><?php the_field('about_page_title'); ?></h4>
                     </div>
                     <?php the_field('about_page_description'); ?>
                  </div>
               </div>
               <div class="col-md-5">
                  <?php
                     $about_page_features = get_field('about_page_features');
                     foreach($about_page_features as $about_page_feature){
                  ?>
                     <div class="single_about">
                        <i class="fa <?php echo $about_page_feature['feature_icon']; ?>"></i>
                        <h4><?php echo $about_page_feature['feature_title']; ?></h4>
                        <p><?php echo $about_page_feature['feature_description']; ?></p>
                     </div>
                  <?php
                     }
                  ?>
               </div>
            </div>
         </div>
      </section>
      <!-- About Area End -->
<?php get_footer();?>