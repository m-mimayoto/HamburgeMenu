<aside class="p-aside">
    <nav class="l-nav">
        <div class="c-button--close">
            <span class="c-button--line"></span>
        </div>
        <p class="p-nav__memu">Menu</p>
               
        <?php 
            wp_nav_menu(array(
                'theme_location' => 'side_nav',
                'container' => 'div',
                'container_class' => 'nav__contents__list',
                'menu_class' => 'nav__contents__list__item',
            ));
        ?>

    </nav>
</aside>
<div class="l-aside__layer"></div>
