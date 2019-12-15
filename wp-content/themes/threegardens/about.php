<?php /* Template Name: About */ ?>

<?php get_header();?>

  <?php 
    while(have_posts()) {
      the_post(); 
      get_template_part('/templates/banner');
    ?>
      <div class="page-section"><?php get_template_part('/templates/about/about-intro'); ?></div>
      <div class="page-section"><?php get_template_part('/templates/about/meet-alan'); ?></div>
      <div class="page-section"><?php get_template_part('/templates/about/areas-of-operation'); ?></div>
      <div class="page-section"><?php get_template_part('/templates/about/how-we-work'); ?></div>

<?php } ?>

<?php get_footer();?>