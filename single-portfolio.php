<?php get_header(); ?>
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

<section class="portfolio-single pt-100 pb-100">
    <div class="container">
        <div class="row">
            <div class="col-xl-8">
                <h2><?php echo esc_attr(the_title()); ?></h2>
                <img src="<?php echo esc_url(the_post_thumbnail_url()); ?>" alt="">
                <?php the_content(); ?>
                <div class="row">
                    <div class="col-xl-12">
                        <h4>project gallery</h4>
                    </div>
                    
                    <?php
                        if(class_exists('ACF')){
                            $gallerys = get_field('project_gallery');
                            foreach($gallerys as $gallery){
                            ?>
                                <div class="col-xl-4">
                                    <div class="project-gallery">
                                    <img src="<?php echo esc_url($gallery['url']); ?>" alt="">
                                    </div>
                                </div>
                            <?php
                            }
                        }
                    ?>
                   
                </div>
                <br><br>
                <div class="row">
                   <div class="col-xl-12">
                        <h4>project overview</h4>
                        <?php the_field('project_video'); ?>                     
                   </div>
                </div>
            </div>
            <div class="col-xl-4">
                <div class="portfolio-sidebar">
                    <h4>Technology Used</h4>
                    <ul>
                        <?php 
                            if(class_exists('ACF')){
                                $techs = get_field('project_technologies');
                                foreach($techs as $tech){
                                ?>
                                <li>
                                    <i class="fa fa-arrow-right"></i> <?php echo esc_attr($tech['tech_name']); ?>
                                </li>
                                <?php 
                                    }
                            }
                        ?>   
                    </ul>
                </div>
                <div class="portfolio-sidebar">
                    <h4>project features</h4>
                    <ul>
                        <?php 
                            if(class_exists('ACF')){
                                $features = get_field('project_features');
                                foreach($features as $feature){
                            ?>
                                <li><i class="fa fa-arrow-right"></i> <?php echo esc_attr($feature['project_feature']); ?></li>
                            <?php 
                                }
                            }
                        ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>