 <h2 class="headline headline--small-plus">Recent Posts <i class="fa fa-paperclip"></i></h2>
  <?php 
    $homepageBlog = new WP_Query(array(
      'posts_per_page' => 2
    ));
    while($homepageBlog->have_posts()) {
      $homepageBlog->the_post(); ?>

      <!-- single-post -->
      <div class="post">
        <a class="t-center c-dark" href="<?php the_permalink(); ?>">
          <span ><?php the_time('M d, Y'); ?></span> 
        </a>
        <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?> </a></h3>
        <p>
          <?php
            if (has_excerpt()) { 
              echo get_the_excerpt();
            } else {
                echo wp_trim_words(get_the_content(), 18);
            }
          ?>
        </p>
        <a href="<?php the_permalink(); ?>" class="nu gray">Read more</a>
      </div>
      <!-- END OF single-post-->

      <?php  } wp_reset_postdata(); ?>
      
      <p class="t-center no-margin" style="margin-top: 2em"><a href="<?php echo site_url('/blog'); ?>" class="btn btn--green">More Posts</a></p>