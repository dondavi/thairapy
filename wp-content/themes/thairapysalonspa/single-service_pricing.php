<?php 
/* Template Name: Services Page Dynamic */ 
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
$service_pricing_output = '';
$service_pricing_id = get_field('get_service_pricing_from', get_the_ID());

$single_post = get_post($service_pricing_id);
if ($single_post) :
  setup_postdata($single_post);
?>
 
  <section class="bg-grey condense" id="<?php echo get_field('body_class'); ?>" aria-label="services-hair">
  <div class="container">
    <div class="row">
     
     
     <?php
      if( have_rows('services_pricing', $service_pricing_id) ):
      while ( have_rows('services_pricing', $service_pricing_id) ) : the_row();

      if( get_row_layout() == 'page_opening_paragraph'):
        $service_pricing_output.= '<div class="text-center">';
        $service_pricing_output.= '<div class="spacer-single"></div>';
        $service_pricing_output.= get_sub_field('page_opening_paragraph');
        $service_pricing_output.= '<div class="spacer-single"></div>';
        $service_pricing_output.= '</div>';
        
        $service_pricing_output.= '<div class="col-md-6">';
      endif;
      
      if( get_row_layout() == 'service_and_pricing' ):
        if(get_sub_field('has_a_heading') === 'yes'):
          $service_pricing_output.= '<h2>' . get_sub_field('heading') . '</h2>';
        endif;
      
        if(get_sub_field('has_a_sub_heading') === 'yes' || get_sub_field('has_descriptive_paragraph') === 'yes'):
          $service_pricing_output.= '<div class="service-text">';
          $service_pricing_output.= '<strong>' . get_sub_field('sub_heading') . '</strong>';
          
          if(get_sub_field('has_descriptive_paragraph') === 'yes'):
            $service_pricing_output.= '<br>' . get_sub_field('descriptive_paragraph');
          endif;
      
          $service_pricing_output.= '</div>';
        endif;
        
        if(get_sub_field('has_a_sub_heading') === 'yes' || get_sub_field('has_descriptive_paragraph') === 'yes'):
          $service_pricing_output.= '<div class="sub-item-service collapse">';
        else:
          $service_pricing_output.= '<div class="sub-item-service">';
        endif;
      
        $service_pricing_output.= '<div class="c1">' . get_sub_field('service_left') . '</div>';
        $service_pricing_output.= '<div class="c2"></div>';
        $service_pricing_output.= '<div class="c3">' . get_sub_field('price_right') . '</div>';
        $service_pricing_output.= '</div>';
      endif;
      
      if( get_row_layout() == 'new_column' ):
        $service_pricing_output.= '</div>';
        $service_pricing_output.= '<div class="col-md-6">';
      endif;
      
      if( get_row_layout() == 'page_closing_paragraph' ):
        $service_pricing_output.= '</div>';
        $service_pricing_output.= '<div class="clearfix"></div>';
      
        $service_pricing_output.= '<div class="col-sm-12">';
        $service_pricing_output.= get_sub_field('page_closing_paragraph');
        $service_pricing_output.= '</div>';
      endif;
      
      endwhile;
      
      echo $service_pricing_output; 
      endif;
      ?>
      <!-- service disclaimer open --> 
      <?php include (TEMPLATEPATH . '/components/service-disclaimer.php'); ?>
      <!-- service disclaimer close -->
    </div>
  </div>
</section>

<?php
endif;
?>
<!-- service close -->

<!-- make appointment open --> 
<?php include (TEMPLATEPATH . '/components/make-appointment.php'); ?>
<!-- make appointment close -->
    
</div>
<!-- content close -->

<?php get_footer(); ?>
