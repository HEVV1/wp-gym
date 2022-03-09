<?php
/*
* Template Name: Page with Sidebar
*/
get_header(); ?>
<main class="page section mt-50 mb-50">
  <div class="container">
    <div class="page-wrapper with-sidebar">
      <div class="page-content">        
        <?php get_template_part('template-parts/page', 'loop'); ?>
      </div>
      <?php get_sidebar(); ?>
    </div>
  </div>
</main>
<?php get_footer(); ?>