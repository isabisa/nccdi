<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/layouts/page', 'header'); ?>
  <?php get_template_part('templates/layouts/content', 'page'); ?>
<?php endwhile; ?>
