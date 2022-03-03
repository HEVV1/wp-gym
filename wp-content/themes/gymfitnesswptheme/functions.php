<?php
// Creates the menu
function gymfitness_menus()
{
  //Wordpress Function
  register_nav_menus(array(
    'main-menu' => 'Main Menu'
  ));
}
//Hook
add_action('init', 'gymfitness_menus');

function gymfitness_scripts()
{
  $ver = '5.9.1';
  //css
  wp_enqueue_style('public', get_template_directory_uri() . '/assets/dist/css/public.css', array(), $ver);
}
//Hook
add_action('wp_enqueue_scripts', 'gymfitness_scripts');