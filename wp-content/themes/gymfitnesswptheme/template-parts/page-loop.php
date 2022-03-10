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
    //Check the current post type
    if (get_post_type() === 'gymfitness_classes') :
      $start_time = get_field('start_time');
      $end_time = get_field('end_time');
    ?>
      <p class="mt-5 text-thickness-700 text-center">
        <?php the_field('class_days'); echo " - {$start_time} to {$end_time}" ?>
      </p>
    <?php endif; ?>
  </div>
  <?php the_content(); ?>
<?php endwhile; ?>