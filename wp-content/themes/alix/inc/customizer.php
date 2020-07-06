<?php

function alix_customize_register($wp_customize) {

// front-page.php

  $wp_customize->add_section(
    'fp_texts_title',
    array(
      'default' => 'Concert !',
      'type'  => 'theme_mod'
    )
  );

  $wp_customize->add_control(
    'fp_texts_title',
    array(
      'label'          => 'Titre principal',
      'description'    => 'Texte du titre principal',
      'section'        => 'fp_texts',
      'setting'        => 'fp_texts_title',
      'type'           => 'text'
    )
  );

  $wp_customize->add_setting(
    'fp_texts_title_size',
    array(
    'default'     => 90,
    'type'        => 'theme_mod'
    )
  );

  $wp_customize->add_control(
    'fp_texts_title_size',
    array(
      'label'          => 'Taille du titre',
      'description'    => 'Taille du texte du titre principal',
      'section'        => 'fp_texts',
      'setting'        => 'fp_texts_title_size',
      'type'           => 'number'
    )
  );

  $wp_customize->add_section(
    'fp_button',
    array(
      'title' => 'Bouton',
      'description' => 'Bouton pour la réservation de billets',
      'panel' => 'front_page'
    )
  );

  $wp_customize->add_setting(
    'fp_button_text',
    array(
      'default' => 'Un appel à l\'action',
      'type'    => 'theme_mod'
    )
  );

  $wp_customize->add_control(
    'fp_button_text',
    array(
      'label'       => 'Button',
      'description' => 'Texte du bouton',
      'section'     => 'fp_button',
      'setting'     => 'fp_button_text',
      'type'        => 'text'
    )
  );

  $wp_customize->add_setting(
    'fp_button_url',
    array(
      'default' => '',
      'type'    => 'theme_mod'
    )
  );

  $wp_customize->add_control(
    'fp_button_url',
    array(
      'label'       => 'Lien',
      'description' => 'Adresse URL du bouton',
      'section'     => 'fp_button',
      'setting'     => 'fp_button_url',
      'type'        => 'url'
    )
  );

  $wp_customize->add_setting(
    'fp_button_style',
    array(
      'default' => 'btn-style-1',
      'type'    => 'theme_mod'
    )
  );

  $wp_customize->add_control(
    'fp_button_style',
    array(
      'label'       => 'Style',
      'description' => 'Style du bouton',
      'section'     => 'fp_button',
      'type'        => 'radio',
      'choices'     => array(
        'btn-style-1' => 'Style 1',
        'btn-style-2' => 'Style 2',
        'btn-style-3' => 'Style 3'
      )
    )
  );

  $wp_customize->add_section(
    'fp_container',
    array(
      'title' => 'Conteneur',
      'description'   => 'Réglages du conteneur de la page d\'accueil principale',
      'panel'         => 'front_page'
    )
  );

  $wp_customize->add_setting(
    'fp_container_image',
    array(
    'default'   => get_template_directory() . './assets/images/yannis-papanastasopoulos-unsplash.jpg',
    'type'      => 'theme_mod'
    )
  );

  $wp_customize->add_control(
    new WP_Customize_Image_control(
      $wp_customize,
      'fp_container_image',
      array(
        'label'   => 'Image de fond',
        'description' => 'Image de fond du conteneur de la page d\'accueil',
        'section' => 'fp_container',
        'setting'  => 'fp_container_image'
      )
    )
  );

  $wp_customize->add_setting(
    'fp_container_boxy',
    array(
    'default'     => false,
    'type'        => 'theme_mod'
    )
  );

  $wp_customize->add_control(
      'fp_container_boxy',
      array(
        'label'       => 'Affichage avec effet boxy',
        'description' => 'Style du conteneur de la page d\'accueil.',
        'section'     => 'fp_container',
        'setting'     => 'fp_container_boxy',
        'type'        => 'checkbox'
      )
  );

  $wp_customize->add_section(
    'fp_texts_title_h2',
    array(
      'default' => 'Un super groupe de musique',
      'type'  => 'theme_mod'
    )
  );

  $wp_customize->add_control(
    'fp_texts_title_h2',
    array(
      'label'          => 'Sous-titre',
      'description'    => 'Texte du sous-titre',
      'section'        => 'fp_texts',
      'setting'        => 'fp_texts_title_h2',
      'type'           => 'text'
    )
  );

  $wp_customize->add_setting(
    'fp_texts_title_h2_size',
    array(
    'default'     => 70,
    'type'        => 'theme_mod'
    )
  );

  $wp_customize->add_control(
    'fp_texts_title_h2_size',
    array(
      'label'          => 'Taille du titre',
      'description'    => 'Taille du texte du titre principal',
      'section'        => 'fp_texts',
      'setting'        => 'fp_texts_title_h2_size',
      'type'           => 'number'
    )
  );

  $wp_customize->add_setting(
    'fp_texts_custom',
    array(
      'default' => 'Texte d\'accueil personnalisé.',
      'type'    => 'theme_mod'
    )
  );

  $wp_customize->add_control(
    'fp_texts_custom',
    array(
      'label'       => 'Personnaliser',
      'description' => 'Texte d\'accueil',
      'section'     => 'fp_texts',
      'setting'     => 'fp_texts_custom',
      'type'        => 'textarea'
    )
  );

  $wp_customize->add_section(
    'fp_button_2',
    array(
      'title' => 'Bouton',
      'description' => 'Bouton en \"savoir plus\"',
      'panel' => 'front_page'
    )
  );

  $wp_customize->add_setting(
    'fp_button_text_2',
    array(
      'default' => 'En savoir plus',
      'type'    => 'theme_mod'
    )
  );

  $wp_customize->add_control(
    'fp_button_text_2',
    array(
      'label'       => 'Button',
      'description' => 'Texte du bouton',
      'section'     => 'fp_button_2',
      'setting'     => 'fp_button_text',
      'type'        => 'text'
    )
  );

  $wp_customize->add_setting(
    'fp_button_url_2',
    array(
      'default' => '',
      'type'    => 'theme_mod'
    )
  );

  $wp_customize->add_control(
    'fp_button_url_2',
    array(
      'label'       => 'Lien',
      'description' => 'Adresse URL du bouton',
      'section'     => 'fp_button_2',
      'setting'     => 'fp_button_url',
      'type'        => 'url'
    )
  );

  $wp_customize->add_setting(
    'fp_button_style_2',
    array(
      'default' => 'btn-style-1',
      'type'    => 'theme_mod'
    )
  );

  $wp_customize->add_control(
    'fp_button_style_2',
    array(
      'label'       => 'Style',
      'description' => 'Style du bouton',
      'section'     => 'fp_button_2',
      'type'        => 'radio',
      'choices'     => array(
        'btn-style-1' => 'Style 1',
        'btn-style-2' => 'Style 2',
        'btn-style-3' => 'Style 3'
      )
    )
  );












}

add_action('customize_register', 'alix_customize_register');

 ?>
