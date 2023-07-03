<?php get_header(); ?>

<div class="main main-raised">
	<div class="section">
		<div class="container">
			<div class="row tim-row">
				<div class="col-md-6 col-md-offset-3">
					<?php  if ( have_posts() ) { while ( have_posts() ) { the_post(); ?>
					<div class="content-single">
						<?php the_post_thumbnail( 'full', array('alt' => 'Responsive image','class' => 'img-thumbnail') );?>
						<div class="separar"></div>
						<?php the_content(); ?>
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