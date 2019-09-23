<?php
/* Template Name: Beaver Builder - With Header */

use Roots\Sage\Setup;

get_template_part('templates/components/header', get_post_type());
?>

<div class="container-full">
  <div class="content">
    <main class="main">
      <?php
      while (have_posts()) : the_post();
        get_template_part('templates/layouts/content', get_post_type());
      endwhile;
      ?>
    </main>
  </div><!-- /.content -->
</div><!-- /.container -->

<?php if ($wp_query->max_num_pages > 1) : ?>
  <nav class="post-nav container">
    <?php wp_pagenavi(); ?>
  </nav>
<?php endif; ?>
