<?php get_header(); ?>

<?php get_template_part('/templates/banner');?>
  <div class="page-section">
    <?php
      while(have_posts()) {
        the_post(); ?>
      <div class="post-item">
        <h2 class=" headline--post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        
        <div style="margin: 2em 0;">
          <p>Posted by <?php the_author_posts_link();?> on <?php the_time('Y M d'); ?> in <?php echo get_the_category_list(', '); ?></p>
        </div>

        <div class="generic-content">
          <?php the_excerpt(); ?>
          <p><a class="btn btn--green" href="<?php the_permalink(); ?>">Continue reading &raquo;</a></p>
        </div>
      </div>
    <?php } 
      echo paginate_links();
    ?>
  </div>

<?php get_footer(); ?>