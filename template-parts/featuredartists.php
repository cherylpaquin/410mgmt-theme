<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/owl.carousel.min.css">
<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/owl.theme.default.min.css">

<div style="background: #fff;">
  <div class="container-xxl">
    <div class="row">
      <div class="col-12 py-5">
        <h1 class="light">Featured Artists</h1>
        <div class="owl-carousel owl-theme">
          <?php 
          $images = get_field('logos', 'option');
          if( $images ): ?>
            <?php foreach( $images as $image ): ?>
                <div class="artist">
                  <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                </div>
            <?php endforeach; ?>
          <?php endif; ?>
        </div>
      </div>
      <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery.mousewheel.min.js"></script>
      <script>
        $(document).ready(function() {
          var owl = $('.owl-carousel');
          owl.owlCarousel({
            loop: true,
            nav: true,
            margin: 10,
            responsive: {
              0: {
                items: 1
              },
              600: {
                items: 2
              },
              960: {
                items: 3
              },
            }
          });
          owl.on('mousewheel', '.owl-stage', function(e) {
            if (e.deltaY > 0) {
              owl.trigger('next.owl');
            } else {
              owl.trigger('prev.owl');
            }
            e.preventDefault();
          });
        })
      </script>
    </div>
  </div>
</div>