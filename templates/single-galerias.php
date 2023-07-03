<?php get_header(); ?>

<div class="main main-raised">
	<div class="section">
	<h2 class="text-center uppercase"><?php the_title(); ?></h2>
		<div class="container">
			<div class="row tim-row">
				<div class="col-md-12">
					<?php  if ( have_posts() ) { while ( have_posts() ) { the_post(); ?>
					<div class="content-single">
						<h2 class="single-title"><?php the_content(); ?></h2>
					</div>
					<?php } } ?>
				</div>
			</div>
			<div class="row tim-row">
				<div class="col-md-10 col-md-offset-1 posts-home">
					<?php
						// If comments are open or we have at least one comment, load up the comment template.
						if ( comments_open() || get_comments_number() ) :
							comments_template();
					endif; ?>
				</div>
			</div>
		</div>
	</div>
</div>

<?php get_footer(); ?>