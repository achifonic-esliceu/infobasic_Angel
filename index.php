<?php get_header(); ?>

<main class="site-main">
  <div class="container">
    <?php if ( have_posts() ) : ?>
      <?php while ( have_posts() ) : the_post(); ?>
        <article id="post-<?php the_ID(); ?>" <?php post_class('entry'); ?>>
          <h1 class="entry-title">
            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
          </h1>
          <div class="entry-content">
            <?php the_content(); ?>
          </div>
        </article>
      <?php endwhile; ?>
    <?php else : ?>
      <p>No hay contenido todavía.</p>
    <?php endif; ?>
  </div>
</main>

<?php get_footer(); ?>
