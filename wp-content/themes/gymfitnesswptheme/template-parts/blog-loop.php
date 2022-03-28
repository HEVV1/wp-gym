<ul class="classes-list">
  <?php while (have_posts()) : the_post(); ?>
    <li class="classes-list-item card gradient">
      <?php the_post_thumbnail('mediumSize'); ?>
      
      <?php the_category(); ?>
      <div class="card-content">
        <div class="card-content-wrapper">
          <a href="<?php the_permalink(); ?>">
            <h1 class="white"><?php the_title(); ?></h1>
          </a>
          <p class="mt-0 color-primary text-thickness-700">
            By:
            <a class="white text-thickness-700" href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>">
              <?php echo get_the_author_meta('first_name'); ?>
            </a>
          </p>
          <p class="mt-0 color-primary text-thickness-700">
            Date:
            <span class="white text-thickness-700">
              <?php the_time(get_option('date_format')) ?>
            </span>
          </p>
        </div>
      </div>
    </li>

  <?php endwhile; ?>
</ul>