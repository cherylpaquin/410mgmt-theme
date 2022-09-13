<div class="section-4">
	<div class="container-xxl">
		<div class="row">
			<div id="title" class="col-lg-5">
				<h1><?php the_field('our-team_title', 'option');?></h1>
				<p><?php the_field('our-team_blurb', 'option');?></p>
			</div>
			<div id="cards" class="row col-md-12 row-cols-1 row-cols-md-2 row-cols-lg-3 g-4 mx-0 px-0">
				<?php if (have_rows('team', 'option')): ?>
					<?php while (have_rows('team', 'option')): the_row();?>
						<div class="col">
							<div class="card h-100 team-member">
								<div class="row col-sm-12 justify-content-center align-items-center">
									<div class="team-photo col-sm-5">
										<div class="profile-pic" style="background-image: url('<?php the_sub_field('team_photo');?>'); ">
										</div>
									</div>
									<div class="team-bio col-sm-auto">
										<div class="card-body team-info">
											<p class="bio-copy"> <span class="lead upper"><?php the_sub_field('name');?></span><br>
											<?php the_sub_field('job_title');?></p>
										</div>
									</div>
								</div>
							</div>
						</div>
					<?php endwhile;?>
				<?php endif;?>
			</div>
		</div><!-- .row-->
	</div><!-- .container-->
</div><!-- .section-4-->
