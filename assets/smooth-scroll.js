<?php
/**
 * Theme assets and registration
 */
add_action('after_setup_theme', function () {
  add_theme_support('wp-block-styles');
  add_theme_support('align-wide');
  add_theme_support('editor-styles');
  add_editor_style('style.css');
});
