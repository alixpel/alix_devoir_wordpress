<aside class="sidebar <?php if(get_theme_mod('widgets-sidebar')) : echo 'hidden'; endif; ?>" id="widgets-sidebar">
  <?php
    if(is_active_sidebar('widgets-sidebar')) :
      dynamic_sidebar('widgets-sidebar');
    endif;
   ?>
</aside>
