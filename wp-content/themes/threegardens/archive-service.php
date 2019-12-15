<?php get_header(); ?>
<?php get_template_part('/templates/banner'); ?> 
<?php 
  $serviceType = new WP_Query(array(
    'post_type' => 'service_type',
    'posts_per_page' => -1,
    'orderby' => 'date',
    'order' => 'ASC'
  ));
?>
<div class="page-section">
<?php
  while($serviceType->have_posts()) {
    $serviceType->the_post(); 

    // Current service type
    $currentType = get_the_title(); ?>

      <div class="post-item">
        <h2><?php the_title(); ?></h2>
        <div class="generic-content">
          <?php the_content(); ?>
        </div>
        <div class="two-cols">
          <div class="service-list two-thirds">
            <p>Our <?php the_title(); ?> include but are not limited to:</p>
            <div class="accordion">
              <?php include( locate_template( '/templates/services/service-accordion.php', false, false ) );  ?>
            </div>
            <!-- End of accordion -->
          </div>
          <!-- End of service-list two-thirds -->
          <?php get_template_part('/templates/services/service-mini-form'); ?>
      </div>
     <!-- End of two-cols -->
    </div>
      <!-- End of post-item -->
    <?php } wp_reset_postdata(); ?>

    </div>
<?php get_footer(); ?>