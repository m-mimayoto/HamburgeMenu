 <?php get_header(); ?>
        <div class="wrapper">
        <main>
            <section class="p-top l-top">
                <h2 class="p-top__title"><?php bloginfo('description'); ?></h2>
            </section>

            <section class="l-service-wrapprer">
                <ul class="l-service">
                    <li class="l-service__takeout">
                        <?php
                            $category_id = get_cat_ID( 'Take Out' );
                            $category_link = get_category_link( $category_id );
                        ?>
                         <a class="p-service__link--takeout" href="<?php echo esc_url( $category_link ); ?>">
                        <h2 class="p-service__title--takeout"><?php echo get_cat_name(30);?></h2></a>
                        <ul class="l-service__inner">
                            <li class="p-service__cat--top">
                                <h3 class="p-service__cat__heading"><?php echo get_cat_name(30);?></h3>
                                <p class="p-service__cat__item">当店のテイクアウトで利用できる商品を掲載しています。</p>
                            </li>
                            <li class="p-service__cat--bottom">
                                <h3 class="p-service__cat__heading"><?php echo get_cat_name(30);?></h3>
                                <p class="p-service__cat__item">当店のテイクアウトで利用できる商品を掲載しています。</p>
                            </li>
                        </ul>
                    </li>

                    <li class="l-service__eatin">
                    <?php
                            $category_id = get_cat_ID( 'Eat In' );
                            $category_link = get_category_link( $category_id );
                        ?>
                        <a class="p-service__link--eatin" href="<?php echo esc_url( $category_link ); ?>">
                        <h2 class="p-service__title--eatin"><?php echo get_cat_name(31);?></h2></a>
                        <ul class="p-service__inner">
                            <li class="p-service__cat--top">
                                <h3 class="p-service__cat__heading"><?php echo get_cat_name(31);?></h3>
                                <p class="p-service__cat__item">当店のイートインで利用できる商品を掲載しています。</p>
                            </li>
                            <li class="p-service__cat--bottom">
                                <h3 class="p-service__cat__heading"><?php echo get_cat_name(31);?></h3>
                                <p class="p-service__cat__item">当店のイートインで利用できる商品を掲載しています。</p>
                            </li><!--p-service__cat--bottom-->
                        </ul><!--p-service__inner-->
                    </li><!--p-service__eatin-->
                </ul><!--p-service-->
            </section><!--p-service-wrapprer-->

            <section class="l-map">
                <div class="l-map__layer--bottom"></div>
                <div class="l-map__img--middle"></div>
                <div class="l-map__layer--top"> </div>
                    <article class="p-map__content">
                        <h2 class="p-map__content__title">見出しが入ります</h2>
                        <p class="p-map__content__item">テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
                            テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
                            テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
                            テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
                        </p>
                    </article>
            </section>
        </main>
        
        <?php get_sidebar(); ?>

    </div><!--wrapper-->
    <?php get_footer(); ?> 