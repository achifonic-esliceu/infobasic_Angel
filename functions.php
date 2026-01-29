<?php

// Cargar el CSS principal del tema
function mi_tema_enqueue_assets() {
  wp_enqueue_style(
    'mi-tema-style',
    get_stylesheet_uri(),
    array(),
    wp_get_theme()->get('Version')
  );
}
add_action('wp_enqueue_scripts', 'mi_tema_enqueue_assets');


// Registrar ubicaciones de menús
function mi_tema_register_menus() {
  register_nav_menus(array(
    'menu-principal' => 'Menú principal',
  ));
}
add_action('after_setup_theme', 'mi_tema_register_menus');
