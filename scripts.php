<a href="#" data-target="html" class="scroll-to-target scroll-to-top"><i class="icon-right-arrow-2"></i></a>
<script src="<?php echo SITE_URL; ?>/assets/vendors/jquery/jquery-3.5.1.min.js"></script>
<script src="<?php echo SITE_URL; ?>/assets/vendors/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?php echo SITE_URL; ?>/assets/vendors/jarallax/jarallax.min.js"></script>
<script src="<?php echo SITE_URL; ?>/assets/vendors/jquery-ajaxchimp/jquery.ajaxchimp.min.js"></script>
<script src="<?php echo SITE_URL; ?>/assets/vendors/jquery-appear/jquery.appear.min.js"></script>
<script src="<?php echo SITE_URL; ?>/assets/vendors/jquery-circle-progress/jquery.circle-progress.min.js"></script>
<script src="<?php echo SITE_URL; ?>/assets/vendors/jquery-magnific-popup/jquery.magnific-popup.min.js"></script>
<script src="<?php echo SITE_URL; ?>/assets/vendors/jquery-validate/jquery.validate.min.js"></script>
<script src="<?php echo SITE_URL; ?>/assets/vendors/nouislider/nouislider.min.js"></script>
<script src="<?php echo SITE_URL; ?>/assets/vendors/odometer/odometer.min.js"></script>
<script src="<?php echo SITE_URL; ?>/assets/vendors/swiper/swiper.min.js"></script>
<script src="<?php echo SITE_URL; ?>/assets/vendors/tiny-slider/tiny-slider.min.js"></script>
<script src="<?php echo SITE_URL; ?>/assets/vendors/wnumb/wNumb.min.js"></script>
<script src="<?php echo SITE_URL; ?>/assets/vendors/wow/wow.js"></script>
<script src="<?php echo SITE_URL; ?>/assets/vendors/isotope/isotope.js"></script>
<script src="<?php echo SITE_URL; ?>/assets/vendors/countdown/countdown.min.js"></script>
<script src="<?php echo SITE_URL; ?>/assets/vendors/owl-carousel/owl.carousel.min.js"></script>
<script src="<?php echo SITE_URL; ?>/assets/vendors/twentytwenty/twentytwenty.js"></script>
<script src="<?php echo SITE_URL; ?>/assets/vendors/twentytwenty/jquery.event.move.js"></script>
<script src="<?php echo SITE_URL; ?>/assets/vendors/parallax/parallax.min.js"></script>
<script src="<?php echo SITE_URL; ?>/assets/vendors/tilt.js/tilt.jquery.js"></script>

<script src="<?php echo SITE_URL; ?>/assets/js/agriox.js"></script>
<script>
  $(window).on("scroll", function () {
    if ($(".stricked-menu").length) {
      var headerScrollPos = 130;
      var stricky = $(".stricked-menu");
      if ($(window).scrollTop() > headerScrollPos) {
        stricky.addClass("stricky-fixed");
      } else if ($(this).scrollTop() <= headerScrollPos) {
        stricky.removeClass("stricky-fixed");
      }
    }
    if ($(".scroll-to-top").length) {
      var strickyScrollPos = 100;
      if ($(window).scrollTop() > strickyScrollPos) {
        $(".scroll-to-top").fadeIn(500);
      } else if ($(this).scrollTop() <= strickyScrollPos) {
        $(".scroll-to-top").fadeOut(500);
      }
    }
  });</script>