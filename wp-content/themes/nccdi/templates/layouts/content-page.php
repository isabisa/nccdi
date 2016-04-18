<?php
the_content();

if (is_page('donate')) {
  get_template_part('templates/components/donately');
}
?>
