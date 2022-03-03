<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head(); ?>
</head>
<body>
  <div class="wrapper-page">
    <div class="wrapper-page-header-and-content">
      <?php
       get_header();
      ?>
      <div class="wrapper-page-content">        
        <?php while (have_posts()) : the_post(); ?>
          <h1><?php the_title(); ?></h1>
          <?php the_content(); ?>
        <?php endwhile ?>
      </div>
    </div>
    <?php
      get_footer();
    ?>
  </div>
</body>
</html>



