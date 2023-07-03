<?php get_header(); ?>

<section>
	<div class="container">
		<?php  if ( have_posts() ) { while ( have_posts() ) { the_post(); ?>
		<div class="row">
			<div class="col-md-12">
				<h1 class="uppercase text-center"><?php the_title(); ?></h1>
			</div>
		</div>
		<div class="separar"></div>
		<div class="row">
            <div class="col-md-6 col-md-offset-3">
            	<?php the_post_thumbnail( 'full', array('alt' => '<?php the_title(); ?>','class' => 'img-responsive') );?>
	            <h5 class="date-post text-center"><small><!-- FECHA -->
	            	<?php
 
						$dias = array("Domingo","Lunes","Martes","Miercoles","Jueves","Viernes","Sábado");
						$meses = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
						 
						echo $dias[date('w')]." ".date('d')." de ".$meses[date('n')-1]. " del ".date('Y') ;
						//Salida: Viernes 24 de Febrero del 2012
						 
						?>
	            </small></h5>
            </div>
        </div>
        <div class="separar"></div>
        <div class="row">
        	<div class="col-md-12">
        		<?php the_content(); ?>
        	</div>
        </div>
		<?php } } ?>
	</div>
</section>


<section>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<?php
					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
				endif; ?>
			</div>
		</div>
	</div>
</section>

<?php get_footer(); ?>