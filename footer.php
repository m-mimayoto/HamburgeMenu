<footer class="l-footer">
            <div class="p-footer__contents">
            <?php 
            $args = array(
                'theme_location' => 'footer_nav',
                'container' => 'nav',
                'container_class' => 'nav',
                'menu_class' => 'nav_item',
                //'link_after' => '|'
            );
            wp_nav_menu($args);?>
            
            <!--wp_nav_menu( array( 'theme_location' => 'footer_nav' ) ); ?>-->
               <!-- <p class="p-footer__contents__items"><a class="p-footer__contents__item">ショップ情報</a>｜<a class="p-footer__contents__item">ヒストリー</a></p>-->
                <p class="p-footer__contents__note">Copyright: RaiseTech</p>
            </div>
</footer>
</body>
<?php wp_footer(); ?>
</html>