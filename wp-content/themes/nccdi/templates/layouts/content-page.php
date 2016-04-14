<div class="container">
  <div class="row">
    <div class="col-md-7 col-md-push-1 col-lg-push-0">
      <?php the_content(); ?>

      <?php if (is_page('donate')) { get_template_part('templates/components/donately'); } ?>
    </div>

    <div class="col-md-3 col-md-push-1">
      <div class="well sidebar">
        <?php
        if (has_nav_menu('primary_navigation')) :
          wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav nav-stacked']);
        endif;
        ?>
      </div>
    </div>
  </div>
</div>
