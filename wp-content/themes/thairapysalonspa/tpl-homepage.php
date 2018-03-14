<?php 
/* Template Name: Homepage */ 
?>
<?php get_header(); ?>

<div id="wrapper">

<!-- header open --> 
<?php include (TEMPLATEPATH . '/components/nav-primary.php'); ?>
<!-- header close --> 

<!-- content begin -->
<div id="content" class="no-bottom no-top"> 
  
   <?php include (TEMPLATEPATH . '/components/dynamic/heroes-homepage.php'); ?>
   
  <!-- revolution slider close -->
  <div class="no-padding mt-130 height90px absolute z-index500 width100 text-light">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="overlaydark50">
            <div class="row-fluid">
              <div class="hidden-xs col-md-4">
                <div class="info-box padding20"><i class="fa fa-map-marker id-color"></i>
                  <div class="info-box_text">
                    <div class="info-box_title">Location</div>
                    <div class="info-box_subtite"><a href="http://goo.gl/maps/eIktD" target="_blank">1721 Waugh Drive<br>Houston, Texas, 77006</a></div>
                  </div>
                </div>
              </div>
              <div class="hidden-xs col-md-4">
                <div class="info-box padding20"><i class="fa fa-phone id-color"></i>
                  <div class="info-box_text">
                    <div class="info-box_title">Phone Number</div>
                    <div class="info-box_subtite"><a href="tel:7135277800">713-527-7800</a></div>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="info-box padding20"><i class="fa fa-gift id-color"></i>
                  <div class="info-box_text">
                    <div class="info-box_title">Gift Cards</div>
                    <div class="info-box_subtite"><a href="<?php echo get_template_directory_uri(); ?>/giftcards.php" target="_blank">Give the gift of Thairapy.</a></div>
                  </div>
                </div>
              </div>
              <div class="clearfix"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <?php // section begin ?>
  <section id="section-top-reason" class="no-top no-bottom text-light">
    <div class="container-fluid">
      <div class="row-fluid display-table">
        <div class="col-md-4 text-middle" data-bgcolor="#003052">
          <div class="padding40">
            <div class="box-icon"><i class="fa fa-chevron-circle-right wow zoomIn" data-wow-delay=".25s"></i>
              <div class="text">
                <h4>Thairapy. <span class="id-color">Find yours.</span></h4>
                <p>Located in eclectic Montrose, Thairapy brings together experts in hair, nails, skin and body to deliver a refreshing, restorative beauty experience. Come in today and unwind. We'll put your head, body and soul in the right place.</p>
              </div>
            </div>
          </div>
        </div>
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
          'post_type'        => 'featured',
          'post_mime_type'   => '',
          'post_parent'      => '',
          'author'	   => '',
          'author_name'	   => '',
          'post_status'      => 'publish'
        );
        $featured_posts_array = get_posts( $args );
        if($featured_posts_array) {
          include (TEMPLATEPATH . '/components/dynamic/featured.php');
        } else {
        ?>
        <div class="col-md-4 text-middle" data-bgimage="url(<?php echo get_template_directory_uri(); ?>/framework/dist/img/background/bg-salon-homepage.jpg)">
          <div class="padding40">
            <div class="box-icon"> <i class="fa fa-gift wow zoomIn" data-wow-delay=".25s"></i>
              <div class="text">
                <h4>Gift Cards</h4>
                <p>Give the gift of Thairapy to someone you know deserves it. Gift cards can be used toward any regular or promotional-priced services we offer. <a href="<?php echo get_template_directory_uri(); ?>/giftcards.php" target="_blank" style="color:#ffffff;text-decoration:underline;">Purchase Gift Cards &gt;&gt;</a></p>
              </div>
            </div>
          </div>
        </div>
        <?php } ?>
        <div class="col-md-4 text-middle text-center" data-bgcolor="#0058a3">
          <div class="padding40">
          	<a href="http://www.secure-booker.com/thairapysalonspa/BookOnlineStart.aspx" target="_blank" class="btn btn-line-white btn-big wow fadeInUp" data-wow-delay=".3s">Schedule An Appointment</a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <?php // section close ?> 
  
  <?php // section begin ?>
  <?php include (TEMPLATEPATH . '/components/dynamic/services-four-up.php'); ?>
  <?php // section close ?>
  
  <?php // section begin ?>
  <section id="featurette-1" class="side-bg text-light bg-color-blue-quaternary">
    <div class="col-md-6 image-container">
      <div class="background-image"></div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-md-5 col-md-offset-7 text-center">
          <p>&nbsp;</p>
          <h1 class="wow-fadeIn" style="color:#fff!important;">They're Here!</h1>
          <div class="small-border wow zoomIn" data-wow-delay=".3s" data-wow-duration=".3s"></div>
          <p style="color:#fff!important;"><strong>Thairapy Products Now Available</strong></p>
          <p>&nbsp;</p>
         </div>
      </div>
    </div>
  </section>
  <?php // section close ?>
  
  <!-- make appointment open --> 
  <?php include (TEMPLATEPATH . '/components/make-appointment.php'); ?>
  <!-- make appointment close -->
  
  <?php // section begin ?>
  <section id="explore-5" class="side-bg text-light hidden-xs hidden-sm bg-color-blue-quaternary">
    <div class="container">
      <div class="row">
        <div class="col-md-5 text-center">
          <h1 class="wow-fadeIn">Thairapy Hair Fashion Show</h1>
          <div class="small-border wow zoomIn" data-wow-delay=".3s" data-wow-duration=".3s"></div>
          	<p>Serving and beautifying you through personalized consultations to actual results for over 10 years. Get Some Thairapy!</p>
          	<a href="https://vimeo.com/77932653" class="btn btn-line-white btn-big popup-vimeo">View Video</a>
         </div>
        <div class="col-md-1 text-center"></div>
      </div>
    </div>
    <div class="col-md-6 col-md-offset-6 image-container">
      <div class="background-image"></div>
    </div>
  </section>
  <?php // section close ?> 
  
  <!-- dynamic gallery open --> 
  <?php include (TEMPLATEPATH . '/components/dynamic/gallery-homepage.php'); ?>
  <!-- dynamic gallery close -->
  
  <!-- featured products open --> 
  <?php include (TEMPLATEPATH . '/components/featured-products.php'); ?>
  <!-- featured products close -->

  
</div>
<?php get_footer(); ?>
