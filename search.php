    <?php get_header(); ?>

        <div class="wrapper">
            <main>
                <section class="p-top">
                <div class="l-top__title__layer"></div>
                <div class="l-top--archive"></div>
                    <h2 class="p-top__title--search">Search:</h2>
                    <p class="p-top__subtitle--archive_search"><?php echo esc_html( get_search_query( false ) ); ?></p>
                </section>

                <section class="p-menu">
                    <article class="p-menu__desc">
                        <h2 class="p-menu__desc__title"><?php echo esc_html( single_cat_title( '', false ) ); ?></h2>
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

            <?php wp_pagenavi(); ?>
            <?php get_sidebar(); ?>
        </div><!--wrapper-->

        <?php get_footer(); ?> 
    