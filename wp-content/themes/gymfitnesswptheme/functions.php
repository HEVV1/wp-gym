<?php
//Link to the queries
require get_template_directory() . '/inc/queries.php';

// Creates the menu
function gymfitness_menus()
{
  //Wordpress Function
  register_nav_menus(array(
    'main-menu' => 'Main Menu'
  ));
}
add_action('init', 'gymfitness_menus');

//Loads the scripts and links
function gymfitness_scripts()
{
  $ver = '5.9.1';
  //Add public css
  wp_enqueue_style('public_css', get_template_directory_uri() . '/assets/dist/css/public.css', array(), $ver);
  wp_enqueue_style('lightbox_css', get_template_directory_uri() . '/assets/dist/css/lightbox.min.css', array(), $ver);
  /* Load JS files */
  wp_enqueue_script('jquery');
  if (basename(get_page_template()) === 'gallery.php') {
    wp_enqueue_script('lightboxjs', get_template_directory_uri() . '/assets/fake_node_modules/lightbox/lightbox.min.js', array('jquery'), '2.11.2', true);  
  }  
  wp_enqueue_script('menujs', get_template_directory_uri() . '/assets/js/modules/menu.js', array('jquery'), '3.3.2', true);
}
add_action('wp_enqueue_scripts', 'gymfitness_scripts');

//Remove margin top
add_theme_support('admin-bar', array('callback' => '__return_false'));

//Add class to link
function add_menu_link_class($atts, $item, $args)
{
  if (property_exists($args, 'link_class')) {
    $atts['class'] = $args->link_class;
  }
  return $atts;
}
add_filter('nav_menu_link_attributes', 'add_menu_link_class', 1, 3);

//Enable Feature images and other stuff
function gymfitness_setup()
{
  //Register new image size
  add_image_size('square', 350, 350, true);
  add_image_size('portrait', 350, 724, true);
  add_image_size('box', 400, 375, true);
  add_image_size('mediumSize', 700, 400, true);
  add_image_size('blog', 966, 644, true);

  //Add featured image
  add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'gymfitness_setup'); //When the theme is activated and ready! 

// Creates a Widget Zone
function gymfitness_widgets(){
  register_sidebar( array(
    'name' => 'Sidebar',
    'id' => 'sidebar',
    'before_widget' => '<div class="widget">',
    'after_widget' => '</div>',
    'before_title' => '<h3> class="styled-as-h3"',
    'after_title' => '</h3>'
  ) );
}
add_action('widgets_init', 'gymfitness_widgets');