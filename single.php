<?php get_header(); ?>

        <div class="wrapper">
        <main>
        <?php if(have_posts() ) : ?>
            <?php while(have_posts() ) : the_post(); ?>
                <section id="post-<?php the_ID(); ?>" <?php post_class('p-top'); ?>>
                <div class="l-top--single"><?php the_post_thumbnail(); ?></div><!--写真-->
                    <h1 class="p-top__title--single"><?php the_title(); ?></h1>
                </section>
                <?php the_content(); ?>
            <?php endwhile; ?>
        <?php endif; ?>
            </main>

            <?php get_sidebar(); ?>
        </div><!--wrapper-->

        <?php get_footer(); ?> 