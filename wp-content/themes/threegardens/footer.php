<div class="page-section">
  <?php if (!is_page('privacy-policy')) { ?>
    <a href="#top" class="nu gray" style="float: right"><i class="fa fa-arrow-up"></i> Back to top</a>
  <?php } ?>
</div>

<footer class="site-footer t-center">

  <div class="col-one">
    <p><a class="nu" href="<?php echo site_url(); ?>">3Gardens © 2019</a> </p>
    <p>All rights reserved.</p>
  </div>

  <div class="col-two">
    <ul style="list-style-type: none;padding:0;">
      <li style="margin-bottom: 1em;"><a class="nu" href="<?php echo site_url('/privacy-policy'); ?>">Privacy Policy</a></li>
      <li><a  class="nu" href="<?php echo site_url('/terms-and-conditions'); ?>">Terms and Conditions</a></li>
    </ul>
  </div>

  <div class="col-three">
    <h3 class="headline headline--small">Follow us</h3>
    <ul class="min-list social-icons-list" >
      <li><a href="#" class="social-color-facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
      <li><a href="#" class="social-color-twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
      <li><a href="#" class="social-color-youtube"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
      <li><a href="#" class="social-color-linkedin"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
      <li><a href="#" class="social-color-instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
    </ul>
  </div>


</footer>

<div class="search-overlay search-overlay">
  <div class="search-overlay__top">
    <div class="container">
      <i class="fa fa-search search-overlay__icon" aria-hidden="true"></i>
      <input type="text" class="search-term" placeholder="What are you looking for?" id="search-term">
      <i class="fa fa-window-close search-overlay__close" aria-hidden="true"></i>

    </div>
  </div>
</div>
</div>
<!-- END OF container -->

<?php wp_footer(); ?>
</body>
</html>