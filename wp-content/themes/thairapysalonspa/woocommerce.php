<?php get_header(); ?>

<!-- header open --> 
<?php include (TEMPLATEPATH . '/components/nav-primary.php'); ?>
<!-- header close -->

<!-- hero open --> 
<?php include (TEMPLATEPATH . '/components/hero.php'); ?>
<!-- hero close -->

<!-- content open -->
<div id="content" class="no-bottom no-top">

  <?php woocommerce_content(); ?>

</div>
<!-- content close -->

<?php get_footer(); ?>
