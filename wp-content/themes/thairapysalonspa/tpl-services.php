<?php 
/* Template Name: Services Page */ 
?>
<?php get_header(); ?>

<!-- header open --> 
<?php include (TEMPLATEPATH . '/components/nav-primary.php'); ?>
<!-- header close -->

<!-- hero open --> 
<?php include (TEMPLATEPATH . '/components/hero.php'); ?>
<!-- hero close -->

<!-- content open -->
<div id="content" class="no-bottom no-top">
  
  <!-- service open --> 
  <?php 
  if(get_field('body_class')) {
    include (TEMPLATEPATH . '/components/' . get_field('body_class') . '.php');
  } ?>
  <!-- service close -->
  
  <!-- make appointment open --> 
  <?php include (TEMPLATEPATH . '/components/make-appointment.php'); ?>
  <!-- make appointment close -->
    
</div>
<!-- content close -->

<?php get_footer(); ?>
