<?php get_header(); ?>
<?php
  while(have_posts()) {
    the_post(); 
    get_template_part('/templates/banner');
 ?>
  <div class="blurb"><?php the_content(); ?></div>
  <?php } wp_reset_postdata(); ?>
  <div class="section-break"><?php get_template_part('/templates/front/featured-services');?></div>
  <div class="section-break"><?php get_template_part('/templates/front/blog-section');?></div>
  <div class=" hero-slider"><?php get_template_part('/templates/front/hero-slider'); ?></div>
<?php get_footer(); ?>