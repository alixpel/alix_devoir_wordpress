<?php

function alix_customize_register($wp_customize) {

  // banner

  $wp_customize->add_section(
    'banner',
    array(
      'title'         => 'Bannière',
      'description'   => 'Description de la section'
    )
  );

  $wp_customize->add_setting(
    'banner_image',
    array(
      'default' => get_template_directory() . '/assets/images/joey-thompson-unsplash.jpg',
      'type'    => 'theme_mod'
    )
  );

  $wp_customize->add_control(
    new WP_Customize_Image_control(
      $wp_customize,
      'banner_image',
      array(
        'label'     => 'Image de fond',
        'section'   => 'banner',
        'settings'  => 'banner_image'
      )
    )
  );

// front-page.php

  $wp_customize->add_panel(
    'front_page',
    array(
      'title' => 'Page d\'accueil principale'
    )
  );

  // h1
  $wp_customize->add_section(
    'fp_h1',
    array(
      'title' => 'Titre principal',
      'description' => 'Réglages du titre principal de la page d\'accueil',
      'panel' => 'front_page'
    )
  );

  // texte de h1
  $wp_customize->add_setting(
    'fp_h1_text',
    array(
      'default' => 'Les dates de l\'été !',
      'type'  => 'theme_mod'
    )
  );

  $wp_customize->add_control(
    'fp_h1_text',
    array(
      'label'          => 'Titre principal',
      'description'    => 'Texte du titre principal',
      'section'        => 'fp_h1',
      'setting'        => 'fp_h1_text',
      'type'           => 'text'
    )
  );

  // taille de h1
  $wp_customize->add_setting(
    'fp_h1_size',
    array(
    'default'     => 90,
    'type'        => 'theme_mod'
    )
  );

  $wp_customize->add_control(
    'fp_h1_size',
    array(
      'label'          => 'Taille du titre principal',
      'description'    => 'Taille du titre principal',
      'section'        => 'fp_h1',
      'setting'        => 'fp_h1_size',
      'type'           => 'number'
    )
  );

  // boutons de la front page

  // 1er bouton
  $wp_customize->add_section(
    'fp_button_1',
    array(
      'title'       => 'Bouton 1',
      'description' => 'Bouton en \"savoir plus\"',
      'panel'       => 'front_page'
    )
  );

  $wp_customize->add_setting(
    'fp_button_text_1',
    array(
      'default' => 'Bouton 1',
      'type'    => 'theme_mod'
    )
  );

  $wp_customize->add_control(
    'fp_button_text_1',
    array(
      'label'       => 'Button',
      'description' => 'Texte du bouton',
      'section'     => 'fp_button_1',
      'setting'     => 'fp_button_text',
      'type'        => 'text'
    )
  );

  $wp_customize->add_setting(
    'fp_button_url_1',
    array(
      'default' => '',
      'type'    => 'theme_mod'
    )
  );

  $wp_customize->add_control(
    'fp_button_url_1',
    array(
      'label'       => 'Lien',
      'description' => 'Adresse URL du bouton',
      'section'     => 'fp_button_1',
      'setting'     => 'fp_button_url',
      'type'        => 'url'
    )
  );

  $wp_customize->add_setting(
    'fp_button_style_1',
    array(
      'default' => 'btn-style-1',
      'type'    => 'theme_mod'
    )
  );

  $wp_customize->add_control(
    'fp_button_style_1',
    array(
      'label'       => 'Style',
      'description' => 'Style du bouton',
      'section'     => 'fp_button_1',
      'type'        => 'radio',
      'choices'     => array(
        'btn-style-1' => 'Style 1',
        'btn-style-2' => 'Style 2',
        'btn-style-3' => 'Style 3'
      )
    )
  );

  // 2ème bouton
  $wp_customize->add_section(
    'fp_button_2',
    array(
      'title'       => 'Bouton 2',
      'description' => 'Bouton en \"savoir plus\"',
      'panel'       => 'front_page'
    )
  );

  $wp_customize->add_setting(
    'fp_button_text_2',
    array(
      'default' => 'Bouton 2',
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

  // 3ème bouton
  $wp_customize->add_section(
    'fp_button_3',
    array(
      'title'       => 'Bouton 3',
      'description' => 'Bouton dropdown',
      'panel'       => 'front_page'
    )
  );

  $wp_customize->add_setting(
    'fp_button_text_3',
    array(
      'default' => 'Bouton 3',
      'type'    => 'theme_mod'
    )
  );

  $wp_customize->add_control(
    'fp_button_text_3',
    array(
      'label'       => 'Button',
      'description' => 'Texte du bouton',
      'section'     => 'fp_button_3',
      'setting'     => 'fp_button_text',
      'type'        => 'text'
    )
  );

  $wp_customize->add_setting(
    'fp_button_style_3',
    array(
      'default' => 'btn-style-1',
      'type'    => 'theme_mod'
    )
  );

  $wp_customize->add_control(
    'fp_button_style_3',
    array(
      'label'       => 'Style',
      'description' => 'Style du bouton',
      'section'     => 'fp_button_3',
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
      'title'         => 'Conteneur',
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
        'label'       => 'Image de fond',
        'description' => 'Image de fond du conteneur de la page d\'accueil',
        'section'     => 'fp_container',
        'setting'     => 'fp_container_image'
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
      'type'    => 'theme_mod'
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



  // quote
  $wp_customize->add_section(
    'fp_quote',
    array(
      'title'       => 'Citation',
      'description' => 'Réglages pour la citation de la page d\'accueil principale',
      'panel'       => 'front_page'
    )
  );

  $wp_customize->add_setting(
    'fp_quote_text',
    array(
      'default' => 'Ceci est une belle citation lol',
      'type'    => 'theme_mod'
    )
  );

  $wp_customize->add_control(
    'fp_quote_text',
    array(
      'label'       => 'Citation',
      'description' => 'Texte de la citation',
      'section'     => 'fp_quote',
      'setting'     => 'fp_quote_text',
      'type'        => 'textarea'
    )
  );

  $wp_customize->add_setting(
    'fp_quote_source',
    array(
      'default' => 'Rien ne sert de courir, il faut partir à temps.',
      'type'    => 'theme_mod'
    )
  );

  $wp_customize->add_control(
    'fp_quote_source',
    array(
      'label'       => 'Source',
      'description' => 'Nom de l\'auteur de la citation',
      'section'     => 'fp_quote',
      'setting'     => 'fp_quote_source',
      'type'        => 'textarea'
    )
  );

  $wp_customize->add_setting(
    'fp_quote_background',
    array(
      'default' => 'custom-quote',
      'type'    => 'theme_mod'
    )
  );

  $wp_customize->add_control(
    'fp_quote_background',
    array(
      'label'       => 'Couleur',
      'description' => 'Couleur de fond du bloc de citation',
      'section'     => 'fp_quote',
      'setting'     => 'fp_quote_background',
      'type'        => 'select',
      'choices'     => array(
        'custom-quote'           => 'Par défaut',
        'custom-quote-style-1'   => 'Rouge',
        'custom-quote-style-2'   => 'Vert',
        'custom-quote-style-3'   => 'Bleu',
      )
    )
  );

  // sections custom

  // custom 1

  $wp_customize->add_section(
    'custom-zone-1',
    array(
      'title'       => 'Contenu custom 1',
      'description' => 'Contenu de la zone custom 1',
      'panel'       => 'front_page'
    )
  );

  $wp_customize->add_setting(
    'custom-icon-1',
    array(
      'default' => 'fas fa-icons fa-3x',
      'type'    => 'theme_mod'
    )
  );

  $wp_customize->add_control(
    'custom-icon-1',
    array(
      'label'       => 'Icône',
      'description' => 'Icône de la zone custom 1',
      'section'     => 'custom-zone-1',
      'setting'     => 'custom-icon-1',
      'type'        => 'select',
      'choices'     => array(
        'fas fa-icons fa-3x'          => 'icônes par défaut',
        'fas fa-birthday-cake fa-3x'  => 'gâteau d\'anniversaire',
        'fas fa-music fa-3x'          => 'musique',
        'fas fa-ticket-alt fa-3x'     => 'ticket'
      )
    )
  );

  $wp_customize->add_setting(
    'custom-title-1',
    array(
      'default' => 'Titre zone 1',
      'type'    => 'theme_mod'
    )
  );

  $wp_customize->add_control(
    'custom-title-1',
    array(
      'label'       => 'Titre custom 1',
      'description' => 'Titre de la zone custom 1',
      'section'     => 'custom-zone-1',
      'setting'     => 'custom-title-1',
      'type'        => 'text'
    )
  );

  $wp_customize->add_setting(
    'custom-text-1',
    array(
      'default' => 'Texte zone 1',
      'type'    => 'theme_mod'
    )
  );

  $wp_customize->add_control(
    'custom-text-1',
    array(
      'label'       => 'Texte custom 1',
      'description' => 'Texte de la zone custom 1',
      'section'     => 'custom-zone-1',
      'setting'     => 'custom-text-1',
      'type'        => 'textarea'
    )
  );

  // custom 2

  $wp_customize->add_section(
    'custom-zone-2',
    array(
      'title'       => 'Contenu custom 2',
      'description' => 'Contenu de la zone custom 2',
      'panel'       => 'front_page'
    )
  );

  $wp_customize->add_setting(
    'custom-icon-2',
    array(
      'default' => 'fas fa-icons fa-3x',
      'type'    => 'theme_mod'
    )
  );

  $wp_customize->add_control(
    'custom-icon-2',
    array(
      'label'       => 'Icône',
      'description' => 'Icône de la zone custom 2',
      'section'     => 'custom-zone-2',
      'setting'     => 'custom-icon-2',
      'type'        => 'select',
      'choices'     => array(
        'fas fa-icons fa-3x'          => 'icônes par défaut',
        'fas fa-birthday-cake fa-3x'  => 'gâteau d\'anniversaire',
        'fas fa-music fa-3x'          => 'musique',
        'fas fa-ticket-alt fa-3x'     => 'ticket'
      )
    )
  );

  $wp_customize->add_setting(
    'custom-title-2',
    array(
      'default' => 'Titre zone 2',
      'type'    => 'theme_mod'
    )
  );

  $wp_customize->add_control(
    'custom-title-2',
    array(
      'label'       => 'Titre custom 2',
      'description' => 'Titre de la zone custom 2',
      'section'     => 'custom-zone-2',
      'setting'     => 'custom-title-2',
      'type'        => 'text'
    )
  );

  $wp_customize->add_setting(
    'custom-text-2',
    array(
      'default' => 'Texte zone 2',
      'type'    => 'theme_mod'
    )
  );

  $wp_customize->add_control(
    'custom-text-2',
    array(
      'label'       => 'Texte custom 2',
      'description' => 'Texte de la zone custom 2',
      'section'     => 'custom-zone-2',
      'setting'     => 'custom-text-2',
      'type'        => 'textarea'
    )
  );

  // cutsom 3

  $wp_customize->add_section(
    'custom-zone-3',
    array(
      'title'       => 'Contenu custom 3',
      'description' => 'Contenu de la zone custom 3',
      'panel'       => 'front_page'
    )
  );

  $wp_customize->add_setting(
    'custom-icon-3',
    array(
      'default' => 'fas fa-icons fa-3x',
      'type'    => 'theme_mod'
    )
  );

  $wp_customize->add_control(
    'custom-icon-3',
    array(
      'label'       => 'Icône',
      'description' => 'Icône de la zone custom 3',
      'section'     => 'custom-zone-3',
      'setting'     => 'custom-icon-3',
      'type'        => 'select',
      'choices'     => array(
        'fas fa-icons fa-3x'          => 'icônes par défaut',
        'fas fa-birthday-cake fa-3x'  => 'gâteau d\'anniversaire',
        'fas fa-music fa-3x'          => 'musique',
        'fas fa-ticket-alt fa-3x'     => 'ticket'
      )
    )
  );

  $wp_customize->add_setting(
    'custom-title-3',
    array(
      'default' => 'Titre zone 3',
      'type'    => 'theme_mod'
    )
  );

  $wp_customize->add_control(
    'custom-title-3',
    array(
      'label'       => 'Titre custom 3',
      'description' => 'Titre de la zone custom 3',
      'section'     => 'custom-zone-3',
      'setting'     => 'custom-title-3',
      'type'        => 'text'
    )
  );

  $wp_customize->add_setting(
    'custom-text-3',
    array(
      'default' => 'Texte zone 3',
      'type'    => 'theme_mod'
    )
  );

  $wp_customize->add_control(
    'custom-text-3',
    array(
      'label'       => 'Texte custom 3',
      'description' => 'Texte de la zone custom 3',
      'section'     => 'custom-zone-3',
      'setting'     => 'custom-text-3',
      'type'        => 'textarea'
    )
  );

  // zone de widgets latérale :

  $wp_customize->add_section(
    'widget-sidebar',
    array(
      'title'       => 'Zone de widgets latérale',
      'description' => 'Masquer la zone de widgets latérale'
    )
  );

  $wp_customize->add_setting(
    'widgets-sidebar',
    array(
    'default'     => false,
    'type'        => 'theme_mod'
    )
  );

  $wp_customize->add_control(
    'widgets-sidebar',
    array(
      'label'       => 'Zone de widgets latérale',
      'description' => 'Masquer la zone de widgets latérale',
      'section'     => 'widget-sidebar',
      'setting'     => 'widgets-sidebar',
      'type'        => 'checkbox'
    )
  );

  // footer
  $wp_customize->add_section(
  'footer',
    array(
      'title'         => 'footer',
      'description'   => 'Personnalisation du bas de page'
    )
  );

  $wp_customize->add_setting(
    'copyright_name',
    array(
      'default' => 'Nom',
      'type'    => 'theme_mod'
    )
  );

  $wp_customize->add_control(
    'copyright_name',
    array(
      'label'       => 'Nom copyright',
      'description' => 'Nom du copyright',
      'section'     => 'footer',
      'setting'     => 'copyright_name',
      'type'        => 'text'
    )
  );

  $wp_customize->add_setting(
    'copyright_text',
    array(
      'default' => 'Tous droits réservés',
      'type'    => 'theme_mod'
    )
  );

  $wp_customize->add_control(
    'copyright_text',
    array(
      'label'       => 'Texte copyright',
      'description' => 'Texte du champ copyright',
      'section'     => 'footer',
      'setting'     => 'copyright_text',
      'type'        => 'text'
    )
  );




}

add_action('customize_register', 'alix_customize_register');

 ?>
