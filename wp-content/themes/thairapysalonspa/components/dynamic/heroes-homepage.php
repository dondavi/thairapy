<section id="section-slider" aria-label="section-slider" class="fullwidthbanner-container">
  <div id="revolution-slider">
    <ul>
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
      'post_type'        => 'homepage_hero',
      'post_mime_type'   => '',
      'post_parent'      => '',
      'author'	   => '',
      'author_name'	   => '',
      'post_status'      => 'publish'
    );
    $posts_array = get_posts( $args );
      
    foreach ($posts_array as $post) : 
      setup_postdata($post);
      $hero_img = get_field('hero_background_image');
    ?>
      <li data-transition="fade" data-slotamount="10" data-masterspeed="800" data-thumb=""> 
        <img src="<?php echo $hero_img['url']; ?>" alt="">
        <!--<img src="<?php //echo $hero_img['sizes']['small']; ?>" data-sizes="xl" data-srcset="<?php //echo $hero_img['url']; ?>" alt="">-->
        <div class="tp-caption big-white sfb" data-x="center" data-y="260" data-speed="1000" data-start="800" data-easing="easeInOutExpo" data-endspeed="450">
        <?php echo get_field('hero_sub_heading'); ?>
        </div>
        <div class="tp-caption ultra-big-white sfb" data-x="center" data-y="190" data-speed="1200" data-start="600" data-easing="easeInOutExpo" data-endspeed="400"><?php echo get_field('hero_heading'); ?></div>
        <div class="tp-caption sfb" data-x="center" data-y="320" data-speed="1000" data-start="1100" data-easing="easeInOutExpo">
        <?php if(get_field('include_a_cta_button') === 'yes'): ?>
          <a href="<?php echo get_field('cta_button_link'); ?>" class="btn-slider"><?php echo get_field('cta_button_label'); ?></a>
        <?php endif; ?>
        </div>
      </li>
    <?php
      endforeach;
    ?>
    </ul>
  </div>
</section>
