<?php

use Roots\Sage\Assets;

?>
<footer class="global-footer">
  <div class="striped-line"></div>

  <div class="container">
    <div class="text-center">
      <p class="h4">
        Get the latest news
        <a class="btn btn-teal" href="#">Subscribe</a>
        <a class="icon-facebook" href="#"></a>
        <a class="icon-twitter" href="#"></a>
        <a class="icon-flickr" href="#"></a>
      </p>

      <p class="h4"><a href="#">Grantee Login</a></p>

      <p>Copyright &copy; <?php echo date('Y'); ?> &nbsp;|&nbsp; NC Community Development Initiative &nbsp;|&nbsp; 919.828.5655 &nbsp;|&nbsp; <a href="mailto:<?php echo antispambot('info@ncinitiative.org'); ?>"><?php echo antispambot('info@ncinitiative.org'); ?></a></p>

      <p>
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo Assets\asset_path('images/nccdi-logo-footer.jpg'); ?>" /></a>
        <a href="http://nchousing.org" target="_blank"><img src="<?php echo Assets\asset_path('images/nchc-logo-footer.jpg'); ?>" /></a>
      </p>
    </div>
  </div>
</footer>
