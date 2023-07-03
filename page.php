<?php get_header(); ?>


<div class="separar"></div>

<?php  if ( have_posts() ) { while ( have_posts() ) { the_post(); ?>

	<div class="container text-center">
		<div class="row">
    		<h1 class="uppercase"><?php the_title(); ?></h1>	
    	</div>
    	<div class="separar"></div>
    	<div class="row">
            <div class="col-md-6 col-md-offset-3">
            	<?php the_post_thumbnail( 'full', array('alt' => '<?php the_title(); ?>','class' => 'img-responsive') );?>
            </div>
        </div>
	</div>
	<div class="separar"></div>
	<div class="separar"></div>
	<div class="container text-center">
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8">
				<?php the_content(); ?>
			</div>
		</div>
	</div>

<?php } } ?>



<?php get_footer(); ?>