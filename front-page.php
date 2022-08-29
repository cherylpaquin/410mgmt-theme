<?php

/**
 * The template for Front Page
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Bootscore
 */

get_header();
$backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );
?>

<div id="content" class="container-fluid">
  <div id="hero" class="hero-banner row align-items-center justify-content-center" style="background: url('<?php echo $backgroundImg[0]
; ?>') no-repeat;">
    <div class="col-sm-8">
      <header class="main-header">
          <?php the_post(); ?>
          <!-- Title -->
            <h1 class="display-1">
              <a href="" class="typewrite" data-period="2000" data-type='[ "410", "Tour", "Production", "Travel", "Project" ]'>
                <span class="wrap"></span>
              </a>MGMT
            </h1>
          <!-- Subtitle -->
          <p class="lead"><?php bloginfo('description'); ?></p>
      </header><!-- .main-header -->
      <script src="https://cpwebassets.codepen.io/assets/common/stopExecutionOnTimeout-1b93190375e9ccc259df3a57c1abc0e64599724ae30d7ea4c6877eb615f89387.js"></script>
      <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
      <script id="rendered-js">
        (function () {
          "use strict";

          var carousels = function () {
            $(".owl-carousel1").owlCarousel({
              loop: true,
              center: true,
              margin: 0,
              responsiveClass: true,
              nav: false,
              responsive: {
                0: {
                  items: 1,
                  nav: false },

                680: {
                  items: 2,
                  nav: false,
                  loop: false },

                1000: {
                  items: 3,
                  nav: true } } });



          };

          (function ($) {
            carousels();
          })(jQuery);
        })();
        //# sourceURL=pen.js
        </script><!-- #rendered-js -->
      </div><!-- .col-sm-8 -->
    </div><!-- #hero -->
  <div id="feat-artists">
    <!-- Featured Artists Section -->
    <?php get_template_part('template-parts/featuredartists') ?>
  </div>
  <div id="what-we-do">
    <!-- What We Do -->
    <?php get_template_part('template-parts/whatwedo') ?>
  </div>

  <!-- Ready to Work CTA -->
  <?php get_template_part('template-parts/featuredartists') ?>

  <!-- Our Work -->
  <?php get_template_part('template-parts/featuredartists') ?>

  <!-- Our Team -->
  <?php get_template_part('template-parts/featuredartists') ?>

  <!-- Contact -->
  <?php get_template_part('template-parts/featuredartists') ?>

</div><!-- #content -->

<?php
get_footer();
