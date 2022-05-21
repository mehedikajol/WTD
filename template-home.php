<?php 

/*
   Template Name: Home Template
*/

get_header();?>

      <!-- Slider Area Start -->
      <section class="slider-area" id="home">
         <div class="slider owl-carousel">

         <?php
            $args = array(  
               'post_type' => 'sliders',
               'posts_per_page' => 3, 
            );
            $query = new WP_Query($args);
            if($query -> have_posts()){
               while($query -> have_posts()){
                  $query -> the_post();
                  if(class_exists('ACF')){
                     $slider_subheading = get_field('slider_subheading');
                     $slider_button_text = get_field('slider_button_text');
                     $slider_button_link = get_field('slider_button_link');
                  }
         ?>

            <div class="single-slide" style="background-image:url('<?php the_post_thumbnail_url(); ?>')">
               <div class="container">
                  <div class="row">
                     <div class="col-xl-12">
                        <div class="slide-table">
                           <div class="slide-tablecell">
                              <h4><?php the_title();?></h4>
                              <h2><?php echo esc_attr($slider_subheading); ?></h2>
                              <p><?php the_content();?></p>
                              <?php 
                                 if($slider_button_text){
                              ?>
                                 <a href="<?php echo esc_url($slider_button_link); ?>" class="box-btn" target="_blank"><?php echo esc_attr($slider_button_text); ?> <i class="fa fa-angle-double-right"></i></a>
                              <?php
                                 }
                              ?>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>

         <?php 
            }
            wp_reset_postdata();
         }  
         ?>

         </div>
      </section>
      <!-- Slider Area Start -->

      <!-- About Area Start -->
      <section class="about-area pt-100 pb-100" id="about">
         <div class="container">
            <div class="row section-title">
               <?php 
                  if(class_exists('ACF')){
                     $about_section = get_field('about_section_title', 'option');
                  }
               ?>
               <div class="col-md-6 text-right">
                  <h3>
                     <span><?php echo esc_attr($about_section['subheading']); ?></span>
                     <?php echo esc_attr($about_section['heading']); ?>
                  </h3>
               </div>
               <div class="col-md-6">
                  <p><?php echo esc_attr($about_section['description']); ?></p>
               </div>
            </div>
            <div class="row">
               <div class="col-md-7">
                  <div class="about">
                     
                     <?php
                        if(class_exists('ACF')){
                           $about_content = get_field('about_content', 'option');
                        }
                     ?>
                     <div class="page-title">
                        <h4><?php echo esc_attr($about_content['title']); ?></h4>
                     </div>
                     <p><?php echo esc_attr($about_content['description']); ?></p>
                     <a href="<?php echo esc_url($about_content['button_link']); ?>" class="box-btn"><?php echo esc_attr($about_content['button_text']); ?> <i class="fa fa-angle-double-right"></i></a>

                  </div>
               </div>
               <div class="col-md-5">

                  <?php
                     if(class_exists('ACF')){
                        $about_features = get_field('about_features', 'option');
                        foreach($about_features as $about_feature){
                     ?>
                        <div class="single_about">
                           <i class="fa <?php echo esc_attr($about_feature['icon']); ?>"></i>
                           <h4><?php echo esc_attr($about_feature['title']); ?></h4>
                           <p><?php echo esc_attr($about_feature['description']); ?></p>
                        </div>
                     <?php
                        }
                     }   
                  ?>
                  
               </div>
            </div>
         </div>
      </section>
      <!-- About Area End -->

      <!-- Choose Area End -->
      <section class="choose">
         <div class="container">
            <div class="row pt-100 pb-100">
               <div class="col-md-6">
                  <div class="faq">
                     <div class="page-title">
                        <h4>
                           <?php
                              if(class_exists('ACF')){
                                 echo esc_attr(the_field('faq_title', 'option'));
                              }
                           ?>
                        </h4>
                     </div>
                     <div class="accordion" id="accordionExample">
                        <?php
                           if(class_exists('ACF')){
                              $faqs = get_field('faqs', 'option');
                              $i = 0;
                              foreach($faqs as $faq){
                                 $i++;
                           ?>
                              <div class="card">
                                 <div class="card-header" id="heading<?php echo $i; ?>">
                                    <h5 class="mb-0">
                                       <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapse<?php echo $i; ?>" aria-expanded="true" aria-controls="collapse<?php echo $i; ?>">
                                       <?php echo esc_attr($faq['title']); ?> 
                                       </button>
                                    </h5>
                                 </div>
                                 <div id="collapse<?php echo $i; ?>" class="collapse <?php if($i == 1) {echo 'show';} ?>" aria-labelledby="heading<?php echo $i; ?>" data-parent="#accordionExample">
                                    <div class="card-body">
                                    <?php echo esc_attr($faq['description']); ?>
                                    </div>
                                 </div>
                              </div>
                           <?php
                              }
                           }
                        ?>
                        
                     </div>
                  </div>
               </div>
               <div class="col-md-6">
                  <div class="skills">
                     <div class="page-title">
                        <h4>
                           <?php 
                              if(class_exists('ACF')){ 
                                 echo esc_attr(the_field('skills_title', 'option'));
                              } 
                           ?>
                        </h4>
                     </div>
                     
                     <?php
                        if(class_exists('ACF')){ 
                           $skills = get_field('skills', 'option');
                           foreach($skills as $skill){
                        ?>
                           <div class="single-skill">
                              <h4><?php echo esc_attr($skill['skill_title']); ?></h4>
                              <div class="progress-bar" role="progressbar" style="width: <?php echo $skill['skill_percentage']; ?>%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"><?php echo $skill['skill_percentage']; ?>%</div>
                           </div>
                        <?php
                           }
                        }
                     ?>
                     
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- Choose Area End -->

      <?php get_template_part('template-parts/content', 'services') ?>
      
      <!-- Counter Area End -->
      <section class="counter-area">
         <div class="container-fluid">
            <div class="row">

            <?php
               $args = array(  
                     'post_type' => 'counters',
                     'posts_per_page' => 4, 
                     'order' => 'ASC',
                     'orderby' => 'menu_order',
               );
               $query = new WP_Query($args);
               if($query -> have_posts()){
                     while($query -> have_posts()){
                        $query -> the_post();
                        if(class_exists('ACF')){ 
                           $counter_number = get_field('counter_number');
                           $counter_icon = get_field('counter_icon');
                        
               ?>

                  <div class="col-md-3">
                     <div class="single-counter">
                        <h4><i class="<?php echo esc_attr($counter_icon); ?>"></i><span class="counter"><?php echo esc_attr($counter_number); ?></span><?php the_title(); ?></span></h4>
                     </div>
                  </div>

               <?php 
                     }
                  }
                  wp_reset_postdata();
               }
            ?>
            </div>
         </div>
      </section>
      <!-- Counter Area End -->

      <!-- Team Area Start -->
      <section class="team-area pb-100 pt-100" id="team">
         <div class="container">
            <div class="row section-title">
               <div class="col-md-6 text-right">
                  <h3><span>
                     <?php 
                        if(class_exists('ACF')){ 
                           echo esc_attr(the_field('team_subheading', 'option'));
                        } 
                     ?></span>
                     <?php 
                        if(class_exists('ACF')){ 
                           echo esc_attr(the_field('team_heading', 'option')); 
                        }
                     ?></h3>
               </div>
               <div class="col-md-6">
                  <p><?php 
                     if(class_exists('ACF')){ 
                        echo esc_attr(the_field('team_description', 'option'));
                     } 
                  ?></p>
               </div>
            </div>
            <div class="row">

            <?php 
               $args = array(
                  'post_type' => 'teams',
                  'posts_per_page' => 3,
                  'order' => 'ASC',
                  'orderby' => 'menu_order',
               );
               $query = new WP_Query($args);
               if($query -> have_posts()){
                  while($query -> have_posts()){
                     $query -> the_post();
                     if(class_exists('ACF')){ 
                        $team_designation = get_field('team_designation');
                        $facebook_link = get_field('facebook_link');
                        $linkedin_link = get_field('linkedin_link');
                        $twitter_link = get_field('twitter_link');
                        $instagram_link = get_field('instagram_link');
                     }

            ?>

               <div class="col-md-4">
                  <div class="single-team">
                     <img src="<?php echo esc_url(the_post_thumbnail_url()); ?>" alt="" />
                     <div class="team-hover">
                        <div class="team-content">
                           <h4><?php echo esc_attr(the_title()); ?> <span><?php echo esc_attr($team_designation);?></span></h4>
                           <ul>
                              <?php 
                                 if($facebook_link){
                              ?>
                                 <li><a href="<?php echo esc_url($facebook_link); ?>"><i class="fa fa-facebook" title="Facebook"></i></a></li>
                              <?php
                                 }
                                 if($twitter_link){
                              ?>
                              
                                 <li><a href="<?php echo esc_url($twitter_link); ?>"><i class="fa fa-twitter" title="Twitter"></i></a></li>
                              <?php
                                 }
                                 if($linkedin_link){
                              ?>
                                 <li><a href="<?php echo esc_url($linkedin_link); ?>"><i class="fa fa-linkedin" title="Linkedin"></i></a></li>
                              <?php
                                 }
                                 if($instagram_link){
                              ?>
                                 <li><a href="<?php echo esc_url($instagram_link); ?>"><i class="fa fa-instagram" title="Instagram"></i></a></li>
                              <?php
                                 }
                              ?>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>

            <?php
                  }
                  wp_reset_postdata();
               }
            ?>

            </div>
         </div>
      </section>
      <!-- Team Area End -->
     
      <!-- Testimonials Area Start -->
      <section class="testimonial-area pb-100 pt-100" id="testimonials">
         <div class="container">
            <div class="row section-title white-section">
               <div class="col-md-6 text-right">
                  <h3><span><?php the_field('testimonial_subheading', 'option'); ?></span><?php the_field('testimonial_heading', 'option'); ?></h3>
               </div>
               <div class="col-md-6">
                  <p><?php the_field('testimonial_description', 'option'); ?></p>
               </div>
            </div>
         </div>
         <div class="container-fluid">
            <div class="row">
               <div class="col-md-12">
                  <div class="testimonials owl-carousel">

                  <?php 
                     $args = array(
                        'post_type' => 'testimonials',
                        'posts_per_page' => 4,
                        'order' => 'ASC',
                        'orderby' => 'menu_order',
                     );
                     $query = new WP_Query($args);
                     if($query -> have_posts()){
                        while($query -> have_posts()){
                           $query -> the_post();
                           $designation = get_field('designation');
                           $testimonial_description = get_field('testimonial_description');

                  ?>

                     <div class="single-testimonial">
                        <div class="testi-img">
                           <img src="<?php the_post_thumbnail_url(); ?>" alt="" />
                        </div>
                        <p>" <?php echo $testimonial_description; ?> "</p>
                        <h4><?php the_title(); ?> <span><?php echo $designation ?></span></h4>
                     </div>

                  <?php
                        }
                        wp_reset_postdata();
                     }
                  ?>

                     
                  
                  <?php
                  ?>
                  
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- Testimonilas Area End -->

      <!-- Latest News Area Start -->
      <section class="blog-area pb-100 pt-100" id="blog">
         <div class="container">
            <div class="row section-title">
               <div class="col-md-6 text-right">
                  <h3><span>
                     <?php 
                        if(class_exists('ACF')){
                           echo esc_attr(the_field('blog_subheading', 'option')); 
                     ?></span>
                     <?php 
                           echo esc_attr(the_field('blog_heading', 'option')); 
                        
                     ?></h3>
               </div>
               <div class="col-md-6">
                  <p><?php 
                        echo esc_attr(the_field('blog_description', 'option')); 
                     }
                  ?></p>
               </div>
            </div>
            <div class="row">

            <?php 
               $args = array(
                  'post_type' => 'post',
                  'posts_per_page' => 3,
                  'order' => 'ASC',
                  'orderby' => 'menu_order',
               );
               $query = new WP_Query($args);
               if($query -> have_posts()){
                  while($query -> have_posts()){
                     $query -> the_post();

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
                              <?php echo esc_url(the_author_posts_link()); ?> / 
                              <?php echo esc_url(the_category(', ')); ?>
                        </div>
                        <p><?php echo esc_url(the_excerpt()); ?></p>
                        <a href="<?php echo esc_url(the_permalink()); ?>" class="box-btn">read more <i class="fa fa-angle-double-right"></i></a>
                     </div>
                  </div>
               </div>

            <?php
                  }
                  wp_reset_postdata();
               }
            ?>
               

            </div>
         </div>
      </section>
      <!-- Latest News Area End -->
      
<?php get_footer(); ?>