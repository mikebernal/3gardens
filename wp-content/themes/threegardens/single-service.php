<?php 

 get_header();

  while(have_posts()) {
    the_post(); ?>
    
    <?php get_template_part('/templates/banner');?>

    <div class="container page-section">
      <p style="padding-bottom: 1em;"><a class="metabox__blog-home-link" href="<?php echo get_post_type_archive_link('service'); ?>"><i class="fa fa-home" aria-hidden="true"></i> Services</a> <i class="fa fa-arrow-right"></i><span class="metabox__main"><?php the_title();?></span></p>
      <h2 class="headline--post-title"><?php the_title();?></h2>
      <div class="generic-content">
        <?php the_post_thumbnail();?>
        <div class="page-section">
          <?php the_content(); ?>
          <p><a class="btn btn--green popmake-356" href="#">Request a Quote</a></p>
        </div>

      </div>
    </div>
    
  <?php }

 get_footer();

?>