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

<div class="container-fluid">
  <div class="hero-banner row align-items-center justify-content-center" style="background: url('<?php echo $backgroundImg[0]
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
                <!-- .main-header -->
      </header>
    </div>
  </div>
</div>

<div id="content" class="site-content container py-5 mt-5">
  <div id="primary" class="content-area">
    <div class="gtco-testimonials">
  <h2>Testimonials Carousel - Cards Comments</h2>
  <div class="owl-carousel owl-carousel1 owl-theme">
    <div>
      <div class="card text-center"><img class="card-img-top" src="https://images.unsplash.com/photo-1572561300743-2dd367ed0c9a?crop=entropy&cs=tinysrgb&fit=crop&fm=jpg&h=300&ixid=eyJhcHBfaWQiOjF9&ixlib=rb-1.2.1&q=50&w=300" alt="">
        <div class="card-body">
          <h5>Ronne Galle <br />
            <span> Project Manager </span>
          </h5>
          <p class="card-text">“ Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil
            impedit quo minus id quod maxime placeat ” </p>
        </div>
      </div>
    </div>
    <div>
      <div class="card text-center"><img class="card-img-top" src="https://images.unsplash.com/photo-1588361035994-295e21daa761?crop=entropy&cs=tinysrgb&fit=crop&fm=jpg&h=301&ixid=eyJhcHBfaWQiOjF9&ixlib=rb-1.2.1&q=50&w=301" alt="">
        <div class="card-body">
          <h5>Missy Limana<br />
            <span> Engineer </span>
          </h5>
          <p class="card-text">“ Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil
            impedit quo minus id quod maxime placeat ” </p>
        </div>
      </div>
    </div>
    <div>
      <div class="card text-center"><img class="card-img-top" src="https://images.unsplash.com/photo-1575377222312-dd1a63a51638?crop=entropy&cs=tinysrgb&fit=crop&fm=jpg&h=302&ixid=eyJhcHBfaWQiOjF9&ixlib=rb-1.2.1&q=50&w=302" alt="">
        <div class="card-body">
          <h5>Martha Brown<br />
            <span> Project Manager </span>
          </h5>
          <p class="card-text">“ Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil
            impedit quo minus id quod maxime placeat ” </p>
        </div>
      </div>
    </div>
    <div>
      <div class="card text-center"><img class="card-img-top" src="https://images.unsplash.com/photo-1549836938-d278c5d46d20?crop=entropy&cs=tinysrgb&fit=crop&fm=jpg&h=303&ixid=eyJhcHBfaWQiOjF9&ixlib=rb-1.2.1&q=50&w=303" alt="">
        <div class="card-body">
          <h5>Hanna Lisem<br />
            <span> Project Manager </span>
          </h5>
          <p class="card-text">“ Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil
            impedit quo minus id quod maxime placeat ” </p>
        </div>
      </div>
    </div>
  </div>
</div>

    <!-- Hook to add something nice -->
    <?php bs_after_primary(); ?>

    <div class="row">
      <div class="col-md-12">

        <main id="main" class="site-main">

          <div class="entry-content">
            <!-- Content -->
            <?php the_content(); ?>
            <!-- .entry-content -->
            <?php wp_link_pages(array(
              'before' => '<div class="page-links">' . esc_html__('Pages:', 'bootscore'),
              'after'  => '</div>',
            ));
            ?>
          </div>

          <footer class="entry-footer">

          </footer>
          <!-- Comments -->
          <?php comments_template(); ?>

        </main><!-- #main -->

      </div><!-- col -->
    </div><!-- row -->

  </div><!-- #primary -->
</div><!-- #content -->

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
    </script>

<?php
get_footer();
