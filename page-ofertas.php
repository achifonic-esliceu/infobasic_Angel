<?php
/*
Template Name: Ofertas (Angel)
*/
get_header(); ?>

<div class="container">
  <section class="bg-white border rounded-3 p-4 mb-4">
    <h1 class="h3 mb-2"><?php the_title(); ?></h1>
    <p class="text-muted mb-0">Listado de ofertas en formato cards.</p>
  </section>

  <div class="row g-3">
    <?php
    // Ejemplo: muestra posts de una categoría "ofertas" si existe
    $q = new WP_Query([
      'post_type' => 'post',
      'posts_per_page' => 9,
      'category_name' => 'ofertas',
    ]);

    if ($q->have_posts()):
      while ($q->have_posts()): $q->the_post(); ?>
        <div class="col-md-6 col-lg-4">
          <div class="card h-100">
            <?php if (has_post_thumbnail()): ?>
              <a href="<?php the_permalink(); ?>">
                <?php the_post_thumbnail('medium', ['class' => 'card-img-top']); ?>
              </a>
            <?php endif; ?>
            <div class="card-body">
              <h2 class="h6"><a class="text-decoration-none" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
              <p class="text-muted small mb-0"><?php echo esc_html(get_the_date()); ?></p>
            </div>
          </div>
        </div>
      <?php endwhile;
      wp_reset_postdata();
    else: ?>
      <div class="col-12">
        <div class="alert alert-info mb-0">
          No hay posts en la categoría “ofertas”. Crea la categoría y añade posts.
        </div>
      </div>
    <?php endif; ?>
  </div>
</div>

<?php get_footer(); ?>
