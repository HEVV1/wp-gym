<?php get_header(); ?>
<main class="page section mt-50 mb-50">
  <div class="container">
    <div class="page-wrapper">
      <div class="page-content">
        <?php
        $author = get_queried_object();
        ?>
        <h1 class="text-center color-primary">Author: <?php echo $author->data->display_name ?></h1>
        <p class="text-center"><?php echo get_the_author_meta('description', $author->data->ID) ?></p>
        <div class="block-classes-group">
          <?php get_template_part('template-parts/blog', 'loop') ?>
        </div>
      </div>
    </div>
  </div>
</main>
<?php get_footer(); ?>