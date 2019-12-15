<?php get_header(); ?>
<?php get_template_part('/templates/banner');?>

  <div class="page-section project-portfolio">
      <?php
        $cols = 0;
        $rows = 0;
        while(have_posts()) {
          the_post();
          $beforeImg = get_field_object('before_image'); 
          $afterImg  = get_field_object('after_image');
          $overview = get_field_object('overview');

          $beforeAlt = $beforeImg['value']['alt']; 
          $afterAlt  = $afterImg['value']['alt']; 

          $beforeSrc = $beforeImg['value']['url'];
          $afterSrc  = $afterImg['value']['url'];
          $cols += 1;
          $rows += 1;
           
          if (($cols % 2) != 0) { ?>
            <div class="colu two-cols" style="margin-bottom: 2em;">
          <?php }
        ?>
          <div class="rowu two-cols" style="flex-direction: column; flex: 1;">
          <h2 style="background: none" class="headline--post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
          <div class="rast"> 
            <img src="<?php echo $beforeSrc;?>" alt="<?php echo $beforeAlt;?>">
            <img src="<?php echo $afterSrc;?>" alt="<?php echo $afterAlt;?>">
            <?php the_excerpt();?>
          </div>
          <p class="project-portfolio__blurb"><?php echo get_the_excerpt(); ?></p>
          <p><a class="btn btn--green" href="<?php the_permalink(); ?>">View Project</a></p>
        </div>
        <?php 
          if (($rows % 2) == 0){ ?>
            </div>
        <?php }   
         } echo paginate_links(); ?>
  </div>


<?php get_footer(); ?>