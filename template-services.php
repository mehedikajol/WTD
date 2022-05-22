<?php 

/*
   Template Name: Services Template
*/

get_header();?>

<section class="breadcumb-area">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="breadcumb">
                    <h4>Our <?php the_title(); ?></h4>
                    <ul>
                        <li><a href="<?php echo site_url(); ?>">Home</a></li> / 
                        <li><?php the_title(); ?></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Services Area Start -->
<section class="services-area pt-100 pb-50" id="services">
         <div class="container">
            <div class="row">
               <?php 
                  if(class_exists('ACF')){
                     $services_options = get_field('services_options');
                     foreach($services_options as $services_option){
                  ?>
                     <div class="col-lg-4 col-md-6">
                        <!-- Single Service -->
                        <div class="single-service">
                           <i class="fa <?php echo esc_attr($services_option['service_icon']); ?>"></i>
                           <h4><?php echo esc_attr($services_option['service_title']); ?></h4>
                           <p><?php echo esc_attr($services_option['service_details']); ?></p>
                        </div>
                     </div>
                  <?php
                     }
                  }
               ?>            
            </div>
         </div>
      </section>
      <!-- Services Area End -->
<?php get_footer();?>