<?php
/*
* Template Name: Gallery
*/
get_header(); ?>

<main class="page section mt-50 mb-50">
  <div class="container">
    <div class="page-wrapper">
      <div class="page-content">
        <?php while (have_posts()) : the_post(); ?>
          <h1 class="text-center color-primary"><?php the_title(); ?></h1>

          <?php
          $gallery = get_post_gallery(get_the_ID(), false);
          $gallery_images_ids = explode(',', $gallery['ids']);
            echo "<pre>";
            var_dump($gallery_images_ids);
            echo "</pre>";
          ?>
          <ul class="gallery-images">
            <?php
              $i = 0;
              foreach ($gallery_images_ids as $key => $value) :
                $size = ( $i === 3 || $i == 6) ? 'portrait' : 'square';
                $image = wp_get_attachment_image_src($value, $size);                           
            ?>
            <img src="<?php echo $image[0]; ?>" alt="">            
            <?php $i++; endforeach; ?>
          </ul>
          <?php the_content(); ?>
        <?php endwhile; ?>
      </div>
    </div>
  </div>
</main>

<?php get_footer(); ?>