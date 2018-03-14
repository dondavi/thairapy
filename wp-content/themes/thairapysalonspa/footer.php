<?php //footer begin ?>
<footer>
  <div class="container">
    <div class="row">
      <div class="col-md-4">
        <div class="widget widget_recent_post">
          <h3 style="margin-left:10px;">Latest News @ThairapySession</h3>
          <a class="twitter-timeline" data-dtn="true" data-height="315" data-theme="dark" data-link-color="#cccccc" data-chrome="noheader nofooter noborders transparent" href="https://twitter.com/ThairapySession">Tweets by ThairapySession</a>
          <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
        </div>
      </div>
      <div class="col-md-4">
        <div class="widget">
          <h3>Thairapy Hours</h3>
          <div class="">
            <ul class="list-border-bottom">
              <?php //Hours of Operation open ?>
              <?php include (TEMPLATEPATH . '/components/dynamic/hours-footer.php'); ?>
              <?php //Hours of Operation close ?>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="widget widget-address">
          <h3>Contact Us</h3>
          <address>
          <span>Thairapy Salon & Spa</span> <span>1721 Waugh Drive, Houston, Texas, 77006</span> <span><b>Phone:</b> <a href="tel:7135277800">713-527-7800</a></span> <span><b>Email:</b> <a href="mailto:visitus@thairapysalonspa.com">visitus@thairapysalonspa.com</a></span>
          </address>

          <p>&nbsp;</p>

          <h3>Stay In Touch</h3>
          <form name="contactForm" id="contact_form" class="deform-1" method="post" action="<?php echo get_template_directory_uri(); ?>/framework/dist/ajax/email.php">
            <!--<div class="g-recaptcha" data-sitekey="6Ldrhx4UAAAAABTG1q8O3mlYgLcr9ly2a-26QRpW"></div>-->
            <div class="row">
              <div class="col-md-12">
                <div id="email_error" class="error">Please enter your valid E-mail ID.</div>
                <div>
                  <input type="text" name="goawayspambot" id="goawayspambot" class="hide">
                  <input type="text" name="email" id="email" class="form-control" placeholder="Your Email Address">
                </div>
              </div>

              <div class="col-md-12">
                <p id="submit">
                  <input type="submit" id="send_message" value="Sign Up" class="btn btn-custom">
                </p>
                <div id="mail_success" class="success">Thank you! We'll keep you updated.</div>
                <div id="mail_fail" class="error">Hmmm&hellip;something went wrong. Please try again.</div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <div class="subfooter">
    <div class="container">
      <div class="row">
        <div class="col-md-4 text-center-mobile">&copy;
        <?php echo date("Y") ?> THAIRAPY SALON AND SPA</div>
        <div class="col-md-4 text-center"><a href="<?php echo site_url(); ?>/privacy-policy" title="Privacy Policy">Privacy Policy</a>&nbsp;|&nbsp;<a href="<?php echo site_url(); ?>/site-map" title="Site Map">Site Map</a>
        </div>
        <div class="col-md-4 text-right text-center-mobile">
          <div class="social-icons"> <a href="https://twitter.com/@ThairapySession" target="_blank"><i class="fa fa-twitter fa-lg"></i></a> <a href="https://www.facebook.com/ThairapySession" target="_blank"><i class="fa fa-facebook fa-lg"></i></a> <a href="http://pinterest.com/thairapysession/" target="_blank"><i class="fa fa-pinterest fa-lg"></i></a> <a href="http://instagram.com/Thairapysalonspa" target="_blank"><i class="fa fa-instagram fa-lg"></i></a> </div>
        </div>
      </div>
    </div>
  </div>
</footer>
<?php //	footer close ?>
</div>
<?php // close wrapper ?>

<script src="<?php echo get_template_directory_uri(); ?>/framework/dist/js/scripts.js"></script>
<?php if(get_field('body_class') && strlen(get_field('body_class')) > 0) { ?>
<script>
  var bodyClass = '<?php echo get_field('body_class'); ?>';
  $( 'body' ).addClass( bodyClass );
</script>
<?php } ?>
<script>
  /* ---- Google Analytics ---- */
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount','UA-3179162-3']);
  _gaq.push(['_trackPageview']);
  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
  /* /---- Google Analytics ---- */
</script>

</body>
</html>