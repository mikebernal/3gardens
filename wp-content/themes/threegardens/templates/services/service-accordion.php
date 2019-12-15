<?php
  while(have_posts()) {
    the_post();
    $relationship = get_field('types');
    foreach($relationship as $rel) {
    $service = get_the_title();
    // Service type of the current services loop
    $type = get_the_title($rel);
    if ($currentType == $type) { ?>
      <h3><?php the_title(); ?></h3>
      <div>
        <?php echo get_the_excerpt();?>
        <br><br>
        <a class="nu gray" href="<?php the_permalink();?>">Learn more</a>
      </div>
    <?php }
    }

  } wp_reset_postdata();
?>