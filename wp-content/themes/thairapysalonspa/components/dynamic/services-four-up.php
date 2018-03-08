<section id="section-services" class="text-light" data-stellar-background-ratio=".2">
<div class="container">
<div class="row wow fadeIn">
<div class="col-md-6 col-md-offset-3 text-center">
<h1>Thairapy Services</h1>
<div class="small-border wow zoomIn" data-wow-delay=".3s" data-wow-duration=".3s"></div>
<div class="spacer-single"></div>
</div>
<div class="clearfix"></div>  
<?php $args = array(
  'posts_per_page'   => 4,
  'offset'           => 0,
  'category'         => '',
  'category_name'    => '',
  'orderby'          => 'menu_order',
  'order'            => 'ASC',
  'include'          => '',
  'exclude'          => '',
  'meta_key'         => '',
  'meta_value'       => '',
  'post_type'        => 'services_block',
  'post_mime_type'   => '',
  'post_parent'      => '',
  'author'	   => '',
  'author_name'	   => '',
  'post_status'      => 'publish'
);
$posts_array = get_posts( $args );

foreach ($posts_array as $post) : 
  setup_postdata($post);
  $block_heading = get_field('block_heading');
  $block_sub_heading = get_field('block_sub_heading');
  $block_url = get_field('block_url');
  $block_image = get_field('block_image');
?>
<div class="col-md-3 col-sm-4 col-xs-6">
  <div class="service-item">
    <a href="<?php echo $block_url; ?>">
      <img src="<?php echo $block_image; ?>" alt="<?php echo $block_heading; ?>" class="pic-grey wow zoomIn" data-wow-delay="1.1s" />
    <h3><?php echo $block_heading; ?></h3>
    </a>
  </div>
</div>
<?php endforeach; ?>
</div>
</div>
</section>