<?php get_header(); ?>

<div class="section">
	<div class="container">
		<h2 class="text-center uppercase"><?php single_cat_title(); ?></h2>
	</div>
</div>


<div class="main ma">
	<div class="section">
		<div class="container">
			<div class="row">
				<?php if(have_posts()) { while(have_posts()) { the_post(); ?>
				<div class="col-md-4 col-sm-4 post-item">
					<figure class="imghvr-hinge-left">
						<?php the_post_thumbnail( 'full', array('alt' => 'Responsive image','class' => 'img-responsive') );?>
						<figcaption>
							<h3><?php the_title(); ?></h3>
						</figcaption>
							<a href="<?php the_permalink(); ?>"></a>
						</figure>
				</div>
				<?php } } ?>
			</div>
			<ul class="pagination">
				<?php wpbeginner_numeric_posts_nav(); ?>
			</ul>
		</div>
	</div>
</div>

</div><!-- Wrapper -->



<?php get_footer(); ?>