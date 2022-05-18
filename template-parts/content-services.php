<!-- Services Area Start -->
<section class="services-area pt-100 pb-50" id="services">
    <div class="container">
    <div class="row section-title">
        <div class="col-md-6 text-right">
            <h3><span>who we are?</span> our services</h3>
        </div>
        <div class="col-md-6">
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry typesetting industry.d </p>
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
                $service_icon = get_field('service_icon');
    ?>

        <div class="col-lg-4 col-md-6">
            <!-- Single Service -->
            <div class="single-service">
                <i class="<?php echo $service_icon;?>"></i>
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