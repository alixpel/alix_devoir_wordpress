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
          dynamic_sidebar('widgets-section-1');
        endif;
       ?>
    </div>
    <div class="widgets-section widgets-section-2" id="widgets-section-2">
      <?php
        if(is_active_sidebar('widgets-section-2')) :
          dynamic_sidebar('widgets-section-2');
        endif;
       ?>
    </div>
    <div class="widgets-section widgets-section-3" id="widgets-section-3">
      <?php
        if(is_active_sidebar('widgets-section-3')) :
          dynamic_sidebar('widgets-section-3');
        endif;
       ?>
    </div>
    <div class="widgets-section widgets-section-4" id="widgets-section-4">
      <?php
        if(is_active_sidebar('widgets-section-4')) :
          dynamic_sidebar('widgets-section-4');
        endif;
       ?>
    </div>
  </section>
  <section class="footer-infos container">
    <div class="copyright">
      <p>© 2020 Descodeuses. Tous droits réservés.</p>
    </div>
    <div class="social-medias">
      <nav class="navigation navigation-bottom">
        <ul>
          <li><a href="#">Home</a></li>
          <li><a href="#">Shop</a></li>
          <li><a href="index.html">Blog</a></li>
          <li><a href="#">Contact</a></li>
        </ul>
      </nav>
    </div>
  </section>
</footer>
</body>
</html>
