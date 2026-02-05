<?php
if (!defined('ABSPATH')) exit;

// Setup separado
require_once get_template_directory() . '/inc/setup.php';

// Navwalker (asegúrate de tener el archivo en la raíz)
require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';

function achifoni_enqueue_assets() {
  $theme_uri = get_template_directory_uri();

  // Bootstrap CSS (local)
  wp_enqueue_style(
    'bootstrap',
    $theme_uri . '/assets/css/bootstrap.min.css',
    [],
    '5.3.0'
  );

  // CSS del theme (tu personalización)
  wp_enqueue_style(
    'infobasic-angel',
    $theme_uri . '/assets/css/theme.css',
    ['bootstrap'],
    '1.0.0'
  );

  // Bootstrap bundle (incluye Popper)
  wp_enqueue_script(
    'bootstrap-bundle',
    $theme_uri . '/assets/js/bootstrap.bundle.min.js',
    [],
    '5.3.0',
    true
  );
}
add_action('wp_enqueue_scripts', 'achifoni_enqueue_assets');

// (Opcional) widget area simple
function achifoni_widgets_init() {
  register_sidebar([
    'name' => __('Sidebar', 'infobasic-angel'),
    'id' => 'sidebar-1',
    'before_widget' => '<section class="mb-4">',
    'after_widget' => '</section>',
    'before_title' => '<h5 class="mb-3">',
    'after_title' => '</h5>',
  ]);
}
add_action('widgets_init', 'achifoni_widgets_init');
