 <?php get_header(); ?>

        <div class="wrapper">
            <main>
                <section class="p-top">
                <div class="l-top__title__layer"></div>
                <div class="l-top--archive"></div>
                    <h2 class="p-top__title--menu">Menu:</h2>
                    <p class="p-top__subtitle--archive"><?php echo esc_html(single_term_title('',false));?> <!--チーズバーガー--></p>
                </section><!--p-top-->

                <section class="p-menu">
                    <article class="p-menu__desc">
                        <h2 class="p-menu__desc__title"><?php echo esc_html(single_term_title('',false));?><!--小見出しが入ります--></h2>
                        <p class="p-menu__desc__text">テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
                    </article>

                    <?php if(have_posts()) : ?>
                        <?php while(have_posts()) : the_post(); ?>
                        <?php get_template_part('sample'); ?>
                            <?php 
                            endwhile;
                        else:?><p>表示できる記事がありません。</p>
                     <?php endif; ?>
                     
                    <section class="p-menu__page">

                    </section><!--p-menu__page-->
                </section><!--p-menu-->
            </main>

            <section class="l-menu__pagenation">
                <div class="l-pagenation">
                    <p class="p-pagenation__count">page 1/10</p>
                    <a href="#" class="p-pagenation__pre">
                        <i class="fas fa-angle-double-left fa-lg p-pagenation__pre--left"></i>
                        <p class="p-pagenation__before">前へ</p>
                    </a>
                    <ul>
                        <li><a href="#" class="p-pagenation--color">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                        <li><a href="#">6</a></li>
                        <li><a href="#">7</a></li>
                        <li><a href="#">8</a></li>
                        <li><a href="#">9</a></li>
                    </ul>
                    <a href="#" class="p-pagenation__next">
                        <p class="p-pagenation__after">次へ</p>
                        <i class="fas fa-angle-double-right fa-lg p-pagenation__next--right"></i>
                    </a>
                </div>
            </section>

            <?php get_sidebar(); ?>
        </div><!--wrapper-->

        <?php get_footer(); ?>
    