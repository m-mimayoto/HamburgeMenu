<form class="p-header__search"  action="<?php echo home_url('/'); ?>" method="GET">
    <i class="c-search__icon fas fa-search fa-lg"></i>
    <input class="p-header__search__box" type="text" value="<?php the_search_query();?>" name="s" id="s">
    <input class="c-button__search" type="submit" value="検索">
</form>