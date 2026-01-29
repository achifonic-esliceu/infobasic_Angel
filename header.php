<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<header class="site-header">
  <div class="container">
    <a class="site-brand" href="<?php echo esc_url(home_url('/')); ?>">
      <?php bloginfo('name'); ?>
    </a>

    <p class="site-tagline"><?php bloginfo('description'); ?></p>

    <nav class="main-nav">
      <?php
      wp_nav_menu(array(
        'theme_location' => 'menu-principal',
        'container' => false,
        'menu_class' => 'menu'
      ));
      ?>
    </nav>
  </div>
</header>
