<?php
  $projects = new WP_Query(array(
    'post_type' => 'project',
    'posts_per_page' => 3
  ));
?>
<?php
  while($projects->have_posts()) {
    $projects->the_post(); 
    $image = get_field_object('after_image');
    $url = $image['value']['url'];
?>
    <div class="hero-slider__slide" style="background-image: url(<?php echo $url;?>);background-size: cover; background-position: center">
      <div class="hero-slider__interior">
        <div class="hero-slider__overlay">
          <h2 class="headline headline--medium t-center"><?php the_title();?></h2>
          <div class="t-center"><?php echo get_the_excerpt();?></div>
          <p class="t-center" style="margin-top: 2em">
            <a href="<?php the_permalink();?>" class="btn btn--green">View Project</a>
          </p>
        </div>
      </div>
    </div>
  <?php } wp_reset_postdata(); ?>