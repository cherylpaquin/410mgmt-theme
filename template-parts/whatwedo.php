<div class="section-2">
	<div class="container-xxl">
		<div class="row">
			<div id="title" class="col-lg-6">
				<h1><?php the_field('what_we_do_title', 'option'); ?></h1>
				<p><?php the_field('services_blurb', 'option'); ?></p>
			</div>
			<div id="cards" class="row col-md-12 row-cols-1 row-cols-md-3 g-4">
				<?php if( have_rows('services', 'option')):
					while( have_rows('services', 'option')) : the_row(); ?>
						<div class="col">
							<div class="card h-100 service" style="background-image: url('<?php the_sub_field('service_image'); ?>');">
								<div class="card-body service d-flex align-items-start flex-column">
									<h4 class="service-title mt-auto"><?php the_sub_field('service_title'); ?></h4>
									<div class="list"><?php the_sub_field('service_description'); ?></div>
								</div>
							</div>
						</div>
				<?php endwhile;
				endif; ?>
			</div>
		</div>
	</div>
</div>

