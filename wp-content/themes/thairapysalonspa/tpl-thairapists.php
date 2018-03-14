<?php 
/* Template Name: Thairapists */ 
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
</section>

<section class="bg-grey no-padding">
<?php $args = array(
	'posts_per_page'   => -1,
	'offset'           => 0,
	'category'         => '',
	'category_name'    => '',
	'orderby'          => 'menu_order',
	'order'            => 'DESC',
	'include'          => '',
	'exclude'          => '',
	'meta_key'         => '',
	'meta_value'       => '',
	'post_type'        => 'thairapist',
	'post_mime_type'   => '',
	'post_parent'      => '',
	'author'	   => '',
	'author_name'	   => '',
	'post_status'      => 'publish'
);
$posts_array = get_posts( $args );

$post_count = 1;

foreach ($posts_array as $post) : 
  setup_postdata($post); 
?>

<?php
  $thairapist_name = get_field('thairapist_name');
  $thairapist_skill = get_field('thairapist_skill');
  $thairapist_photo = get_field('thairapist_photo');

  $thairapist_details = '';

  if( have_rows('thairapist_details') ):
    
    while ( have_rows('thairapist_details') ) : 
      the_row();
      
      $thairapist_details.= '<p><strong>' . get_sub_field('thairapist_detail_heading') . ':</strong><br>' . get_sub_field('thairapist_detail_paragraph') . '</p>';
    endwhile;
?>
<div class="container<?php if($post_count > 1) { echo ' border-top-grey-light'; } ?>">
    <div class="row">
      <div class="col-md-3<?php if($post_count % 2 === 0) { echo ' col-md-push-9'; } ?> no-padding">
        <div class="text-light<?php if($post_count % 2 === 0) { echo ' text-right'; } ?> text-center-mobile"><img class="img-responsive img-responsive-mobile" src="<?php echo $thairapist_photo; ?>" alt="<?php echo $thairapist_name; ?>"></div>
      </div>
      <div class="col-md-9<?php if($post_count % 2 === 0) { echo ' col-md-pull-3'; } ?> bg-grey">
        <div class="small-padding">
        	<h3><?php echo $thairapist_name; ?> [<?php echo strtoupper($thairapist_skill); ?>]</h3>
            <?php echo $thairapist_details; ?>
        </div>
      </div>
    </div>
  </div>
<?php
  endif;
  $post_count++;
endforeach;
?>
</section>

<!-- make appointment open --> 
<?php include (TEMPLATEPATH . '/components/make-appointment.php'); ?>
<!-- make appointment close -->

<?php get_footer(); ?>