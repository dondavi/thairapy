<?php

foreach ($featured_posts_array as $post) : 
  setup_postdata($post);

  $featured_item_is = get_field('featured_item_is');

  $heading = get_field('heading');
  $body = get_field('body');

  $featured_image = get_field('featured_image');

  $feature_links_to = get_field('feature_links_to');
  $internal_thairapy_page = get_field('internal_thairapy_page');

  $link = '<br><br>';
  if($feature_links_to === 'nothing'):
    $link = '';
  endif;

  if($feature_links_to === 'internal'):
    $link.= '<a href="' . get_permalink($internal_thairapy_page[0]) . '" class="btn btn-line-white btn-big">';
  endif;

  if($feature_links_to === 'external'):
    $link.= '<a href="' . get_field('link') . '" class="btn btn-line-white btn-big">';
  endif;

  if($feature_links_to === 'youtube' || $feature_links_to === 'vimeo'):
    $link.= '<a href="' . get_field('link') . '" class="btn btn-line-white btn-big popup-' . $feature_links_to . '">';
  endif;

  if($feature_links_to === 'image'):
    $link.= '<a href="' . get_field('uploaded_image') . '" class="btn btn-line-white btn-big image-popup-vertical-fit">';
  endif;

  $link_button_label = get_field('link_button_label');

  if($featured_item_is === 'textonly') :
    $featured_content_output = '';
    $featured_content_output.= '<div class="col-md-4 text-middle" data-bgimage="url(' . get_template_directory_uri() . '/framework/dist/img/background/bg-salon-homepage.jpg)">';
    $featured_content_output.= '<div class="padding40">';
    $featured_content_output.= '<div class="box-icon"><i class="fa fa-star wow zoomIn" data-wow-delay=".25s"></i>';
    $featured_content_output.= '<div class="text">';
    $featured_content_output.= '<h4>' . $heading . '</h4>';
    $featured_content_output.= '<p>' . $body;
    $featured_content_output.= $link . $link_button_label . '</a>';
    $featured_content_output.= '</p>';
    $featured_content_output.= '</div>';
    $featured_content_output.= '</div>';
    $featured_content_output.= '</div>';
    $featured_content_output.= '</div>';
  endif;

  if($featured_item_is === 'imageonly') :
    $featured_content_output = '';
    $featured_content_output.= '<div class="col-md-4 text-middle" data-bgimage="url(' . $featured_image['sizes']['large'] . ')">';
    $featured_content_output.= '<div class="padding40">';
    $featured_content_output.= '<div class="box-icon"><i class="fa fa-star wow zoomIn" data-wow-delay=".25s"></i>';
    $featured_content_output.= '<div class="text">';
    $featured_content_output.= '<p>';
    $featured_content_output.= $link . $link_button_label . '</a>';
    $featured_content_output.= '</p>';
    $featured_content_output.= '</div>';
    $featured_content_output.= '</div>';
    $featured_content_output.= '</div>';
    $featured_content_output.= '</div>';
  endif;

  if($featured_item_is === 'textandimage') :
    $featured_content_output = '';
    $featured_content_output.= '<div class="col-md-4 text-middle" data-bgimage="url(' . get_template_directory_uri() . '/framework/dist/img/background/bg-salon-homepage.jpg)">';
    $featured_content_output.= '<div class="padding40">';
    $featured_content_output.= '<div class="box-icon"><i class="fa fa-star wow zoomIn" data-wow-delay=".25s"></i>';
    $featured_content_output.= '<div class="text">';
    $featured_content_output.= '<h4>' . $heading . '</h4>';
    $featured_content_output.= '<p>' . $body . '<img src="' . $featured_image['sizes']['custom-size'] . '" class="img-responsive">';
    $featured_content_output.= $link . $link_button_label . '</a>';
    $featured_content_output.= '</p>';
    $featured_content_output.= '</div>';
    $featured_content_output.= '</div>';
    $featured_content_output.= '</div>';
    $featured_content_output.= '</div>';
  endif;

endforeach;

echo $featured_content_output;
?>
