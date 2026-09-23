<?php
/**
 * Oruj Ismayilov Academic Theme
 */

add_action('after_setup_theme', function () {
  add_theme_support('title-tag');
  add_theme_support('post-thumbnails');
  add_theme_support('responsive-embeds');
  add_theme_support('editor-styles');
  add_editor_style('style.css');
  add_theme_support('html5', array('search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script'));
  add_theme_support('custom-logo', array(
    'height' => 64,
    'width' => 64,
    'flex-height' => true,
    'flex-width' => true,
    'unlink-homepage-logo' => false,
  ));

  register_nav_menus(array(
    'primary' => __('Primary Navigation', 'oruj-ismayilov-theme'),
    'footer' => __('Footer Navigation', 'oruj-ismayilov-theme'),
  ));
});

add_action('wp_enqueue_scripts', function () {
  wp_enqueue_style('oruj-ismayilov-theme-style', get_stylesheet_uri(), array(), wp_get_theme()->get('Version'));
});

add_action('wp_enqueue_scripts', function () {
  if (! is_admin()) {
    wp_enqueue_script('oruj-ismayilov-theme-smooth-scroll', get_template_directory_uri() . '/assets/smooth-scroll.js', array(), wp_get_theme()->get('Version'), true);
  }
});
