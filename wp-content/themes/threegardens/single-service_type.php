<?php 

 get_header();

  while(have_posts()) {
    the_post(); ?>
    
    <?php get_template_part('/templates/banner');?>

    <div class="container page-section">
      <h2 class="headline--post-title"><?php the_title();?></h2>
      <div class="generic-content ">
        
          <?php the_content(); ?>
        </div>
    </div>
    
  <?php }

 get_footer();

?>