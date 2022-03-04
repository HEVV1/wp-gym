<div class="layout-header">
  <div class="block-menu">
  <input type="checkbox" class="navigation-checkbox" id="nav-toggle">
    <div class="menu-button">      
      <label for="nav-toggle">
        Menu
        <div class="menu-button-icon"></div>
      </label>
    </div>
    <div class="menu-hidden">
      <div class="container">
        <div class="menu-hidden-wrapper">
        <?php
          $args = array(
            'theme_location' => 'main-menu',
            'container' => 'nav',
            'container_class' => 'main-menu',
            'link_class' => 'nav-link white'
          );
          wp_nav_menu($args);
        ?>
        </div>
      </div>
    </div>
  </div>

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
            'container_class' => 'main-menu',
            'link_class' => 'nav-link white'
          );
          wp_nav_menu($args);
        ?>
      </div>
    </div>
  </div>
</div>