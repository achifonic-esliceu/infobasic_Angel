<?php
// Evitar acceso directo
if (!defined('ABSPATH')) exit;

function achifoni_setup_theme() {
  add_theme_support('title-tag');
  add_theme_support('post-thumbnails');
  add_theme_support('html5', ['search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script']);

  register_nav_menus([
    'primary' => __('Menú principal', 'infobasic-angel'),
    'footer'  => __('Menú footer', 'infobasic-angel'),
  ]);
}
add_action('after_setup_theme', 'achifoni_setup_theme');
