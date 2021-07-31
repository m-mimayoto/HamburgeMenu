<aside class="p-aside">
            <nav class="l-nav">
                <div class="c-button--close">
                    <span class="c-button--line"></span>
                </div>
                <p class="p-nav__memu">Menu</p>
               
                <?php 
                $args = array(
                    'theme_location' => 'side_nav',
                    'container' => 'div',
                    'container_class' => 'nav__contents__list',
                    'menu_class' => 'nav__contents__list__item',
                );
                wp_nav_menu($args);?>

                <!--
                <section class="p-hnav__contents">
                    <h3  class="p-hnav__contents__title"><a href="">バーガー</a></h3>
                    <div class="p-hnav__contents__list--margin">
                    <Ul class="p-hnav__contents__list">
                        <li class="p-hnav__contents__list__item"><a href="">ハンバーガー</a></li>
                        <li class="p-hnav__contents__list__item"><a href="">チーズバーガー</a></li>
                        <li class="p-hnav__contents__list__item"><a href="">テリヤキバーガー</a></li>
                        <li class="p-hnav__contents__list__item"><a href="">アボカドバーガー</a></li>
                        <li class="p-hnav__contents__list__item"><a href="">フィッシュバーガー</a></li>
                        <li class="p-hnav__contents__list__item"><a href="">ベーコンバーガー</a></li>
                        <li class="p-hnav__contents__list__item"><a href="">チキンバーガー</a></li>
                    </Ul>
                </div>
                </section>

                <section class="p-snav__contents">
                    <h3 class="p-snav__contents__title"><a href="">サイド</a></h3>
                    <div class="p-snav__contents__list--margin">
                    <ul class="p-snav__contents__list">
                        <li class="p-snav__contents__list__item"><a href="">ポテト</a></li>
                        <li class="p-snav__contents__list__item"><a href="">サラダ</a></li>
                        <li class="p-snav__contents__list__item"><a href="">ナゲット</a></li>
                        <li class="p-snav__contents__list__item"><a href="">コーン</a></li>
                    </ul>
                    </div>
                </section>

                <section class="p-dnav__contents">
                    <h3 class="p-dnav__contents__title"><a href="">ドリンク</a></h3>
                    <div class="p-dnav__contents__list--margin">
                    <ul class="p-dnav__contents__list">
                        <li class="p-dnav__contents__list__item"><a href="">コーラ</a></li>
                        <li class="p-dnav__contents__list__item"><a href="">ファンタ</a></li>
                        <li class="p-dnav__contents__list__item"><a href="">オレンジ</a></li>
                        <li class="p-dnav__contents__list__item"><a href="">アップル</a></li>
                        <li class="p-dnav__contents__list__item"><a href="">紅茶（Ice/Hot）</a></li>
                        <li class="p-dnav__contents__list__item"><a href="">コーヒー（Ice/Hot）</a></li>
                    </ul>
                </div>
                </section>
                -->
            </nav>
        </aside>
            <div class="l-aside__layer"></div>
