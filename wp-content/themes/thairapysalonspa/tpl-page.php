<?php 
/* Template Name: Standard Page */ 
?>
<?php get_header(); ?>

<!-- header open --> 
<?php include (TEMPLATEPATH . '/components/nav-primary.php'); ?>
<!-- header close -->

<!-- hero open --> 
<?php include (TEMPLATEPATH . '/components/hero.php'); ?>
<!-- hero close -->

<section class="condense bg-color-white">
  <div class="container">
    <div class="row">
      <div class="col-md-1 mt10">&nbsp;</div>
      <div class="col-md-10 mt10">
        <?php echo wpautop(apply_filters('the_content', $post->post_content), true); ?>
      </div>
      <div class="col-md-1 mt10">&nbsp;</div>
    </div>
  </div>
  <?php if(get_field('body_class') && get_field('body_class') === 'page-about') { ?>
  <?php include (TEMPLATEPATH . '/components/dynamic/testimonials.php'); ?>
  <?php } ?>
</section>

<!-- services open --> 
<?php if(get_field('body_class') && get_field('body_class') === 'page-services') { ?>
<?php include (TEMPLATEPATH . '/components/dynamic/services.php'); ?>
<?php } ?>
<!-- services close -->

<!-- thairapists open --> 
<?php if(get_field('body_class') && get_field('body_class') === 'page-thairapists') { ?>
<?php include (TEMPLATEPATH . '/components/thairapists.php'); ?>
<?php } ?>
<!-- thairapists close -->

<!-- make appointment open --> 
<?php include (TEMPLATEPATH . '/components/make-appointment.php'); ?>
<!-- make appointment close -->
  
<?php get_footer(); ?>
