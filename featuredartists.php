<div class="row" style="background: #fff;">
  <!-- Start Photo Slider -->
    <?php
    $property_images = get_field('logos', 'option');
    if( $property_images ) { ?>
    <div class="owl-carousel owl-theme">
      <div class="item">
      <?php foreach( $property_images as $property_image ): ?>
        <img src="<?php echo $property_image['url']; ?>" alt="<?php echo $property_image['alt']; ?>" />
      <?php endforeach; ?>
      </div>
    </div>
    <!-- End Photo Slider -->
</div>

<?php get_template_part('template-parts/featuredartists') ?>
