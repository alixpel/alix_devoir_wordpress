<?php
 get_header(); ?>
  <section class="page-header front-page-header  <?php if(get_theme_mod('fp_container_boxy')) : echo 'boxy-header'; endif; ?>" style="background-image: url('<?php echo get_theme_mod('fp_container_image'); ?>');">
    <h1 class="page-title" style="font-size: <?php echo get_theme_mod('fp_h1_size'); ?>px;"><?php echo _e(get_theme_mod('fp_h1_text')); ?></h1>
    <a href="<?php echo get_theme_mod('fp_button_url_1') ; ?>">
      <button type="button" class="call-to-action <?php echo get_theme_mod('fp_button_style_1'); ?>">
        <?php echo _e(get_theme_mod('fp_button_text_1')); ?>
      </button>
    </a>
  </section>
  <main class="container front-content">
    <section class="custom-presentation">
      <img src="<?php echo get_theme_mod('banner_image'); ?>" alt="">
      <div class="custom-presentation-infos">
        <h2 class="custom-title" style="font-size: <?php echo get_theme_mod('fp_texts_title_h2_size'); ?>px;"><?php echo _e(get_theme_mod('fp_texts_title_h2')); ?></h2>
        <p class="custom-content">
          <?php echo _e(get_theme_mod('fp_text_custom')); ?>
        </p>
        <a href="<?php echo get_theme_mod('fp_button_url_2'); ?>"><!-- faire dropdown -->
          <button type="button" class="call-to-action <?php echo get_theme_mod('fp_button_style_2'); ?>">
            <?php echo _e(get_theme_mod('fp_button_text_2')); ?>
          </button>
        </a>
        <!-- essai dropdown -->
        <form action="<?php get_page_uri('url'); ?>" method="get">
            <?php wp_dropdown_pages(); ?>
            <button type="submit" class="call-to-action <?php echo get_theme_mod('fp_button_style_3'); ?>"><?php echo _e(get_theme_mod('fp_button_text_3')); ?></button>
        </form>
        <!-- fin essai -->
      </div>
    </section>
    <section class="custom-blocks">
      <div class="custom-block">
        <i class="<?php echo get_theme_mod('custom-icon-1'); ?>"></i>
        <h3 class="custom-title"><?php echo _e(get_theme_mod('custom-title-1')); ?></h3>
        <p class="custom-content"><?php echo _e(get_theme_mod('custom-text-1')); ?></p>
      </div>
      <div class="custom-block">
        <i class="<?php echo get_theme_mod('custom-icon-2'); ?>"></i>
        <h3 class="custom-title"><?php echo _e(get_theme_mod('custom-title-2')); ?></h3>
        <p class="custom-content"><?php echo _e(get_theme_mod('custom-text-2')); ?></p>
      </div>
      <div class="custom-block">
        <i class="<?php echo get_theme_mod('custom-icon-3'); ?>"></i>
        <h3 class="custom-title"><?php echo _e(get_theme_mod('custom-title-3')); ?></h3>
        <p class="custom-content"><?php echo _e(get_theme_mod('custom-text-3')); ?></p>
      </div>
    </section>
    <section class="custom-section <?php echo get_theme_mod('fp_quote_background'); ?>">
      <blockquote class="star-quote">
      <p class="quote-content"><?php echo _e(get_theme_mod('fp_quote_text')); ?></p>
      <cite class="quote-footer">
        <?php echo _e(get_theme_mod('fp_quote_source')); ?>
      </cite>
    </blockquote>
    </section>
  </main>
<?php get_footer(); ?>
