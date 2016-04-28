<?php

use Roots\Sage\Assets;
use Roots\Sage\Media;

$video = has_post_format('video');

$featured_image = Media\get_featured_image('medium');
$title_overlay = get_field('title_overlay');
?>

<article <?php post_class('block-post row'); ?>>
  <a class="mega-link" href="<?php the_permalink(); ?>"></a>
  <div class="col-sm-5">
    <div class="photo-overlay">
      <?php if (!empty($featured_image)) { ?>
        <img class="post-thumbnail" src="<?php echo $featured_image; ?>" />
      <?php } ?>
      
      <?php
      if ($video) {
        echo '<div class="video-play"></div>';
      }

      get_template_part('templates/components/labels', 'single');

      if ( ! empty($title_overlay) ) { ?>
        <img class="title-image-overlay" src="<?php echo $title_overlay['url']; ?>" alt="<?php the_title(); ?>" />
      <?php } ?>
    </div>
  </div>

  <header class="col-sm-7 entry-header">
    <h3 class="post-title"><?php the_title(); ?></h3>
    <?php get_template_part('templates/components/entry-meta'); ?>
  </header>
</article>
