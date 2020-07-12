<?php

function alix_setup() {

  register_nav_menus(
    array(
      'primary' => 'Menu Principal',
      'secondary' => 'Menu Secondaire',
      'footer'  => 'Menu de pied de page',
      'social'  => 'Menu réseaux sociaux'
    )
  );
  add_theme_support('custom-logo');
  add_theme_support('post_thumbnails');
}

add_action('after_setup_theme', 'alix_setup');

function alix_init_widgets() {

  register_sidebar(
    array(
      'id'  => 'widgets-section-1',
      'name'  => 'Zone de widgets 1',
      'description' => 'Description de la zone de widgets',
      'before_widget' => '<div class="widget">',
      'after_widget'  => '</div>',
      'before_title'  => '<h4 class="widget-title widgettitle">',
      'after_title' => '</h4>'
    )
  );

  register_sidebar(
    array(
      'id'  => 'widgets-section-2',
      'name'  => 'Zone de widgets 2',
      'description' => 'Description de la zone de widgets',
      'before_widget' => '<div class="widget">',
      'after_widget'  => '</div>',
      'before_title'  => '<h4 class="widget-title widgettitle">',
      'after_title' => '</h4>'
    )
  );

  register_sidebar(
    array(
      'id'  => 'widgets-section-3',
      'name'  => 'Zone de widgets 3',
      'description' => 'Description de la zone de widgets',
      'before_widget' => '<div class="widget">',
      'after_widget'  => '</div>',
      'before_title'  => '<h4 class="widget-title widgettitle">',
      'after_title' => '</h4>'
    )
  );

  register_sidebar(
    array(
      'id'  => 'widgets-section-4',
      'name'  => 'Zone de widgets 4',
      'description' => 'Description de la zone de widgets',
      'before_widget' => '<div class="widget">',
      'after_widget'  => '</div>',
      'before_title'  => '<h4 class="widget-title widgettitle">',
      'after_title' => '</h4>'
    )
  );

  register_sidebar(
    array(
      'id'  => 'widgets-sidebar',
      'name'  => 'Zone de widgets de la barre latérale',
      'description' => 'Description de la zone de widgets',
      'before_widget' => '<div class="widget">',
      'after_widget'  => '</div>',
      'before_title'  => '<h4 class="widget-title widgettitle">',
      'after_title' => '</h4>'
    )
  );
}
// Exécution de notre fonction immédiatement après l'exécution de widgets_init
add_action('widgets_init', 'alix_init_widgets');

require get_template_directory() . '/inc/customizer.php';

// traduction
load_theme_textdomain( 'alix', '/languages' );

// path js & css
function theme_js() {
  wp_enqueue_script( 'main',
  get_template_directory_uri() . '/assets/js/main.js',
  array() );
}
add_action( 'wp_enqueue_scripts', 'theme_js' );

function alix_register_assets() {
  wp_enqueue_style('style', get_template_directory_uri() . '/assets/css/style.css');
}
add_action('init', 'alix_register_assets');

// function find_css() {
//   wp_enqueue_style('style', get_stylesheet_uri());
// }
// add_action('wp_enqueue_styles', 'find_css');

function test(){
echo '<p class="hello"> page test : Hello World !!</p>';
}
add_action( 'test', 'test');

 ?>
