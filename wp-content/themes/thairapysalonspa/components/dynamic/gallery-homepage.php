<section id="section-gallery" aria-label="section-gallery" class="no-top no-bottom">
  <div id="gallery" class="gallery zoom-gallery gallery-6-cols wow fadeInRightBig">
<?php $args = array(
	'posts_per_page'   => 1,
	'offset'           => 0,
	'category'         => '',
	'category_name'    => '',
	'orderby'          => 'menu_order',
	'order'            => 'ASC',
	'include'          => '',
	'exclude'          => '',
	'meta_key'         => '',
	'meta_value'       => '',
	'post_type'        => 'gallery',
	'post_mime_type'   => '',
	'post_parent'      => '',
	'author'	   => '',
	'author_name'	   => '',
	'post_status'      => 'publish'
);
$posts_array = get_posts( $args );


foreach ($posts_array as $post) : 
  setup_postdata($post); 
?>

<?php 

$images = get_field('gallery_photos');

if( $images ): ?>
  <?php foreach( $images as $image ): ?>
  <div class="item haircut">
    <div class="picframe pic-grey">
      <a href="<?php echo $image['url']; ?>">
        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
      </a>
    </div>
  </div>
  <?php endforeach; ?>
<?php endif; ?>

<?php
endforeach;
?>
</div>
</section>