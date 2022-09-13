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
			<div id="artist-list" class="row col-md-7">
				<div class="list-group artist-group">
					<div>
					<?php if( have_rows('list_of_artists', 'option')):
						while( have_rows('list_of_artists', 'option')) : the_row(); ?>
							<a href="<?php the_sub_field('artist_link'); ?>" target="_blank" class="artist-item list-group-item list-group-item-action">
								<p class="artist-name"><?php the_sub_field('artist_name'); ?></p>
							</a>
					<?php endwhile;
					endif; ?>
					</div>
				</div>
			</div><!-- #artist-list -->
		</div><!-- .row -->
	</div><!-- .container-xxl-->
</div><!-- .section-3 -->
