<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      
      <?php wp_head(); ?>
   </head>
   <body <?php body_class(); ?>>
	   <section class="header-top">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-sm-12">
						<div class="header-left">

                     <?php 
                        if(class_exists('ACF')){
                           $email = get_field('email', 'option');
                           $phone = get_field('phone_number', 'option');
                           if($email){
                        ?>
                           <a href="mailto:<?php echo esc_attr($email); ?>">
                              <i class="fa fa-envelope"></i> <?php echo esc_attr($email); ?>
                           </a>
                        <?php 
                           }
                           if($phone){
                        ?>
                           <a href="tel:<?php echo esc_attr($phone); ?>">
                              <i class="fa fa-phone"></i> <?php echo esc_attr($phone); ?>
                           </a>
                        <?php
                           }
                        }
                     ?>
							
						</div>
					</div>
					<div class="col-md-6 col-sm-12 text-right">
						<div class="header-social">

                     <?php 
                        if(class_exists('ACF')){
                           $socials = get_field('header_socials', 'option');
                           foreach($socials as $social){
                        ?>
                           <a href="<?php echo esc_url($social['icon_link']);?>"><i class="fa <?php echo esc_attr($social['icon']);?>"></i></a>
                        <?php
                           }
                        }
                     ?>

						</div>
					</div>
				</div>
			</div>
	   </section>
      <!-- Header Area Start -->
      <header class="header header-fixed">
         <div class="container">
            <div class="row">
               <div class="col-xl-12">
                  <nav class="navbar navbar-expand-md navbar-light">
                     <a class="navbar-brand" href="<?php echo esc_url(site_url()); ?>">halim</a>
                     <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                     <span class="navbar-toggler-icon"></span>
                     </button>
                     <div class="collapse navbar-collapse ml-auto mainmenu justify-content-end" id="navbarNav">
                        
                     <!-- NAVIGATION MENU -->
                     <?php 
                        wp_nav_menu(array(
                           'theme_location' => 'primary_menu',
                           'menu_class' => 'navbar-nav ml-auto',
                        ));
                     ?>

                     </div>
                  </nav>
               </div>
            </div>
         </div>
      </header>
      <!-- Header Area Start -->