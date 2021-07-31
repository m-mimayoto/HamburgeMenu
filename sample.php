<section id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <figure class="l-menu__list__item">
        <div class="l-menu__list__item__img"><?php the_post_thumbnail(); ?></div><!--商品の写真-->
        <figcaption class="l-menu__list__item__info"><!--商品写真の説明-->
            <h2 class="p-menu__list__item__title"><?php the_title(); ?><!--チーズバーガー--></h2>
            <!-- <h3 class="p-menu__list__item__subtitle">小見出しが入ります</h3>-->
           <?php the_excerpt(); ?>
            <div class="c-button__block"><a href="<?php the_permalink(); ?>" class="c-button--detail">詳しく見る</a></div>
        </figcaption>
    </figure>
</section><!--l-menu__list-->