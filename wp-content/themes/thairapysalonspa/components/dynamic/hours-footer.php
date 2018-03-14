<?php $args = array(
	'posts_per_page'   => 100,
	'offset'           => 0,
	'category'         => '',
	'category_name'    => '',
	'orderby'          => 'date',
	'order'            => 'DESC',
	'include'          => '',
	'exclude'          => '',
	'meta_key'         => '',
	'meta_value'       => '',
	'post_type'        => 'hours',
	'post_mime_type'   => '',
	'post_parent'      => '',
	'author'	   => '',
	'author_name'	   => '',
	'post_status'      => 'publish',
	'suppress_filters' => true 
);
$posts_array = get_posts( $args );

foreach ($posts_array as $post) : setup_postdata($post);
  $hoursoutput = 'closed';
  if (get_field('open_this_day') === 'yes') {
    $hoursoutput = get_field('open_from') . ' ' . get_field('open_from_ampm') . ' &ndash; ' . get_field('open_until') . ' ' . get_field('open_until_ampm');
  }
  ?>
  <li><span class="pull-left"><?php echo get_the_title($post); ?></span><span class="pull-right"><?php echo $hoursoutput; ?></span>
    <div class="clearfix"></div>
  </li>
<?php
endforeach; 
wp_reset_postdata();
?>
