<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">
    <haed>
        <meta charset="UTF-8">
         <!--レイアウト表示-->
         <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
         <meta name="robots" content="index,follow" />
         <!--viewpoint-->
         <meta name="viewport" content="width=device-width,initial-scale=1">
         <link rel="https://unpkg.com/ress/dist/ress.min.css">
         <?php wp_head(); ?>
    </haed>
    <body <?php body_class(); ?>>
    <?php wp_body_open(); ?> 

    <header class="l-header">
        <div class="p-header__title">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
            <h1><?php bloginfo( 'name' ); ?></h1>
            </a>
        </div>

        <div class="c-button">
            <button class="c-button__menu">Menu</button>
        </div>    
        <?php get_search_form(); ?>
    </header>