<?php
  if (is_front_page()) { ?>
    <div class="page-banner page-banner__bg-image" style="background-image: url('<?php echo get_theme_file_uri('/images/garden-hero.jpg');?>');">
      <div class="page-banner__content t-center c-white intro overlay">
        <h1 class="headline headline--large"><?php bloginfo();?></h1>
        <h2 class="headline headline--medium"><?php bloginfo('description');?></h2>
        <h3 class="headline headline--small">Residential • Strata • Commercial</h3>
        <a href="#" class="btn btn--large btn--green popmake-356">Get Quote</a>
      </div>
    </div>

  <?php } else { ?>
    <div class="page-banner page-banner__bg-image" style="background-image: url(<?php echo get_theme_file_uri('images/about-hero.jpg'); ?>">
      <div class="page-banner__content container">
        <h1 class="page-banner__title page-banner__title--white overlay">
        <?php
          if (is_blog()) {
            echo "Blog";
          }
          if (is_page()) {
            the_title();
          }
          if (get_post_type() == 'service') {
            echo 'Services';
          }
          if (get_post_type() == 'project') {
            echo 'Projects';
          }
        ?>
        </h1>
      </div>  
    </div>
<?php } ?>
