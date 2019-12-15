<?php get_header(); ?>

<?php get_template_part('/templates/banner');?>
  <div class="container page-section">
    <?php
      while(have_posts()) {
        the_post(); ?>
      <div class="post-item">
        <h2 class="headline--post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        <div class="generic-content">
          <?php the_excerpt(); ?>
          <p><a class="btn " href="<?php the_permalink(); ?>">Read more</a></p>
        </div>
      </div>
    <?php } 
      echo paginate_links();
    ?>
  </div>

<?php get_footer(); ?>