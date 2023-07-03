<?php 

/* Template Name: Contact page */ 

?>

<?php get_header(); ?>

<section>
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <h1 class="text-center uppercase">Contacto</h1>
        <div class="separar"></div>
        <div class="separar"></div>
        <?php echo do_shortcode('[contact-form-7 id="4497" title="Contact form 1"]'); ?>
      </div>
    </div>
  </div>
</section>


<?php get_footer(); ?>