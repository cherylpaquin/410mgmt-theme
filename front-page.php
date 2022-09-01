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
$backgroundImg = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full');
?>

<div id="content">
  <div id="hero" class="hero-banner d-flex flex-column justify-content-center" style="background: url('<?php echo $backgroundImg[0]; ?>') no-repeat;">
    <div class="container-xxl">
      <div class="row justify-content-center">
        <div class="col-sm-8">
          <header class="main-header d-flex flex-column align-items-center">
              <?php the_post();?>
              <!-- Title -->
                <h1 class="display-1">
                  <a href="" class="typewrite" data-period="2000" data-type='[ "410", "Tour", "Production", "Travel", "Project" ]'>
                    <span class="wrap"></span>
                  </a>MGMT
                </h1>
                <div style="width: 80%; height: 1px; background: linear-gradient(90deg, rgba(255,255,255,0) 0%, rgba(255,255,255,1) 25%, rgba(255,255,255,1) 75%, rgba(255,255,255,0) 100%);" class="my-2" ></div>
              <!-- Subtitle -->
              <p class="lead"><?php bloginfo('description');?></p>
          </header><!-- .main-header -->
          </div><!-- .col-sm-8 -->
        </div><!-- .row -->
      </div>
    </div>
  <div id="feat-artists">
    <!-- Featured Artists Section -->
    <?php get_template_part('template-parts/featuredartists');?>
  </div>
  <div id="what-we-do">
    <!-- What We Do -->
    <?php get_template_part('template-parts/whatwedo');?>
  </div>
  <!-- Ready to Work CTA -->
  <?php get_template_part('template-parts/calltoaction');?>
  <div id="our-work">
    <!-- Our Work -->
    <?php get_template_part('template-parts/ourwork');?>
  </div>
  <div id="our-team">
  <!-- Our Team -->
    <?php get_template_part('template-parts/ourteam');?>
  </div>
  <div id="contact">
    <!-- Contact -->
    <?php get_template_part('template-parts/contact');?>
  </div>

</div><!-- #content -->

<?php
get_footer();
