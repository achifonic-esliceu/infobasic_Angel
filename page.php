<?php get_header(); ?>
<div class="container">
  <?php if (have_posts()): while (have_posts()): the_post(); ?>
    <article class="bg-white border rounded-3 p-4">
      <h1 class="h3 mb-3"><?php the_title(); ?></h1>
      <div class="content">
        <?php the_content(); ?>
      </div>
    </article>
  <?php endwhile; endif; ?>
</div>
<?php get_footer(); ?>
