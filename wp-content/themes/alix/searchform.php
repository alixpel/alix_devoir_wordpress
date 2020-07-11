<form id="searchform" method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>">
    <input type="text" class="search-field" name="s" placeholder="<?php _e('Tapez votre recherche', 'alix'); ?> ..." value="<?php echo get_search_query(); ?>">
    <input type="submit" value="<?php _e('Rechercher', 'alix'); ?>">
</form>
