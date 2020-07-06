<?php

function alix_setup() {

  register_nav_menus(
    array(
      'primary' => 'Menu Principal',
      'secondary' => 'Menu Secondaire',
      'social'  => 'Menu réseaux sociaux'
    )
  );
  add_theme_support('custom-logo');

}

add_action('after_setup_theme', 'alix_setup');


function descodeuses_init_widgets() {
  // TODO COURS - Enregistrer une zone de widget N°1
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

  // TODO En autonomie - Enregister les zones de widgets N°2 et N°3
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

  // TODO A la maison - Enregister les zones de widgets N°4 et barre latérale

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


 ?>
