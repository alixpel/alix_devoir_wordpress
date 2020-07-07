<?php get_header(); ?>
  <main class="container site-content">
    <section class="main-content">
      <article class="entry post">
        <header class="entry-header">
          <img src="./assets/images/joey-thompson-unsplash.jpg" alt="Foule"
          class="featured-image">
          <section class="entry-metadata">
            <section class="entry-data">
              <h6 class="publish-date"><?php the_time('F j, Y'); ?></h6>
              <!-- Catégorie -->
              <?php
              $categories = get_the_category();
              $separator = " ";
              $output = '';
              if($categories) {
                forEach($categories as $category) {
                  $output .= '<h5 class="entry-category"><a href="'.get_category_link($category
                  ->term_id).'">'.$category->cat_name .'</a></h5>' . $separator;
                }
              }
              echo trim($output, $separator);
              ?>
              <!-- Fin catégorie -->
              <h4 class="comments-number"><i class="fas fa-comment"></i> 3</h4>
            </section>
            <h2 class="entry-title">
              <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
            </h2>
          </section>
        </header>
        <section class="entry-content">
          <?php the_excerpt(); ?>
        </section>
        <footer class="entry-footer">
          <div class="read-more">
            <a href="<?php the_permalink(); ?>">Lire la suite</a>
          </div>
        </footer>
      </article>
      <nav class="navigation pagination">
        <?php
        the_posts_pagination(
          array(
            'prev_text'          => '<i class="fas fa-arrow-left"></i> Précédent',
            'next_text'          => 'Suivant <i class="fas fa-arrow-right"></i>'
          )
        );
        ?>
      </nav>
    </section>
    <aside class="sidebar">
      <!-- <div class="widget">
        <h3 class="widget-title">Zone de widgets</h3>
        <p>Ajout dynamique des titres et contenus des widgets.</p>
      </div> -->
      <?php get_sidebar(); ?>
    </aside>
  </main>
<?php get_footer(); ?>
