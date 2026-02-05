<?php
/*
Template Name: Contacto (Angel)
*/
get_header(); ?>

<div class="container">
  <div class="row g-4">
    <div class="col-lg-7">
      <?php if (have_posts()): while (have_posts()): the_post(); ?>
        <article class="bg-white border rounded-3 p-4">
          <h1 class="h3 mb-3"><?php the_title(); ?></h1>
          <?php the_content(); ?>
        </article>
      <?php endwhile; endif; ?>
    </div>

    <div class="col-lg-5">
      <div class="bg-light border rounded-3 p-4">
        <h2 class="h5">Datos</h2>
        <ul class="list-unstyled mb-0">
          <li><strong>Email:</strong> contacto@tusitio.com</li>
          <li><strong>Tel:</strong> +34 600 000 000</li>
          <li><strong>Horario:</strong> L-V 9:00-18:00</li>
        </ul>
      </div>
    </div>
  </div>
</div>

<?php get_footer(); ?>
