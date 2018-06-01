<?php the_content(); ?>

<?php if(get_field('new_story')): ?>
  <?php while(has_sub_field('new_story')): ?>
    <section class="impact-story">
      <img src="<?php the_sub_field('photo'); ?>" />

      <div>
        <h3><?php the_sub_field('title'); ?></h3>
        <p><?php the_sub_field('excerpt'); ?></p>
      </div>
    </section>
  <?php endwhile; ?>
<?php endif; ?>
