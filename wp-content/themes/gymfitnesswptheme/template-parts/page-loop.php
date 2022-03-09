<?php while (have_posts()) : the_post(); ?>
  <div class="content-wrapper-text">
    <h1 class="styled-as-h1 text-center color-primary mb-2 mb-md-5"><?php the_title(); ?></h1>
  </div>
  <?php // the_post_thumbnail($size, $attr) 
  ?>
  <div class="content-wrapper-image">
    <?php
      if (has_post_thumbnail($post)) {
        the_post_thumbnail('blog', array('class' => 'featured-image'));
      }
    ?>
  </div>
  <?php the_content(); ?>
<?php endwhile; ?>