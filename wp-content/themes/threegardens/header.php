<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset');?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head(); ?>
</head>
<body <?php body_class();?> name="top">
  <div class="container">
    <header class="site-header">
      <div class="info-bar">
        <span><i class="fa fa-phone info-ico"></i><a href="tel:+61414906263" style="color: #fff">0417 906 263</a></span>
        <span><i class="fa fa-calendar info-ico"></i>Mon - Fri 9:00 AM - 7:00 PM</span>
        <span><i class="fa fa-envelope info-ico"></i><a href="mailto:alan@3gardens.com.au" style="color: #fff">alan@3gardens.com.au</a></span>
        
        <div class="site-footer__col-four" style="width: 150px">
          <nav>
            <ul class="min-list" style=" display: flex;flex-direction: row; justify-content: space-between;">
              <li><a href="#"><i class="fa fa-facebook" aria-hidden="true" style="color: white;"></i></a></li>
              <li><a href="#"><i class="fa fa-twitter" aria-hidden="true" style="color: white;"></i></a></li>
              <li><a href="#"><i class="fa fa-youtube" aria-hidden="true" style="color: white;"></i></a></li>
              <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true" style="color: white;"></i></a></li>
              <li><a href="#"><i class="fa fa-instagram" aria-hidden="true" style="color: white;"></i></a></li>
            </ul>
          </nav>
        </div>
        <!-- END OF site-footer__col-four -->
        
      </div>
      <!-- END OF info-bar -->

      <div class="main-menu">
        <h1 class="site-logo"><a href="<?php echo site_url(); ?>">3 Gardens</a></h1>
        <span class="js-search-trigger site-header__search-trigger" ><i class="fa fa-search" aria-hidden="true"></i></span>
        <i class="site-header__menu-trigger fa fa-bars" aria-hidden="true"></i>

        <div class="site-header__menu group">
          <nav class="main-navigation">
          <!-- header.php -->
          <!-- WordPress dynamic menu -->
          <!-- <?php
            wp_nav_menu(array(
              'theme_location' => 'headerMenuLocation'
            ));
          ?> -->

            <ul >
              <li <?php if (is_page('about') or wp_get_post_parent_id(0) == 18) echo 'class="current-menu-item"'; ?>><a href="<?php echo site_url('/about'); ?>">About</a></li>
              <li <?php if (is_page('services') or get_post_type() == 'service') echo 'class="current-menu-item"'; ?>><a href="<?php echo get_post_type_archive_link('service'); ?>">Services</a></li>
              <li <?php if (is_page('projects') or wp_get_post_parent_id(0) == 18) echo 'class="current-menu-item"'; ?>><a href="<?php echo site_url('/projects'); ?>">Projects</a></li>
              <li <?php if (is_page('contact') or wp_get_post_parent_id(0) == 77) echo 'class="current-menu-item"'; ?>><a href="<?php echo site_url('/contact'); ?>">Contact</a></li>
              <li <?php if (get_post_type() == 'post') echo 'class="current-menu-item"'; ?>><a href="<?php echo site_url('/blog'); ?>">Blog</a></li>
            </ul>
            
          </nav>
          <div class="site-header__util">
            <?php 
              if (is_user_logged_in()) { ?>
                <a href="<?php echo wp_logout_url();?>" class="btn btn--small  btn--dark-orange float-left">Log Out</a>
              <?php } else { ?>
                <a href="<?php echo esc_url(site_url('/wp-login.php'));?>" class="btn btn--small btn--orange float-left push-right">Login</a>
                <a href="<?php echo esc_url(site_url('/wp-signup.php'));?>" class="btn btn--small  btn--dark-orange float-left">Sign Up</a>
            <?php }
            ?>
            
            <span class="search-trigger js-search-trigger"><i style="color: black"class="fa fa-search" aria-hidden="true"></i></span>
          </div>
          <!-- END OF site-header__util -->

        </div>
        <!-- END OF site-header__menu group -->

      </div>
      <!-- END OF main-menu -->
    </header>
