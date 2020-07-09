<footer class="site-footer">
  <section class="widgets-sections container">
    <!-- <div class="widgets-section widgets-section-1"> base 1 widget
      <h4 class="widget-title">Zone de widgets 1</h4>
      <p>
        Lorem ipsum dolor sit amet, consectetur adipisicing,
        sed do eiusmod tempor incididunt.
      </p>
    </div> -->
    <div class="widgets-section widgets-section-1" id="widgets-section-1">
      <?php
        if(is_active_sidebar('widgets-section-1')) :
          _e(dynamic_sidebar('widgets-section-1'));
        endif;
       ?>
    </div>
    <div class="widgets-section widgets-section-2" id="widgets-section-2">
      <?php
        if(is_active_sidebar('widgets-section-2')) :
          _e(dynamic_sidebar('widgets-section-2'));
        endif;
       ?>
    </div>
    <div class="widgets-section widgets-section-3" id="widgets-section-3">
      <?php
        if(is_active_sidebar('widgets-section-3')) :
          _e(dynamic_sidebar('widgets-section-3'));
        endif;
       ?>
    </div>
    <div class="widgets-section widgets-section-4" id="widgets-section-4">
      <?php
        if(is_active_sidebar('widgets-section-4')) :
          _e(dynamic_sidebar('widgets-section-4'));
        endif;
       ?>
    </div>
  </section>
  <section class="footer-infos container">
    <div class="copyright">
      <p>© <?php the_time('Y'); echo " ";
            echo get_theme_mod('copyright_name');
            echo ". ";
            echo _e(get_theme_mod('copyright_text')); ?></p>
    </div>
    <div class="social-medias">
      <nav class="navigation navigation-socials navigation-bottom" id="navigation-socials">
        <?php
        wp_nav_menu(
          array(
            'theme_location'  => 'social'
          )
        );
         ?>
      </nav>
    </div>
  </section>
</footer>
</body>
</html>
