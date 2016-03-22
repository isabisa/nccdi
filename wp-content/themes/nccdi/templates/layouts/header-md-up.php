<?php

use Roots\Sage\Assets;

?>
<header id="header" class="navbar visible-md-block visible-lg-block" class="banner">
  <div class="container">
    <div class="navbar-header">
      <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo Assets\asset_path('images/logo-new.png'); ?>" alt="NC Community Development Initiative" /></a>
    </div>

    <nav class="navbar navbar-default" data-topbar role="navigation">

      <div class="navbar-right">
        <?php
        if (has_nav_menu('primary_navigation')) :
          wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav navbar-nav']);
        endif;
        ?>
      </div>
    </nav>
  </div>
</header>
