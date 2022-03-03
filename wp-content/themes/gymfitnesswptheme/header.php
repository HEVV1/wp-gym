<div class="layout-header">
  <div class="container">
    <div class="header-wrapper">
      <div class="layout-logo-wrapper">
        <a href="<?php echo home_url(); ?>">
          <img src="<?php echo get_template_directory_uri() . "/assets/images/logo.svg" ?>" alt="Logo">
        </a>
      </div>
      <div class="layout-navigation">
        <?php
        $args = array(
          'theme-location' => 'main-menu',
          'container' => 'nav',
          'container_class' => 'main-menu'
        );
        wp_nav_menu($args);
        ?>
      </div>
    </div>
  </div>
</div>