<footer class="l-footer">
    <div class="p-footer__contents">
        <?php 
            wp_nav_menu(array(
                'theme_location' => 'footer_nav',
                'container' => 'nav',
                'container_class' => 'nav',
                'menu_class' => 'nav_item',
            ));
        ?>
            <p class="p-footer__contents__note">Copyright: RaiseTech</p>
        </div>
</footer>
</body>
<?php wp_footer(); ?>
</html>