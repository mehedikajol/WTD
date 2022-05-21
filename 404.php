<?php
/*
    Template Name: Page Template
*/

get_header(); ?>

<section class="breadcumb-area">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="breadcumb">
                    <h4>404 - Page Not Found!</h4>
                    <ul>
                        <li><a href="<?php echo site_url(); ?>">Home</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="page-area pt-100 pb-100">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="page-tempalte">
                    <h2>
                        Sorry.<br><br>
                        Something went wrong with this link!
                    </h2>
                    <?php the_content(); ?>
                </div>
            </div>
            <div class="col-md-4">
                <?php
                    if(is_active_sidebar( 'sidebar-1' )){
                        dynamic_sidebar( 'sidebar-1' );
                    }
                ?>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>