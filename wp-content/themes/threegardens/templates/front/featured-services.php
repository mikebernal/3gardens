<h2 class="headline headline--small-plus" >Featured Services <i class="fa fa-leaf" aria-hidden="true"></i></h2>

<!-- card-holder -->
<div class="card-holder">
<?php 
  $homepageServices = new WP_Query(array(
    'posts_per_page' => 4,
    'post_type'      => 'service',
    'orderby'        => 'rand'
  ));
  while($homepageServices->have_posts()) {
    $homepageServices->the_post(); ?>

    <div class="card">
      <h3 class="card__title"><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h3>

      <div class="card__image">
        <img src="<?php the_post_thumbnail_url('thumbnail'); ?>" alt="<?php the_title();?>">
        <!-- <img src="https://via.placeholder.com/300x175" alt="teaser"> -->
      </div>

      <p class="card__blurb">
        <?php
          if (has_excerpt()) { 
            echo get_the_excerpt();
          } else {
              echo wp_trim_words(get_the_content(), 13);
          }
        ?>
      </p>
      <p class="card__cta"><a href="<?php the_permalink();?>" class="nu gray ">Learn more</a></p>

    </div>

<?php } wp_reset_postdata(); ?>

</div>
<!-- END OF card-holder -->

<div class="t-center"><a href="<?php echo get_post_type_archive_link('service');?>" class="btn btn--green">View All Services</a></div>