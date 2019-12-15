<?php 

 get_header();

  while(have_posts()) {
    the_post();
    
    $overview    = get_field_object('overview');
    $theBrief    = get_field_object('the_brief');
    $ourSolution = get_field_object('our_solution');
    $beforeImg   = get_field_object('before_image');
    $afterImg    = get_field_object('after_image');
    
    $overviewLbl    = $overview['label'];
    $theBriefLbl    = $theBrief['label'];
    $ourSolutionLbl = $ourSolution['label'];

    $overviewVal    = $overview['value'];
    $theBriefVal    = $theBrief['value'];
    $ourSolutionVal = $ourSolution['value'];

    $beforeAlt = $beforeImg['value']['alt'];
    $afterAlt  = $afterImg['value']['alt'];

    $beforeSrc = $beforeImg['value']['url'];
    $afterSrc  = $afterImg['value']['url'];
    
    ?>

    <?php get_template_part('/templates/banner');?>

    <div class="container page-section">
      <p style="padding-bottom: 1em;"><a class="metabox__blog-home-link" href="<?php echo get_post_type_archive_link('project'); ?>"><i class="fa fa-home" aria-hidden="true"></i> Projects</a> <i class="fa fa-arrow-right"></i><span class="metabox__main"><?php the_title();?></span></p>
      <h2 class="headline--post-title"><?php the_title();?></h2>
      <div>
        <div class="generic-content">

          <div class="page-section">
            <p><strong><?php echo $overviewLbl;?></strong> <i class="fa fa-tree" style="font-size: 36px;"></i></p>
            <?php echo $overviewVal;?>
          </div>

          <div class="page-section">
            <img src="<?php echo $beforeSrc;?>" alt="<?php echo $beforeAlt;?>">
          </div>
          
          <div class="page-section">
            <p><strong><?php echo $theBriefLbl;?></strong> <i class="fa fa-tasks" style="font-size: 36px;"></i></p>
            <?php echo $theBriefVal;?>
          </div>

          <div class="page-section">
            <p><strong><?php echo $ourSolutionLbl;?></strong> <i class="fa fa-cubes" style="font-size: 36px;"></i></p>
            <?php echo $ourSolutionVal;?>
          </div>

          <div class="page-section">
            <img src="<?php echo $afterSrc;?>" alt="<?php echo $afterAlt?>">
          </div>
          <p><a class="btn btn--green popmake-356" href="#">Request a Quote </a></p>
        </div>
      </div>
    </div>
    
  <?php }

 get_footer();

?>