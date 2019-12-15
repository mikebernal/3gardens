<?php get_header();

  while(have_posts()) {
    the_post();
    get_template_part('/templates/banner');
  ?>
    <div class="container page-section">
    <p style="padding-bottom: 1em;"><a class="metabox__blog-home-link" href="<?php echo get_post_type_archive_link('post'); ?>"><i class="fa fa-home" aria-hidden="true"></i> Blog</a> <i class="fa fa-arrow-right"></i><span class="metabox__main"><?php the_title();?></span></p>
      <div style="margin: 2em 0;">
        <p>Posted by <?php the_author_posts_link();?> on <?php the_time('Y M d'); ?> in <?php echo get_the_category_list(', '); ?></p>
      </div>
      <h2 class="headline--post-title"><?php the_title();?></h2>
      <div class="generic-content ">
        <?php the_post_thumbnail(); ?>
        <?php the_content(); ?>
        </div>
    </div>
    
  <?php }

 get_footer();

?>