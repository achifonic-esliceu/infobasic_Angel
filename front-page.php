<?php get_header(); ?>

<div class="container">
  <section class="p-4 p-md-5 bg-white border rounded-3 mb-4">
    <div class="row align-items-center g-4">
      <div class="col-lg-7">
        <h1 class="display-6 fw-bold mb-3"><?php bloginfo('name'); ?></h1>
        <p class="lead mb-4"><?php bloginfo('description'); ?></p>
        <a class="btn btn-primary" href="<?php echo esc_url(get_permalink(get_option('page_for_posts'))); ?>">
          Ver artículos
        </a>
      </div>
      <div class="col-lg-5">
        <div class="ratio ratio-16x9 bg-light rounded"></div>
      </div>
    </div>
  </section>

  <section class="mb-4">
    <h2 class="h4 mb-3">Últimos artículos</h2>
    <div class="row g-3">
      <?php
      $q = new WP_Query(['post_type' => 'post', 'posts_per_page' => 6]);
      if ($q->have_posts()):
        while ($q->have_posts()): $q->the_post(); ?>
          <div class="col-md-6 col-lg-4">
            <article class="card h-100">
              <?php if (has_post_thumbnail()): ?>
                <a href="<?php the_permalink(); ?>">
                  <?php the_post_thumbnail('medium', ['class' => 'card-img-top']); ?>
                </a>
              <?php endif; ?>
              <div class="card-body">
                <h3 class="h6"><a class="text-decoration-none" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                <p class="text-muted small mb-0"><?php echo esc_html(get_the_date()); ?></p>
              </div>
            </article>
          </div>
        <?php endwhile;
        wp_reset_postdata();
      else: ?>
        <p>No hay posts todavía.</p>
      <?php endif; ?>
    </div>
  </section>
</div>

<?php get_footer(); ?>
