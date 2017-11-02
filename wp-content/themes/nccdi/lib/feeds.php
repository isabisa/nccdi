<?php

namespace Roots\Sage\Feeds;

/**
 * Custom feed templates
 *
 */

// Register custom feeds
function custom_rss() {
  add_feed('weekly', __NAMESPACE__ . '\\weekly');
}
add_action('init', __NAMESPACE__ . '\\custom_rss');

// Function for Weekly Wrapup feed
function weekly() {
  get_template_part('templates/feeds/weekly');
}

// Modify author feeds to include any custom post type
function feed_filter($query) {
  if ($query->is_feed && $query->is_author) {
    $query->set('post_type', 'any');
  }
  return $query;
}
add_filter('pre_get_posts', __NAMESPACE__ . '\\feed_filter');
