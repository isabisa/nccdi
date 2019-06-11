<?php

use Roots\Sage\Assets;
use Roots\Sage\Nav;

?>
<section class="sponsors">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 text-center">
        <div class="striped-line extra-bottom-margin">
          <h2>Many thanks to our sponsors</h2>
        </div>
        <img src="<?php echo Assets\asset_path('images/bbt-logo.png'); ?>" srcset="<?php echo Assets\asset_path('images/bbt-logo@2x.png'); ?> 2x" alt="BB&amp;T" />
        <img src="<?php echo Assets\asset_path('images/oak-foundation-logo.png'); ?>" srcset="<?php echo Assets\asset_path('images/oak-foundation-logo@2x.png'); ?> 2x" alt="Oak Foundation" />
        <img src="<?php echo Assets\asset_path('images/zsr-logo.png'); ?>" srcset="<?php echo Assets\asset_path('images/zsr-logo@2x.png'); ?> 2x" alt="Z Smith Reynolds Foundation" />
        <img src="<?php echo Assets\asset_path('images/wells-fargo-logo.png'); ?>" srcset="<?php echo Assets\asset_path('images/wells-fargo-logo@2x.png'); ?> 2x" alt="Wells Fargo" />
        <img src="<?php echo Assets\asset_path('images/pnc-logo.png'); ?>" srcset="<?php echo Assets\asset_path('images/pnc-logo@2x.png'); ?> 2x" alt="PNC" />
        <img src="<?php echo Assets\asset_path('images/suntrust-logo.png'); ?>" srcset="<?php echo Assets\asset_path('images/suntrust-logo@2x.png'); ?> 2x" alt="Suntrust" />
        <img src="<?php echo Assets\asset_path('images/kbr-logo.png'); ?>" srcset="<?php echo Assets\asset_path('images/kbr-logo@2x.png'); ?> 2x" alt="Kate B Reynolds Charitable Trust" />
        <img src="<?php echo Assets\asset_path('images/first-bank-logo.png'); ?>" srcset="<?php echo Assets\asset_path('images/first-bank-logo@2x.png'); ?> 2x" alt="Local First Bank" />
        <img src="<?php echo Assets\asset_path('images/fifth-third-logo.png'); ?>" srcset="<?php echo Assets\asset_path('images/fifth-third-logo@2x.png'); ?> 2x" alt="Fifth Third Bank" />
        <img src="<?php echo Assets\asset_path('images/first-tenn-logo.png'); ?>" srcset="<?php echo Assets\asset_path('images/first-tenn-logo@2x.png'); ?> 2x" alt="First Tennessee Bank" />
      </div>
    </div>
  </div>
</section>

<footer class="global-footer">
  <div class="container">
    <div class="col-sm-12 col-md-3 footer-logos">
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo Assets\asset_path('images/nccdi-logo-footer.jpg'); ?>" /></a>
      <address>5800 Faringdon Place<br />
        Raleigh, NC 27609</address>
      <p><tel>919.828.5655</tel> | <a href="/contact/">Contact Us</a></p>
      <br />
      <p><a class="btn btn-skew btn-lg btn-teal" data-toggle="modal" data-target="#emailSignupModal">Subscribe</a></p>
    </div>

    <div class="col-sm-12 col-md-6">
      <div class="recognition">
        <img class="cdfi" src="<?php echo Assets\asset_path('images/cdfi-2018.png'); ?>" srcset="<?php echo Assets\asset_path('images/cdfi-2018@2x.png'); ?> 2x" alt="Certified CDFI" />
        <img class="aeris" src="<?php echo Assets\asset_path('images/aeris.svg'); ?>" alt="Aeris Rated since 2016" />
        <img class="ofn" src="<?php echo Assets\asset_path('images/ofnmember.png'); ?>" alt="OFN Member" />
      </div>
    </div>

    <div class="col-sm-12 col-md-3">
      <?php
      if (has_nav_menu('primary_navigation')) :
        wp_nav_menu(['theme_location' => 'footer_navigation', 'menu_class' => 'nav navbar-nav', 'depth' => 1, 'walker' => new Nav\NavWalker()]);
      endif;
      ?>
    </div>
  </div>

  <div class="below-footer">
    <div class="container">
      <div class="row">
        <div class="col-md-9">
          <a href="https://www.unitymakes.us/" target="_blank" class="unity-link">
            <?php echo file_get_contents(Assets\asset_path_rel('images/made-with-unity.svg')); ?>
            <?php //echo file_get_contents(get_stylesheet_directory() . '/images/made-with-unity.svg'); ?>
          </a>
          <span class="copyright">Copyright &copy; <?php echo date('Y'); ?> NC Community Development Initiative</span>
        </div>

        <div class="col-md-3 text-right">
          <span class="uppercase">Follow Us</span>
          <a class="icon-facebook" href="http://www.facebook.com/ncinitiative5800" target="_blank" rel="nofollow"></a>
          <a class="icon-twitter" href="http://twitter.com/ncinitiative" target="_blank" rel="nofollow"></a>
          <a class="icon-flickr" href="http://www.flickr.com/photos/ncinitiative/" target="_blank" rel="nofollow"></a>
        </div>
      </div>
    </div>
  </div>
</footer>

<?php get_template_part('templates/components/email-signup'); ?>
