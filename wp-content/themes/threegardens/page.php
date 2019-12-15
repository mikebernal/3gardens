<?php 

  get_header(); 

  while(have_posts()) {
    the_post(); ?>

  <?php get_template_part('/templates/banner');?>


    <div>

    <?php
    $theParent = wp_get_post_parent_id(get_the_ID());
      if ($theParent) { ?>
        <div class="metabox metabox--position-up metabox--with-home-link">
          <p><a class="metabox__blog-home-link" href="<?php echo get_permalink($theParent); ?>"><i class="fa fa-home" aria-hidden="true"></i> Back to <?php echo get_the_title($theParent); ?></a> <span class="metabox__main"><?php echo the_title(); ?></span></p>
        </div>
    <?php }
    ?>

    <?php
      $testArray = get_pages(array(
        'child_of' => get_the_ID()
      ));

      if ($theParent or $testArray) {
        if ($theParent) {
          $findChildrenOf = $theParent;
        } else {
          $findChildrenOf = get_the_ID();
        }
      }
    } wp_reset_postdata(); // End while
    ?>
      <div class="generic-content">
        <p><?php the_content(); ?></p>
        <div>
          <?php  
            if (is_page('services')) {
              $services = new WP_Query(array(
                'post_type'     => 'service',
                'posts_per_page' => -1
              ));
              while($services->have_posts()) {
                $services->the_post(); ?>

                <li><?php the_title(); ?></li>

            <?php }
            }
          ?>
        </div>
      </div>

    </div>


<?php  get_footer(); ?>