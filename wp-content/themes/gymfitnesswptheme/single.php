<?php get_header(); ?>

<?php while (have_posts()) : the_post(); ?>
<main class="page section mt-50 mb-50">
  <div class="container">
    <div class="page-wrapper no-sidebar">
      <div class="page-content">
        <?php //get_template_part('template-parts/page', 'loop'); ?>
        <h1 class="text-center color-primary"><?php the_title(); ?></h1>
          <div class="image-wrapper mt-5 mb-5 text-center">
            <?php the_post_thumbnail('mediumSize'); ?>
          </div>          
          <?php the_content(); ?>
      </div>
    </div>
  </div>
</main>

<?php endwhile ?>