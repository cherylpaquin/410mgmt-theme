<div class="call-to-action">
	<div class="container-xxl">
		<div class="row justify-content-center align-items-center">
			<div class="col-sm-6">
				<h1 class="display-1" style="display: inline-flex;">
					<?php if( have_rows('intro_text', 'option') ): 
					  $i = 1;
					    echo '<div class="carousel slide carousel-fade" data-bs-touch="false" data-bs-ride="carousel">
					      <div class="carousel-inner">';

					        while( have_rows('intro_text', 'option') ): the_row(); ?>

					          <div class="carousel-item <?php if($i == 1) echo 'active'; ?>">
					            <span style="color: #02498E;"><?php the_sub_field('intro_title', 'option'); ?></span>
					          </div>
					          <?php $i++;

					        endwhile;
					        echo '</div>
					    </div>';
				  	endif; ?>
				  	MGMT
				</h1>
			</div>
			<div class="col-sm-6">
				<h1><?php the_field('cta_title', 'option'); ?></h1>
				<a href="#contact"><button class="contact-primary"><?php the_field('cta_label', 'option'); ?></button></a>
			</div>
		</div>
	</div>
</div>