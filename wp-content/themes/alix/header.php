<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="description" content="<?php bloginfo('description'); ?>">
  <meta name="author" content="<?php bloginfo('author'); ?>">
  <title><?php bloginfo('name'); ?></title>
  <link rel="stylesheet" href="<?php get_template_directory_uri() . "/assets/css/style.css" ?>">
  <link rel="stylesheet" href="/assets/css/style.css">
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital@0;1&family=Oswald:wght@500;600;700&display=swap" rel="stylesheet">
  <script src="https://kit.fontawesome.com/4e5f136f21.js" crossorigin="anonymous"></script>
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  <header class="site-header">
    <div class="site-branding">
      <?php if(has_custom_logo()) :
         the_custom_logo();
       else: ?>
        <a href="<?php bloginfo('url'); ?>">
          <?php bloginfo('name'); ?>
        </a>
      <?php endif; ?>
    </div>
    <nav class="navigation navigation-top desktop-navigation"><!-- menu desktop -->
      <?php
      wp_nav_menu(
        array(
          'theme_location'  => 'primary',
          'container' => false
        )
      );
      ?>
    </nav>
    <nav class="navigation navigation-top mobile-navigation"><!-- menu smartphone -->
      <ul>
        <li class="mobile-menu"><i class="fa fa-bars fa-1x"></i>
          <?php
          wp_nav_menu(
            array(
              'theme_location'  => 'primary',
              'menu_class'      => 'sub-navigation', // liste des classes CSS ul
              'container'       => false
            )
          );
           ?>
        </li>
      </ul>
    </nav>
    <nav class="navigation navigation-aside">
      <ul>
        <li class="search-toggle">
          <a href="#">
            <i class="fas fa-search"></i>
          </a>
        </li>
        <li>
          <a href="#">
            <i class="fas fa-shopping-cart"></i>
            <span class="count cart-counter"></span>
          </a>
        </li>
      </ul>
    </nav>
    <section class="search-popup">
        <?php
    		get_search_form();
    		?>
    </section>
  </header>
