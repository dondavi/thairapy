<section id="section-testimonial-2" aria-label="section-testimonial-2">
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <ul class="testimonial-list big-font wow fadeIn" data-wow-delay=".25s">
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
      'post_type'        => 'testimonial',
      'post_mime_type'   => '',
      'post_parent'      => '',
      'author'	   => '',
      'author_name'	   => '',
      'post_status'      => 'publish'
    );
    $posts_array = get_posts( $args );
      
    foreach ($posts_array as $post) : 
      setup_postdata($post);
      $the_testimonial = get_field('client_tesimonial');
    ?>
      <li><?php echo $the_testimonial; ?></li>
    <?php
      endforeach;
    ?>
        </ul>
      </div>
    </div>
  </div>
</section>