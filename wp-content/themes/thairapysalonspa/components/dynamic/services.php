<section class="condense">
  <div class="container">
    <div class="row">
<?php $args = array(
  'posts_per_page'   => -1,
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
<div class="col-md-4 col-sm-6 col-xs-6 text-center">
  <div class="picframe">
    <a href="<?php echo $block_url; ?>">
      <span class="overlay">
        <span class="pf_text copy-white">
          <span class="project-name"><?php echo $block_sub_heading; ?></span>
        </span>
      </span>
    </a>
    <img src="<?php echo $block_image; ?>" alt="<?php echo $block_heading; ?>">
  </div>
  <div class="spacer-single"></div>
  <h3><?php echo $block_heading; ?></h3>
  <div class="spacer-half"></div>
</div>
<?php endforeach; ?>
        
      <div class="clearfix"></div>
    </div>
  </div>
</section>
