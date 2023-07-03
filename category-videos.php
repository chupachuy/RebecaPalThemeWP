<?php get_header(); ?>
<div class="main main-raised">
	<div class="section">
		<h1 class="text-center uppercase"><?php single_cat_title(); ?></h2>
		<div class="container">
			<div class="row">
				<?php if(have_posts()) { while(have_posts()) { the_post(); ?>
				<div class="col-md-6 videos">
					<div class="videoyoutube">
						<iframe width="100%" height="315" src="https://www.youtube.com/embed/<?php echo get_post_meta($post->ID, 'youtube', true); ?>" frameborder="0" allowfullscreen></iframe>
					</div>
					<div class="separar"></div>
					<p class="script-font text-center"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
				</div>
				<?php } } ?>
			</div>
		</div>
		<ul class="pagination">
			<?php wpbeginner_numeric_posts_nav(); ?>
		</ul>
	</div>
</div>


</div><!-- Wrapper -->



<?php get_footer(); ?>