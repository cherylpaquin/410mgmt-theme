<h1 class="display-1">
<?php if( have_rows('intro_text', 'option') ): 
  $i = 1;
    echo '<div class="carousel slide carousel-fade" data-bs-ride="carousel">
      <div class="carousel-inner">';

        while( have_rows('intro_text', 'option') ): the_row(); ?>

          <div class="carousel-item <?php if($i == 1) echo 'active'; ?>">
            <span style="color: #02498E;"><?php the_sub_field('intro_title', 'option'); ?></span>MGMT
          </div>
          <?php $i++;

        endwhile;
        echo '</div>
    </div>';
  endif; ?>
</h1>

