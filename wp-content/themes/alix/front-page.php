<?php get_header(); ?>
  <section class="page-header front-page-header  <?php if(get_theme_mod('fp_container_boxy')) : echo 'boxy-header'; endif; ?>" style="background-image: url('<?php echo get_theme_mod('fp_container_image'); ?>');">
    <h1 class="page-title" style="font-size: <?php echo get_theme_mod('fp_texts_title'); ?>px;"><?php echo get_theme_mod('fp_texts_title'); ?></h1>
    <a href="<?php echo get_theme_mod('fp_button_url') ; ?>">
      <button type="button" class="call-to-action">
        <?php echo get_theme_mod('fp_button_text'); ?>
      </button>
  </a>
  </section>
  <main class="container front-content">
    <section class="custom-presentation">
      <img src="./assets/images/yannis-papanastasopoulos-unsplash.jpg" alt=""><!-- *** A RENDRE CUSTOMIZABLE *** -->
      <div class="custom-presentation-infos">
        <h2 class="custom-title" style="font-size: <?php echo get_theme_mod('fp_texts_title_h2_size'); ?>px;"><?php echo get_theme_mod('fp_texts_title_h2'); ?></h2>
        <p class="custom-content">
          <?php echo get_theme_mod('fp_text_custom') ?>
        </p>
        <a href="page.html">
          <button type="button" class="call-to-action <?php echo get_theme_mod('fp_button_style_2'); ?>"><?php echo get_theme_mod('fp_button_text_2'); ?></button>
        </a>
      </div>
    </section>
    <section class="custom-blocks">
      <div class="custom-block">
        <i class="fas fa-birthday-cake fa-3x"></i>
        <h3 class="custom-title">Concert célébration</h3>
        <p class="custom-content">
          Lorem ipsum dolor sit amet, consectetur adipisicing,
          sed do eiusmod tempor incididunt.
        </p>
      </div>
      <div class="custom-block">
        <i class="fas fa-music fa-3x"></i>
        <h3 class="custom-title">L'amour de la musique</h3>
        <p class="custom-content">
          Lorem ipsum dolor sit amet, consectetur adipisicing,
          sed do eiusmod tempor incididunt.
        </p>
      </div>
      <div class="custom-block">
        <i class="fas fa-ticket-alt fa-3x"></i>
        <h3 class="custom-title">+3000 tickets en vente</h3>
        <p class="custom-content">
          Lorem ipsum dolor sit amet, consectetur adipisicing,
          sed do eiusmod tempor incididunt.
        </p>
      </div>
    </section>
    <section class="custom-section <?php echo get_theme_mod('fp_quote_background'); ?>">
      <blockquote class="star-quote">
      <p class="quote-content">
        <?php echo get_theme_mod('fp_quote_text'); ?>
      </p>
      <cite class="quote-footer">
        <?php echo get_theme_mod('fp_quote_source'); ?>
      </cite>
    </blockquote>
    </section>
  </main>
<?php get_footer(); ?>
