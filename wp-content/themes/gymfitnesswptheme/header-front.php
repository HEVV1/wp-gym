<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head(); ?>
</head>

<body class="front-page">
  <div class="wrapper-page">
    <div class="wrapper-page-header-and-content">
      <header class="layout-header front-page">
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
        <div class="block-menu">
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
        <div class="tagline text-center">
          <h1><?php the_field('hero_tagline'); ?></h1>
          <p><?php the_field('hero_content'); ?></p>
          <p><?php the_field('hero_image'); ?></p>
        </div>
      </header>
      <div class="wrapper-page-content">