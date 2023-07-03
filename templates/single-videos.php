<?php get_header(); ?>

<div class="main main-raised">
	<div class="section">
	<h1 class="text-center uppercase"><?php the_title(); ?></h1>
	<div class="separar"></div>
		<div class="container">
			<div class="row tim-row">
				<?php  if ( have_posts() ) { while ( have_posts() ) { the_post(); ?>
				<div class="col-md-6 col-md-offset-3">
					<div class="content-single">
						<div class="videoyoutube">
						<iframe width="100%" height="315" src="https://www.youtube.com/embed/<?php echo get_post_meta($post->ID, 'youtube', true); ?>" frameborder="0" allowfullscreen></iframe>
					</div>
					</div>
				</div>
				<?php } } ?>
			</div>
			<div class="separar"></div>
			<div class="separar"></div>
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