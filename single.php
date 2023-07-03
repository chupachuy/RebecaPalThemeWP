<?php get_header(); ?>

<?php
$post = $wp_query->post;

if ( in_category(215) ) {
  include( TEMPLATEPATH.'/templates/single-masletras.php' );
} else if(in_category(216)){
    include( TEMPLATEPATH.'/templates/single-galerias.php' );
}else if(in_category(218)){
	 include( TEMPLATEPATH.'/templates/single-videos.php' );
}else {
  include( TEMPLATEPATH.'/templates/single-frases.php' );
}
?>

<?php get_footer(); ?>