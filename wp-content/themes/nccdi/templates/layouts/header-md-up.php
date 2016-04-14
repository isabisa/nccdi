<?php

use Roots\Sage\Assets;
use Roots\Sage\Nav;

?>
<header id="header" class="visible-md-block visible-lg-block banner">
  <div class="container">
    <div class="navbar-header">
      <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo Assets\asset_path('images/logo-new.png'); ?>" alt="NC Community Development Initiative" /></a>
    </div>

    <nav class="navbar navbar-default" data-topbar role="navigation">
      <div class="navbar-right">
        <?php
        if (has_nav_menu('primary_navigation')) :
          wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav navbar-nav', 'depth' => 2, 'walker' => new Nav\NavWalker()]);
        endif;
        ?>
      </div>
    </nav>
  </div>
</header>
