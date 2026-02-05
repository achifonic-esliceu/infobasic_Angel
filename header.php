<?php if (!defined('ABSPATH')) exit; ?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header class="border-bottom bg-white">
  <nav class="navbar navbar-expand-lg navbar-light">
    <div class="container">
      <a class="navbar-brand fw-bold" href="<?php echo esc_url(home_url('/')); ?>">
        <?php bloginfo('name'); ?>
      </a>

      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#primaryNav"
        aria-controls="primaryNav" aria-expanded="false" aria-label="<?php esc_attr_e('Toggle navigation', 'infobasic-angel'); ?>">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="primaryNav">
        <?php
          wp_nav_menu([
            'theme_location'  => 'primary',
            'depth'           => 2,
            'container'       => false,
            'menu_class'      => 'navbar-nav ms-auto mb-2 mb-lg-0',
            'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
            'walker'          => new WP_Bootstrap_Navwalker(),
          ]);
        ?>
      </div>
    </div>
  </nav>
</header>

<main class="py-4">
