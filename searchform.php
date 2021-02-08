<form id="searchform" method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>" class="menu__search">
    <input 
    type="text" 
    class="search-field menu__search-input" 
    name="s" 
    placeholder="Szukaj na blogu" 
    value="<?php echo get_search_query(); ?>">
   
        <button type="submit" class="menu__search-icon"></button>
      </form>
</form>