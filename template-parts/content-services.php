<!-- Services Area Start -->
<section class="services-area pt-100 pb-50" id="services">
    <div class="container">
    <div class="row section-title">
        <div class="col-md-6 text-right">
            <?php
                if(class_exists('ACF')){
                    $service_heading = get_field('service_heading', 'option');
                    $service_subheading = get_field('service_subheading', 'option');  
                    
                ?>
                <h3><span><?php echo esc_attr($service_subheading); ?></span><?php echo esc_attr($service_heading); ?></h3>
                <?php 
                } 
            ?>
            </div>
            <div class="col-md-6">
                <p><?php
                if(class_exists('ACF')){
                    $service_description = get_field('service_description', 'option');
                    echo esc_attr($service_description); 
                }
                ?></p>
            </div>
    </div>
    <div class="row">

    <?php
        $args = array(  
            'post_type' => 'services',
            'posts_per_page' => 6, 
            'order' => 'ASC',
            'orderby' => 'menu_order',
        );
        $query = new WP_Query($args);
        if($query -> have_posts()){
            while($query -> have_posts()){
                $query -> the_post();
                if(class_exists('ACF')){
                    $service_icon = get_field('service_icon');
                }
    ?>

        <div class="col-lg-4 col-md-6">
            <!-- Single Service -->
            <div class="single-service">
                <i class="<?php echo esc_attr($service_icon);?>"></i>
                <h4><?php the_title();?></h4>
                <p><?php the_content();?></p>
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
<!-- Services Area End -->