<div class="section-3">
	<div class="container-xxl">
		<div class="row">
			<div id="title" class="col-md-5 work-description">
				<div class="h-100 d-flex flex-column justify-content-center">
					<h1><?php the_field('our-work_title', 'option'); ?></h1>
					<p><?php the_field('our-work_section-blurb', 'option'); ?></p>
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/Globe.png" class="mt-auto mx-auto" style="height: 200px; width: 200px;">
				</div>
			</div><!-- #title -->
			<div id="artist-list" class="row col-md-7 mx-auto">
				<div class="artist-group swiper p-0 p-md-2">
					<div class="swiper-wrapper">
						<?php if( have_rows('list_of_artists', 'option')): ?>
							<?php while( have_rows('list_of_artists', 'option')) : the_row(); ?>
							<?php $artist_link = get_sub_field('artist_link'); ?>
								<a href="<?= $artist_link ? $artist_link : "javascript:void(0);"; ?>" <?= $artist_link ?  'target="_blank"' : "";?> class="artist-item swiper-slide">
									<p class="artist-name"><?php the_sub_field('artist_name'); ?></p>
								</a>
							<?php endwhile;?>
						<?php endif; ?>
					</div>
				</div>
			</div><!-- #artist-list -->
		</div><!-- .row -->
	</div><!-- .container-xxl-->
</div><!-- .section-3 -->
