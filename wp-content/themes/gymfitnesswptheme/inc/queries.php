<?php function gymfitness_classes_list() { ?>
  <div class="block-classes-group">
    <ul class="classes-list">
      <?php
        $args = array(
          'post_type' => 'gymfitness_classes'
        );
        // Use WP_query and append the results into $classes
        $classes = new WP_Query($args);
        while($classes->have_posts()) : $classes->the_post();
      ?>
      <li class="classes-list-item card gradient">
        <?php the_post_thumbnail('mediumSize'); ?>
        <div class="card-content">
          <div class="card-content-wrapper">
            <a href="<?php the_permalink(); ?>">
              <h1 class="white"><?php the_title(); ?></h1>    
            </a>
            <?php 
              $start_time = get_field('start_time');
              $end_time = get_field('end_time');
            ?>
            <p class="mt-0 color-primary text-thickness-700">
              <?php the_field('class_days'); echo " - {$start_time} to {$end_time}" ?>
            </p>
          </div>
        </div>
      </li>
      
      <?php endwhile; wp_reset_postdata(); ?>
    </ul>  
  </div>
<?php } ?>