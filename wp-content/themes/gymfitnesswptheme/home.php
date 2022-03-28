<?php get_header(); ?>
<main class="page section mt-50 mb-50">
  <div class="container">
    <div class="page-wrapper">
      <div class="page-content">
        <div class="block-classes-group">
          <?php get_template_part('template-parts/blog', 'loop') ?>
        </div>
      </div>
    </div>
  </div>
</main>
<?php get_footer(); ?>