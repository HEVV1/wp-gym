<?php get_header(); ?>
<main class="page section mt-50 mb-50">
  <div class="container">
    <div class="page-wrapper">
      <div class="page-content">
        <div class="block-classes-group">
          <?php
            $category = get_queried_object();
          ?>
          <h1 class="text-center color-primary">Category: <?php echo $category->name ?></h1>
          <div class="text-center classes-group-text">
            <?php echo category_description($category->ID); ?>
          </div>
          <?php get_template_part('template-parts/blog', 'loop') ?>
        </div>
      </div>
    </div>
  </div>
</main>
<?php get_footer(); ?>