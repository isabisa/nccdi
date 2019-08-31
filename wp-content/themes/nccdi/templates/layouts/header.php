<?php

use Roots\Sage\Assets;
use Roots\Sage\Nav;

?>
<header id="header" class="banner">
  <section class="topbar-wrapper">
    <div class="topbar container">
      <div class="topnav-wrapper flex flex-end">
        <div class="menu-trigger-wrapper">
          <input type="checkbox" name="topbar-menu-trigger" id="topbar-menu-trigger" value="true" />
          <label for="topbar-menu-trigger"><i class="material-icons topbar-icon" aria-label="Show navigation menu">add</i></label>
        </div>
        <div class="topbar-menu">
          <?php
          if (has_nav_menu('top_bar')) :
            wp_nav_menu(['theme_location' => 'top_bar', 'container' => FALSE, 'menu_class' => 'flex flex-center flex-right space-around', 'depth' => 1]);
          endif;
          ?>
        </div>
      </div>
    </div>
  </section>

  <nav class="navbar container" role="navigation">
    <div class="flex flex-center space-between">
      <a class="logo" href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo Assets\asset_path('images/logo-new.png'); ?>" alt="NC Community Development Initiative" /></a>
      <?php if (has_nav_menu('primary_navigation')) : ?>
        <div class="menu-trigger-wrapper">
          <input type="checkbox" name="menu-trigger" id="menu-trigger" value="true" />
          <label for="menu-trigger"><i class="material-icons" aria-label="Show navigation menu">menu</i></label>
        </div>
        <?php echo wp_nav_menu(['theme_location' => 'primary_navigation', 'container' => FALSE, 'depth' => 2, 'menu_class' => 'navbar-menu flex flex-center space-between']); ?>
      <?php endif; ?>
    </div>
  </nav>

  <!-- <div class="container">
    <div class="navbar-header navbar-default">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="<?php //echo esc_url( home_url( '/' ) ); ?>"><img src="<?php //echo Assets\asset_path('images/logo-new.png'); ?>" alt="NC Community Development Initiative" /></a>
    </div>

    <nav class="navbar collapse navbar-collapse" data-topbar role="navigation" id="navbar-collapse-1">
      <div class="navbar-right-top">
      </div>
      <div class="navbar-right">
        <?php
        // if (has_nav_menu('primary_navigation')) :
        //   wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav navbar-nav', 'depth' => 2, 'walker' => new Nav\NavWalker()]);
        // endif;
        ?>
      </div>
    </nav>
  </div> -->
</header>
