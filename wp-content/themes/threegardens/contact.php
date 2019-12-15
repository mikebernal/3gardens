<?php /* Template Name: Contact */ ?>

<?php get_header();?>
<?php 
  while(have_posts()) {
    the_post(); ?>

<?php get_template_part('/templates/banner');?>

<div class="page-section">
  <h2 class="headline headline--small-plus green">Let's Work Together</h2>
  <div class="two-cols page-section">
    <div class="one-third">
      <div style="background: none;padding: .5em 0 0 .5em;">
        <p style="font-weight:bold">Address</p>
        <p>1 / 80 Mill Point Rd<br>South Perth WA 6151</p>
        <br>
        <div>
          <p style="font-weight:bold">Trading hours</p>
          <ul style="list-style-type: none;padding: 0;">
            <li>Mon - Fri: 9:00 AM - 7:00 PM</li>
            <li>Sat- Sun: 9:00AM - 11:00 AM</li>
          </ul>
        </div>
        <p><span><i class="fa fa-phone info-ico"></i><a href="tel:+61414906263" style="color: #000">0417 906 263</a></span><br>
        <span><i class="fa fa-envelope info-ico"></i><a href="mailto:alan@3gardens.com.au" style="color: #000">alan@3gardens.com.au</a></span></p>
        
      </div>
    </div>
    <div class="two-thirds">
      <div class="generic-content"><?php the_content();?></div>
    </div>
  </div>


</div>

<?php } ?>
<?php get_footer();?>
