<div style="background: #fff;">
  <div class="container-xxl">
    <div class="row">
      <div class="col-12 py-5">
        <h1 class="light">Featured Artists</h1>
        <div class="owl-carousel owl-theme">
          <?php $images = get_field('logos', 'option');?>
            <?php if ($images): ?>
              <?php foreach ($images as $image): ?>
                  <div class="artist">
                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                  </div>
              <?php endforeach;?>
          <?php endif;?>
        </div>
      </div>
    </div>
  </div>
</div>
