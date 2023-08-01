<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package SpecialPileWordPress
 */

?>

    <div class="footer">
        <div class="container">
            <div class="footer__wrapper">
                <div class="footer__item">
                    <img src="img/logo__footer.png" alt="logo" class="footer__logo">
                    <a href="#" class="footer__privacy-policy fz-12-os">Политика конфиденциальности</a>
                </div>
                <div class="footer__item fz-16-bn">
                    <?php
                        if( have_rows('header_menu_links_repeater') ):
                            while ( have_rows('header_menu_links_repeater') ) : the_row(); ?>
                            <a href="<?php the_sub_field('link_path'); ?>" class="header_link"><?php the_sub_field('link_title'); ?></a>   
                    <?php endwhile; endif; ?>
                </div>
                <div class="footer__item sm-w">
                    <a href="#" class="footer__privacy-policy fz-12-os ">Политика конфиденциальности</a>
                </div>
            </div>
        </div>
    </div>

    <div class="modal">
        <div class="modal__content">
            <div class="modal__header">
                <div class="modal__title fz-48-bn">Оставьте заявку</div>
                <button class="modal__close"></button>
            </div>
            <div class="modal__form">
                <form id="pileForm-modal" action="#" class="form">
                    <div class="form-main fz-16-bn">
                        <div class="form-main__item">
                            <label for="name1">Имя</label>
                            <input class="fz-16-os" name="name" id="name1" type="text"  placeholder="Иван">
                        </div>
                        <div class="form-main__item">
                            <label for="phone1">Номер телефона</label>
                            <input class="input--required fz-16-os" name="phone" id="phone1" type="text"  placeholder="+7 (999) 999-99-99">
                        </div>
                        <div class="form-main__item">
                            <label for="email1">Электронная почта</label>
                            <input class="input--required fz-16-os" name="email" id="email1" type="email"  placeholder="mail@mail.ru">
                        </div>
                        <div class="form-main__item">
                            <div>Прикрепить файл проекта</div>
                            <label class="label-upload fz-16-os" for="file1">Прикрепить файл</label>
                            <input class="input-upload" name="file" id="file1" type="file" value="Прикрепить файл">
                        </div>
                        <div class="form-main__item form-main__item_policy">
                            <input id="checkbox1" name="checkbox"  class="input--required checkbox" type="checkbox">
                            <label for="checkbox1" class="fz-14-os">Я соглашаюсь с условиями <a class="fz-14-os" href="#"> политики конфиденциальности</a></label>
                        </div>
                    </div>
                </form>
            </div>
            <button type="submit" form="pileForm-modal" class="button button_form-modal fz-16-bn"><div>Оставить заявку</div></div></button>
        </div>
    </div>

    <script src="https://api-maps.yandex.ru/2.1/?apikey=1997deae-7f1f-4cdb-bbee-84f7aafcaf39&lang=ru_RU"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/script.js"></script>
</body>
</html>