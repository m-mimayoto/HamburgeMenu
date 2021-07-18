<aside class="p-aside">
    <nav class="l-nav">
        <div class="c-button--close">
        <span class="c-button--line"></span>
        </div>
            <p class="p-nav__memu">Menu</p>
                
            <?php
                if ( is_active_sidebar( 'menu_widget' ) ) :
                        dynamic_sidebar( 'menu_widget' );
                else:
            ?>

            <div class="widget">
                <h2>No Widget</h2>
                <p>ウィジットは設定されていません。</p>
            </div>
            <?php endif; ?>
        </div>
    </nav>
</aside>
<div class="l-aside__layer"></div>