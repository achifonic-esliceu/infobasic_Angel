<?php if (!defined('ABSPATH')) exit; ?>
</main>

<footer class="bg-light border-top py-4">
  <div class="container">
    <div class="row g-3 align-items-center">
      <div class="col-md-6">
        <small class="text-muted">
          &copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?> — Theme por Angel Chifoni
        </small>
      </div>
      <div class="col-md-6 text-md-end">
        <?php
          wp_nav_menu([
            'theme_location' => 'footer',
            'container' => false,
            'menu_class' => 'list-inline mb-0',
            'depth' => 1,
            'fallback_cb' => false,
            'item_spacing' => 'discard',
          ]);
        ?>
      </div>
    </div>
  </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
