<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package SpecialPileWordPress
 */

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Спецсвая</title>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css">
</head>
<body>
    <div class="header">
        <div class="header__wrapper container">
            <img src="<?php the_field('header_logo'); ?>" alt="logo" class="header__logo">
            <div class="header__info">
                <div class="header__info_e_p"> 
                    <a class="header__info_email fz-16-bn" href="#"><?php the_field('header-email'); ?></a>
                    <a href="tel:+73952788645"><div class="header__info_phone fz-16-bn"><?php the_field('header_telephone_number'); ?></div></a>
                </div>
                <button class="button modal-btn">Оставить заявку</button>
                <button class="burger">
                    <div class="bar"></div>
                    <div class="bar"></div>
                    <div class="bar"></div>
                </button>
            </div>
        </div>
        <div class="header__devider container"></div>
        <div class="header__menu fz-16-bn container">

            <?php
                if( have_rows('header_menu_links_repeater') ):
                    while ( have_rows('header_menu_links_repeater') ) : the_row(); ?>
                    <a href="<?php the_sub_field('link_path'); ?>" class="header_link"><?php the_sub_field('link_title'); ?></a>   
            <?php endwhile; endif; ?>

        </div>
        <div class="header__menu_burger--scroll">
            <div class="header__menu header__menu_burger fz-16-bn">
                <div class="header__menu__links--grid">
                    <?php
                        if( have_rows('header_menu_links_repeater') ):
                            while ( have_rows('header_menu_links_repeater') ) : the_row(); ?>
                            <a href="<?php the_sub_field('link_path'); ?>" class="header_link"><?php the_sub_field('link_title'); ?></a>   
                    <?php endwhile; endif; ?>
                    
                </div>
                <div class="header__info_e_p"> 
                    <a class="header__info_email fz-16-bn" href="#">irkutsk@specsvaya.ru</a>
                    <a href="tel:+73952788645"><div class="header__info_phone fz-16-bn">+7 (395) 278-86-45</div></a>
                </div>
                <button class="button modal-btn">Оставить заявку</button>
            </div>
        </div>
    </div>
