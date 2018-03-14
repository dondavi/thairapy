<section id="subheader" class="subh-center" data-stellar-background-ratio=".2">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h1><?php wp_title(''); ?></h1>
        <?php if(get_field('subheading')) { ?>
        <h4><?php echo get_field('subheading'); ?></h4>
        <?php } ?>
      </div>
    </div>
  </div>
</section>
