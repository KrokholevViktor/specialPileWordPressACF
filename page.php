<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package SpecialPileWordPress
 */

get_header();
?>

<div class="container promo">
            <div class="promo__title">
                <h1 class="title_promo">Фундамент из железобетонных свай «под ключ» за 1 день</h1>
            </div>
            <a href="#form-slider"><button id="promo-btn" class="button_black fz-16-bn" >Рассчитать стоимость</button></a>
            <div class="promo__img"><img src="<?php the_field('promo_img'); ?>"></div>
            <div class="promo__services fz-24-bn">

            <?php
		
            // переменные
            $promo_services = get_field('promo_services');	
            
            if( $promo_services ): ?>
                <div class="promo__services_item"><?php echo $promo_services['service_1']?></div>
                <div class="promo__services_item"><?php echo $promo_services['service_2']?></div>
                <div class="promo__services_item"><?php echo $promo_services['service_3']?></div>
            <?php endif; ?>
            </div> 
    </div>



    <div class="container__overflow_hidden">
        <div id="characteristics" class="container characteristics">
            <h2 class="title"><?php the_field('characteristics_title'); ?></h2>
            <div class="characteristics__wrapper">

            <?php

            // проверяем есть ли в повторителе данные
            if( have_rows('characteristic_repeater') ):

                // перебираем данные
                while ( have_rows('characteristic_repeater') ) : the_row(); ?>

                    <div class="characteristics_item fz-32-bn ">
                        <div class="icon__wrapper">
                            <picture>
                                <source media="(max-width: 576px)" srcset="<?php the_sub_field('characteristic_image'); ?>">
                                <source media="(min-width: 576px)" srcset="<?php the_sub_field('characteristic_image'); ?>">
                                <img src="<?php the_sub_field('characteristic_image'); ?>" class="characteristics_icon">
                            </picture>
                        </div>
                        <div class="characteristics_item_descr"><?php the_sub_field('characteristic_descr'); ?></div>
                    </div>

                <?php endwhile;

            else :

                // вложенных полей не найдено

            endif;

            ?>
            
            <img src="<?php the_field('characteristics_image'); ?>" class="characteristics__bg">

            
        </div>
    </div>

    <div id="form-slider" class="form-slider">
        <div class="container">
            <div class="form-slider__head">
            <?php
            
            // переменные
            $form_slider_titles = get_field('form_slider_titles');	
                
            if( $promo_services ): ?>
                <h3 class="title form-slider__title"><?php echo $form_slider_titles['form_slider_title_1']; ?></h3>
                <h3 class="title form-slider__title"><?php echo $form_slider_titles['form_slider_title_2']; ?></h3>
                <h3 class="title form-slider__title"><?php echo $form_slider_titles['form_slider_title_3']; ?></h3>
                <h3 class="title form-slider__title"><?php echo $form_slider_titles['form_slider_title_4']; ?></h3>
                <h3 class="title form-slider__title"><?php echo $form_slider_titles['form_slider_title_5']; ?></h3>
                <h3 class="title form-slider__title"><?php echo $form_slider_titles['form_slider_title_6']; ?></h3>
            <?php endif; ?>
                
                <div class="form-slider__counter fz-48-bn">
                    <span id="current">1</span>
                    <span class="form-slider__counter_divider">/</span>
                    <span id="total">5</span>
                </div>
            </div>
            <div class="form-slider__wrapper">
                <div class="form-slider__inner">

                    <div class="form-slider__item item-1 fz-32-bn">
                        <?php
                        if( have_rows('slide_repiter_1') ):
                            while ( have_rows('slide_repiter_1') ) : the_row(); ?>

                                <div data-build="house" class="form-slider__item__card">
                                    <div class="form-slider__img">
                                        <div class="form-slider__item__card__title"><?php the_sub_field('slide_1_image_title'); ?></div>
                                        <img src="<?php the_sub_field('slide_1_image'); ?>">
                                    </div>
                                </div>

                            <?php endwhile;
                        else :
                        endif;
                        ?>
                    </div>

                    <div class="form-slider__item item-2 fz-32-bn">
                        <?php
                        if( have_rows('slide_repiter_2') ):
                            while ( have_rows('slide_repiter_2') ) : the_row(); ?>

                                <div data-build="house" class="form-slider__item__card">
                                    <div class="form-slider__img">
                                        <div class="form-slider__item__card__title"><?php the_sub_field('slide_2_image_title'); ?></div>
                                        <img src="<?php the_sub_field('slide_2_image'); ?>">
                                    </div>
                                </div>

                            <?php endwhile;
                        else :
                        endif;
                        ?>
                    </div>

                    <div class="form-slider__item item-3 fz-32-bn">
                        <?php
                        if( have_rows('slide_repiter_3') ):
                            while ( have_rows('slide_repiter_3') ) : the_row(); ?>

                                <div data-build="house" class="form-slider__item__card">
                                    <div class="form-slider__img">
                                        <div class="form-slider__item__card__title"><?php the_sub_field('slide_3_image_title'); ?></div>
                                        <img src="<?php the_sub_field('slide_3_image'); ?>">
                                    </div>
                                </div>

                            <?php endwhile;
                        else :
                        endif;
                        ?>
                    </div>

                    <div class="form-slider__item item-4 fz-32-bn">
                        <?php if( have_rows('slide_repiter_4') ):
                            while ( have_rows('slide_repiter_4') ) : the_row(); ?>

                                <div data-build="house" class="form-slider__item__card">
                                    <div class="form-slider__img">
                                        <div class="form-slider__item__card__title"><?php the_sub_field('slide_4_image_title'); ?></div>
                                        <img src="<?php the_sub_field('slide_4_image'); ?>">
                                    </div>
                                </div>
                        <?php endwhile; endif; ?>
                    </div>

                    <?php $slide_5 = get_field('slide_5');
                    
                    if ($slide_5) : ?>
                    <div class="form-slider__item item-5 fz-32-bn">
                        <div class="form-slider__item__card-form">
                            <div class="form-slider__item__card-form_select"><?php echo $slide_5['slide_5_text_1']?></div>
                        </div>
                        <div class="form-slider__item__card-form">
                            <div class="form-slider__item__card-form_select"><?php echo $slide_5['slide_5_text_2']?></div>
                        </div>
                        <?php if ($slide_5['slide_5_image']) : ?>
                            <div class="form-slider__item__card-form">
                                <img src="<?php echo $slide_5['slide_5_image']?>">
                            </div>
                        <?php endif; ?>
                    </div>
                    <?php endif; ?>

                    <?php $form_elements = get_field('form_elements');
                    
                    if ($form_elements) : ?>
                    <div class="form-slider__item item-6 fz-32-bn">
                        <div class="form-slider__item__card-form">
                            <form data-calc="end" id="pileForm" action="#" class="form">
                                <div class="form-main fz-16-bn">
                                    <div class="form-main__item">
                                        <label for="name">Имя</label>
                                        <input class="fz-16-os" name="name" id="name" type="text" placeholder="Иван">
                                    </div>
                                    <div class="form-main__item">
                                        <div><label for="phone">Номер телефона</label><span class="tooltip">*</span></div> 
                                        <input class="input--required fz-16-os" name="phone" re id="phone" type="text"  placeholder="+7 (999) 999-99-99">
                                        
                                    </div>
                                    <div class="form-main__item">
                                        <div><label for="email">Электронная почта</label><span class="tooltip">*</span></div>
                                        <input class="input--required fz-16-os" name="email" id="email" type="email"   placeholder="mail@mail.ru">
                                    </div>
                                    <div class="form-main__item">
                                        <div>Прикрепить файл проекта</div>
                                        <label class="label-upload fz-16-os" for="file">
                                        <?php if ($form_elements['form_icon']) : ?>
                                            <img src="<?php echo $form_elements['form_icon']?>" class="icon-label-upload">
                                        <?php endif; ?>
                                            Прикрепить файл
                                        </label>
                                        <input class="input-upload" name="file" id="file" type="file" value="Прикрепить файл">
                                    </div>
                                    <div class="form-main__item form-main__item_policy">
                                        <input id="checkbox" name="checkbox" class="input--required checkbox" type="checkbox">
                                        <label for="checkbox" class="fz-14-os">Я соглашаюсь с условиями <a class="fz-14-os" href="<?php echo $form_elements['form_file_policy']?>" download> политики конфиденциальности</a></label>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="form-slider__item__card">
                            <img src="<?php echo $form_elements['form_image']?>">
                        </div>
                    </div>
                    <?php endif; ?>

                </div>
            </div>
            <div class="form-slider__navigation">
                <div class="form-slider__navigation_prev">
                    <button id="prev" class="button_black fz-16-bn"><div class="arrow-left"></div><div>Назад</div></button>
                </div>
                <div class="form-slider__navigation_next">
                    <button class="button_black fz-16-bn"><div>Вперед</div><div class="arrow-right"></div></button>
                </div>
                <div class="form-slider__navigation_btn-form">
                    <button type="submit" form="pileForm" class="button button_form fz-16-bn"><div>Оставить заявку</div></button>
                </div>
            </div>
        </div>
    </div>




    <div id="advantages" class="container__overflow_hidden">
        <div class="advantages container">
            <h2 class="title advantages__title"><?php the_field('advantages_title')?></h2>

            <div class="advantages__wrapper">


                <div class="advantages__card">
                    <div class="advantages__card_header">
                        <?php if( get_field('advantages_col_1_image') ): ?>
                            <img src="<?php the_field('advantages_col_1_image'); ?>">
                        <?php endif; ?>
                    </div>
                    <div class="advantages__card_body">
                        <h3 class="advantages__card_body_title fz-36-bn"><?php the_field('advantages_col_1_title')?></h3>
                            <div class="fz-16-os">

                                <?php if( have_rows('advantages_col_1_repeater') ):
                                    while ( have_rows('advantages_col_1_repeater') ) : the_row();

                                        // Получение значения поля "advantages_col_descr_type"
                                        $descr_type = get_sub_field('advantages_col_descr_type');

                                        // Получение значения поля "advantages_col_descr"
                                        $descr = get_sub_field('advantages_col_descr');

                                        // Определение класса на основе значения поля "advantages_col_descr_type"
                                        $class = ($descr_type === 'с галочкой') ? 'check_mark' : 'dash';
                                ?>
                                        
                                        <div class="advantages__descr"><img src="<?php the_field($class);?> "><?php echo $descr; ?></div>
    
                                <?php endwhile; endif; ?>

                            </div>
                    </div>
                </div>

                <div class="advantages__card">
                    <div class="advantages__card_header">
                        <?php if( get_field('advantages_col_2_image') ): ?>
                            <img src="<?php the_field('advantages_col_2_image'); ?>">
                        <?php endif; ?>
                    </div>
                    <div class="advantages__card_body">
                        <h3 class="advantages__card_body_title fz-36-bn"><?php the_field('advantages_col_2_title')?></h3>
                            <div class="fz-16-os">

                                <?php if( have_rows('advantages_col_2_repeater') ):
                                    while ( have_rows('advantages_col_2_repeater') ) : the_row();

                                        // Получение значения поля "advantages_col_descr_type"
                                        $descr_type = get_sub_field('advantages_col_descr_type');

                                        // Получение значения поля "advantages_col_descr"
                                        $descr = get_sub_field('advantages_col_descr');

                                        // Определение класса на основе значения поля "advantages_col_descr_type"
                                        $class = ($descr_type === 'с галочкой') ? 'check_mark' : 'dash';
                                ?>
                                        
                                        <div class="advantages__descr"><img src="<?php the_field($class);?> "><?php echo $descr; ?></div>
    
                                <?php endwhile; endif; ?>

                            </div>
                    </div>
                </div>
                

                <div class="advantages__card">
                    <div class="advantages__card_header">
                        <?php if( get_field('advantages_col_3_image') ): ?>
                            <img src="<?php the_field('advantages_col_3_image'); ?>">
                        <?php endif; ?>
                    </div>
                    <div class="advantages__card_body">
                        <h3 class="advantages__card_body_title fz-36-bn"><?php the_field('advantages_col_3_title')?></h3>
                            <div class="fz-16-os">

                                <?php if( have_rows('advantages_col_3_repeater') ):
                                    while ( have_rows('advantages_col_3_repeater') ) : the_row();

                                        // Получение значения поля "advantages_col_descr_type"
                                        $descr_type = get_sub_field('advantages_col_descr_type');

                                        // Получение значения поля "advantages_col_descr"
                                        $descr = get_sub_field('advantages_col_descr');

                                        // Определение класса на основе значения поля "advantages_col_descr_type"
                                        $class = ($descr_type === 'с галочкой') ? 'check_mark' : 'dash';
                                ?>
                                        
                                        <div class="advantages__descr"><img src="<?php the_field($class);?> "><?php echo $descr; ?></div>
    
                                <?php endwhile; endif; ?>

                            </div>
                    </div>
                </div>

                <div class="advantages__card">
                    <div class="advantages__card_header">
                        <?php if( get_field('advantages_col_4_image') ): ?>
                            <img src="<?php the_field('advantages_col_4_image'); ?>">
                        <?php endif; ?>
                    </div>
                    <div class="advantages__card_body">
                        <h3 class="advantages__card_body_title fz-36-bn"><?php the_field('advantages_col_4_title')?></h3>
                            <div class="fz-16-os">

                                <?php if( have_rows('advantages_col_4_repeater') ):
                                    while ( have_rows('advantages_col_4_repeater') ) : the_row();

                                        // Получение значения поля "advantages_col_descr_type"
                                        $descr_type = get_sub_field('advantages_col_descr_type');

                                        // Получение значения поля "advantages_col_descr"
                                        $descr = get_sub_field('advantages_col_descr');

                                        // Определение класса на основе значения поля "advantages_col_descr_type"
                                        $class = ($descr_type === 'с галочкой') ? 'check_mark' : 'dash';
                                ?>
                                        
                                        <div class="advantages__descr"><img src="<?php the_field($class);?> "><?php echo $descr; ?></div>
    
                                <?php endwhile; endif; ?>

                            </div>
                    </div>
                </div>
            </div>
<!-- advantages slider start-->
            <div class="advantages__slider">
                <div class="advantages__inner">
                    <div class="advantages__slide">
                        <div class="advantages__card">
                            <div class="advantages__card_header">
                                <img src="img/advantages/nail.png" alt="">   
                            </div>
                            <div class="advantages__card_body">
                                <h3 class="advantages__card_body_title fz-36-bn">забивные ж/б сваи</h3>
                                    <div class="fz-16-os">
                                        <div class="advantages_check-mark">Возводится за 1-2 дня</div>
                                        <div class="advantages_check-mark">Можно начинать строительство сразу после возведения</div>
                                        <div class="advantages_check-mark">Максимальная нагрузка на 1 сваю до 40 тонн</div>
                                        <div class="advantages_check-mark">Срок гарантированной эксплуатации более 100 лет</div>
                                        <div class="advantages_check-mark">Подходит для любых типов грунтов и рельефа местности</div>
                                        <div class="advantages_check-mark">Не подвержен коррозии и морозному пучению</div>
                                    </div>
                            </div>
                        </div>
                    </div>
                    <div class="advantages__slide">
                        <div class="advantages__card">
                            <div class="advantages__card_header">
                                <img src="img/advantages/screw.png" alt="screw">   
                            </div>
                            <div class="advantages__card_body">
                                <h3 class="advantages__card_body_title fz-36-bn">Винтовые сваи</h3>
                                    <div class="fz-16-os">
                                        <div class="advantages_check-mark">Срок возведения от 1 до 3 дней</div>
                                        <div class="advantages_mark">Требуется время на усадку</div>
                                        <div class="advantages_mark">Нагрузка от 2 до 11 тонн на сваю, в зависимости от диаметра и типа грунта</div>
                                        <div class="advantages_mark">До 50 лет в сухих грунтах</div>
                                        <div class="advantages_mark">Подходит только для грунтов без камней и корней</div>
                                        <div class="advantages_mark">Подвержен коррозии и морозному пучению</div>
                                    </div>
                            </div>
                        </div>
                    </div>
                    <div class="advantages__slide">
                        <div class="advantages__card">
                            <div class="advantages__card_header">
                                <img src="img/advantages/ribbon.png" alt="ribbon">   
                            </div>
                            <div class="advantages__card_body">
                                <h3 class="advantages__card_body_title fz-36-bn">Монолитная лента</h3>
                                    <div class="fz-16-os">
                                        <div class="advantages_mark">Срок возведения от 5 до 10 дней</div>
                                        <div class="advantages_mark">Стройку можно начинать через 20 дней после заливки бетона</div>
                                        <div class="advantages_mark">От 4 до 15 тонн на 1 кв. метр, в зависимости от глубины и ширины ленты, типа грунта</div>
                                        <div class="advantages_check-mark">Срок эксплуатации более 100 лет</div>
                                        <div class="advantages_mark">Подходит только для плотных, сухих грунтов, без уклонов</div>
                                        <div class="advantages_mark">Для ограниченного круга построе</div>
                                        
                                    </div>
                            </div>
                        </div>
                    </div>
                    <div class="advantages__slide">
                        <div class="advantages__card">
                            <div class="advantages__card_header">
                                <img src="img/advantages/plate.png" alt="plate">   
                            </div>
                            <div class="advantages__card_body">
                                <h3 class="advantages__card_body_title fz-36-bn">Монолитная плита</h3>
                                    <div class="fz-16-os">
                                        <div class="advantages_mark">Срок возведения от 7 до 14 дней</div>
                                        <div class="advantages_mark">Стройку можно начинать через 20 дней после заливки бетона</div>
                                        <div class="advantages_mark">От 3 тонн на 1 кв. метр, в зависимости от толщины плиты и типа грунта</div>
                                        <div class="advantages_check-mark">Срок эксплуатации более 100 лет</div>
                                        <div class="advantages_mark">Подходит только для плотных грунтов, без наклона</div>
                                        <div class="advantages_mark">Для ограниченного круга построек</div>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container advantages__navigation">
                    <div class="advantages__navigation navigation_prev">
                        <button class="button_black fz-16-bn"><div class="arrow-left"></div></button>
                    </div>
                    <div class="advantages__navigation navigation_next">
                        <button class="button_black fz-16-bn"><div class="arrow-right"></div></button>
                    </div>
                </div>
            </div>
<!-- advantages slider end-->
        </div>
    </div>

<!-- STAGES START - ЭТАПЫ ОКАЗАНИЯ УСЛУГ -->
    <div id="stages" class="stages">
        <div class="container">
            
            <h2 class="title stages__title">Этапы оказания услуги</h2>
            <div class="stages__wrapper">
                <div class="stages__item_pile">
                    <img id="pile" src="img/pile.png" alt="pile">
                </div>
                <div class="stages__item">
                    <div class="stages__item_header fz-36-bn"><span>01</span><div>заявка</div></div>
                    <div class="stages__item_description fz-16-os">Оставьте заявку на сайте или позвоните по телефону +7 (395) 2788 645</div>
                </div>
                <div class="stages__item">
                    <div class="stages__item_header fz-36-bn"><span>02</span>консультация</div>
                    <div class="stages__item_description fz-16-os">По телефону мы уточняем первичные данные об участке, особенностях грунта, типе будущей постройки. Назначаем выезд проектного инженера</div>
                </div>
                <div class="stages__item">
                    <div class="stages__item_header fz-36-bn"><span>03</span>Расчёт стоимости</div>
                    <div class="stages__item_description fz-16-os">Вместе с инженером встречаемся у Вас на участке в удобное для Вас время. Рассчитаем схему свайного поля и считаем точную стоимость на строительство фундамента под ключ</div>
                </div>
                <div class="stages__item">
                    <div class="stages__item_header fz-36-bn"><span>04</span>Подписание договора <br>
                        и предоплата</div>
                    <div class="stages__item_description fz-16-os">Согласовываем дату выхода монтажной бригады. Подписываем договор. Вы вносите предоплату в размере 50%</div>
                </div>
                <div class="stages__item">
                    <div class="stages__item_header fz-36-bn"><span>05</span>Установка фундамента</div>
                    <div class="stages__item_description fz-16-os">Выезжаем на объект уже со сваями и необходимым оборудованием; Забиваем сваи, обрезаем по уровню, монтируем оголовки или обрезаем сваи под ростверк.</div>
                </div>
                
                <div class="stages__item_title-btn">
                    <h2 class="title stages__title_end fz-64-bn">Самый надежный фундамент полностью готов!</h2>
                    <button class="button button_form modal-btn fz-16-bn">Оставить заявку</button>
                </div>
            </div>
            
            
        </div>
    </div>

    <div id="info" class="container info">
            <h2 class="title info__title">Почему именно мы?</h2>
            <div class="info__wrapper">
                <div class="info__wrapper_item">
                    <div class="info__wrapper_item_header fz-64-bn">879</div>
                    <div class="info__wrapper_item_descr fz-36-bn">фундаментов
                        на наших сваях</div>
                </div>
                <div class="info__wrapper_item">
                    <div class="info__wrapper_item_header fz-64-bn">#1</div>
                    <div class="info__wrapper_item_descr fz-36-bn">Первые на рынке</div>
                </div>
                <div class="info__wrapper_item">
                    <div class="info__wrapper_item_img">
                        <img src="img/pasport.png" alt="pasport">
                    </div>
                    <div class="info__wrapper_item_header-pass fz-32-bn">Паспорт качества на изделие «Сваи, марка 40-20-6.1»</div>
                    <a class="info__wrapper_item_link fz-16-bn" href="#">Просмотреть</a>
                    
                    
                </div>
                <div class="info__wrapper_item">
                    <div class="info__wrapper_item_header fz-64-bn">До 50</div>
                    <div class="info__wrapper_item_descr fz-36-bn">фундаментов делаем ежемесячно</div>
                </div>
                <div class="info__wrapper_item">
                    <div class="info__wrapper_item_header fz-64-bn">5 лет</div>
                    <div class="info__wrapper_item_descr fz-36-bn">Наша компания работает для вас</div>
                </div>
                <div class="info__wrapper_item">
                    <div class="info__wrapper_item_img">
                        <img src="img/pasport.png" alt="pasport">
                    </div>
                    <div class="info__wrapper_item_header-pass fz-32-bn">Паспорт качества на изделие «Сваи, марка 40-15-6.1»</div>
                    <a class="info__wrapper_item_link fz-16-bn" href="#">Просмотреть</a>
                    
                </div>
            </div>
    </div>

    <div id="examples" class="examples">
        <h2 class="title examples__title container">Примеры работ</h2>
        <div class="examples__slide-container">
            <div class="examples__wrapper">
                <div class="examples__inner">
                    <div class="examples__slide">
                        <div class="examples__item">
                            <img src="img/examples/baikal.png" alt="baikal">
                            <div class="examples__item_descr fz-24-bn"><p>17 км Байкальского тракта</p></div>
                        </div>
                        <div class="examples__item examples__item">
                            <img src="img/examples/district.png" alt="district">
                            <div class="examples__item_descr fz-24-bn"><p>Микрорайон «Славный»</p></div>
                        </div>
                        <div class="examples__item">
                            <img src="img/examples/village.png" alt="village">
                            <div class="examples__item_descr fz-24-bn"><p>Посёлок «Молодёжный»</p></div>
                        </div>
                        <div class="examples__item">
                            <img src="img/examples/resin.png" alt="resin">
                            <div class="examples__item_descr fz-24-bn"><p>Село «Смоленщина»</p></div>
                        </div>
                        <div class="examples__item">
                            <img src="img/examples/medic.png" alt="medic">
                            <div class="examples__item_descr fz-24-bn"><p>СНТ Медик</p></div>
                        </div>
                        <div class="examples__item">
                            <img src="img/examples/snt.png" alt="snt">
                            <div class="examples__item_descr fz-24-bn"><p>СНТ «Иргорпромторг», Селиваниха</p></div>
                        </div>
                        <div class="examples__item">
                            <img src="img/examples/crystal.png" alt="crystal">
                            <div class="examples__item_descr fz-24-bn"><p>«Хрустальный»</p></div>
                        </div>
                        <div class="examples__item">
                            <img src="img/examples/angara.png" alt="angara">
                            <div class="examples__item_descr fz-24-bn"><p>СНТ «Ангара», остров Комсомольский</p></div>
                        </div>
                    </div>
                    <div class="examples__slide">
                        <div class="examples__item">
                            <img src="img/examples/baikal.png" alt="baikal">
                            <div class="examples__item_descr fz-24-bn"><p>17 км Байкальского тракта</p></div>
                        </div>
                        <div class="examples__item">
                            <img src="img/examples/district.png" alt="district">
                            <div class="examples__item_descr fz-24-bn"><p>Микрорайон «Славный»</p></div>
                        </div>
                        <div class="examples__item">
                            <img src="img/examples/village.png" alt="village">
                            <div class="examples__item_descr fz-24-bn"><p>Посёлок «Молодёжный»</p></div>
                        </div>
                        <div class="examples__item">
                            <img src="img/examples/resin.png" alt="resin">
                            <div class="examples__item_descr fz-24-bn"><p>Село «Смоленщина»</p></div>
                        </div>
                        <div class="examples__item">
                            <img src="img/examples/medic.png" alt="medic">
                            <div class="examples__item_descr fz-24-bn"><p>СНТ Медик</p></div>
                        </div>
                        <div class="examples__item">
                            <img src="img/examples/snt.png" alt="snt">
                            <div class="examples__item_descr fz-24-bn"><p>СНТ «Иргорпромторг», Селиваниха</p></div>
                        </div>
                        <div class="examples__item">
                            <img src="img/examples/crystal.png" alt="crystal">
                            <div class="examples__item_descr fz-24-bn"><p>«Хрустальный»</p></div>
                        </div>
                        <div class="examples__item">
                            <img src="img/examples/angara.png" alt="angara">
                            <div class="examples__item_descr fz-24-bn"><p>СНТ «Ангара», остров Комсомольский</p></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container examples__navigation">
            <div class="examples__navigation navigation_prev">
                <button class="button_black fz-16-bn"><div class="arrow-left"></div></button>
            </div>
            <div class="examples__navigation navigation_next">
                <button class="button_black fz-16-bn"><div class="arrow-right"></div></button>
            </div>
        </div>
        
        
    </div>

    <div id="reviews" class="reviews">
        <h2 class="container title reviews__title">Отзывы</h2>
        <div class="container reviews__slide-container">
            <div class="reviews__wrapper">
                <div class="reviews__inner">
                    <div class="reviews__slide">
                        <div class="reviews__slide_title fz-32-bn">Михаил Никаноров</div>
                        <div class="reviews__slide_date fz-14-os">6 июля 2020</div>
                        <div class="reviews__slide_descr fz-16-os">При строительстве дома заказывали фундамент из железно-бетонных свай в этой компании. Работу выполнили качественно и в срок. Инженер выехал на место строительство, дал подробную информацию, ответил на все наши вопросы, спасибо ему огромное! <br> Монатжники сделали свою работу качественно и быстро, сразу видно провессионалы своего дела! Рекомендую данную организацию.</div>
                    </div>
                    <div class="reviews__slide">
                        <div class="reviews__slide_title fz-32-bn">Анжелика Алексеевна</div>
                        <div class="reviews__slide_date fz-14-os">14 мая 2019</div>
                        <div class="reviews__slide_descr"><p class="fz-16-os">Быстро отреагировали на запрос. Приехали все рассказали, дали совет. Хотели сделать ленточный фундамент, но по ходу строительства передумали и решили делать свайно-ростверковый и довольны. Сотрудники терпиливые и опытные, что не мало важно в этом деле. Спасибо за работу. Буду вас рекомендовать.</p></div>
                    </div>
                    <div class="reviews__slide">
                        <div class="reviews__slide_title fz-32-bn">Дмитрий Шатов</div>
                        <div class="reviews__slide_date fz-14-os">16 июля 2020</div>
                        <div class="reviews__slide_descr fz-16-os"><p class="fz-16-os">При строительстве дома заказывали фундамент из железно-бетонных свай в этой компании. Работу выполнили качественно и в срок. Инженер выехал на место строительство, дал подробную информацию, ответил на все наши вопросы, спасибо ему огромное!Монатжники сделали свою работу качественно и быстро, сразу видно провессионалы своего дела! Рекомендую данную организацию. Быстро отреагировали на запрос. Приехали все рассказали, дали совет. Хотели сделать ленточный фундамент, но по ходу строительства передумали и решили делать свайно-ростверковый и довольны. Сотрудники терпиливые и опытные, что не мало важно в этом деле. Спасибо за работу. Буду вас рекомендовать.</p></div>
                    </div>
                    <div class="reviews__slide">
                        <div class="reviews__slide_title fz-32-bn">Дмитрий Шатов</div>
                        <div class="reviews__slide_date fz-14-os">16 июля 2020</div>
                        <div class="reviews__slide_descr fz-16-os"><p class="fz-16-os">При строительстве дома заказывали фундамент из железно-бетонных свай в этой компании. Работу выполнили качественно и в срок. Инженер выехал на место строительство, дал подробную информацию, ответил на все наши вопросы, спасибо ему огромное!Монатжники сделали свою работу качественно и быстро, сразу видно провессионалы своего дела! Рекомендую данную организацию. Быстро отреагировали на запрос. Приехали все рассказали, дали совет. Хотели сделать ленточный фундамент, но по ходу строительства передумали и решили делать свайно-ростверковый и довольны. Сотрудники терпиливые и опытные, что не мало важно в этом деле. Спасибо за работу. Буду вас рекомендовать.</p></div>
                    </div>
                    <div class="reviews__slide">
                        <div class="reviews__slide_title fz-32-bn">Дмитрий Шатов</div>
                        <div class="reviews__slide_date fz-14-os">16 июля 2020</div>
                        <div class="reviews__slide_descr fz-16-os"><p class="fz-16-os">При строительстве дома заказывали фундамент из железно-бетонных свай в этой компании. Работу выполнили качественно и в срок. Инженер выехал на место строительство, дал подробную информацию, ответил на все наши вопросы, спасибо ему огромное!Монатжники сделали свою работу качественно и быстро, сразу видно провессионалы своего дела! Рекомендую данную организацию. Быстро отреагировали на запрос. Приехали все рассказали, дали совет. Хотели сделать ленточный фундамент, но по ходу строительства передумали и решили делать свайно-ростверковый и довольны. Сотрудники терпиливые и опытные, что не мало важно в этом деле. Спасибо за работу. Буду вас рекомендовать.</p></div>
                    </div>
                    <div class="reviews__slide">
                        <div class="reviews__slide_title fz-32-bn">Дмитрий Шатов</div>
                        <div class="reviews__slide_date fz-14-os">16 июля 2020</div>
                        <div class="reviews__slide_descr fz-16-os"><p class="fz-16-os">При строительстве дома заказывали фундамент из железно-бетонных свай в этой компании. Работу выполнили качественно и в срок. Инженер выехал на место строительство, дал подробную информацию, ответил на все наши вопросы, спасибо ему огромное!Монатжники сделали свою работу качественно и быстро, сразу видно провессионалы своего дела! Рекомендую данную организацию. Быстро отреагировали на запрос. Приехали все рассказали, дали совет. Хотели сделать ленточный фундамент, но по ходу строительства передумали и решили делать свайно-ростверковый и довольны. Сотрудники терпиливые и опытные, что не мало важно в этом деле. Спасибо за работу. Буду вас рекомендовать.</p></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container reviews__navigation">
            <div class="reviews__navigation navigation_prev">
                <button class="button_black fz-16-bn"><div class="arrow-left"></div></button>
            </div>
            <div class="reviews__navigation navigation_next">
                <button class="button_black fz-16-bn"><div class="arrow-right"></div></button>
            </div>
        </div>
    </div>

    <div id="questions" class="questions">
        <div class="container">
            <h2 class="title questions__title">часто задаваемые вопросы</h2>
            <div class="questions__accordion">
                <div class="questions__accordion__item questions__accordion__item_active">
                    <div class="questions__accordion__title fz-32-bn">КАК ДАВНО СУЩЕСТВУЕТ ВАША КОМПАНИЯ?</div>
                    <div class="questions__accordion__descr"><p>Мы работаем уже 5 лет.</p></div>
                </div>
                <div class="questions__accordion__item">
                    <div class="questions__accordion__title fz-32-bn">СКОЛЬКО ПРОЕКТОВ ВЫ УЖЕ ВЫПОЛНИЛИ?</div>
                    <div class="questions__accordion__descr"><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi aut eos nostrum ipsum est exercitationem doloribus soluta ut eveniet laborum, magni placeat, repellat modi quo magnam nisi dolor quod unde?</p></div>
                </div>
                <div class="questions__accordion__item">
                    <div class="questions__accordion__title fz-32-bn">ГДЕ МОЖНО ПОСМОТРЕТЬ ВАШИ ВЫПОЛНЕННЫЕ ПРОЕКТЫ?</div>
                    <div class="questions__accordion__descr"><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi aut eos nostrum ipsum est exercitationem doloribus soluta ut eveniet laborum, magni placeat, repellat modi quo magnam nisi dolor quod unde?</p></div>
                </div>
                <div class="questions__accordion__item">
                    <div class="questions__accordion__title fz-32-bn">ЕСТЬ ЛИ СЕРТИФИКАТЫ НА ПРОДУКЦИЮ?</div>
                    <div class="questions__accordion__descr"><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi aut eos nostrum ipsum est exercitationem doloribus soluta ut eveniet laborum, magni placeat, repellat modi quo magnam nisi dolor quod unde?</p></div>
                </div>
            </div>
        </div>
    </div>

    <div id="contacts" class="container contacts">
        <div class="contacts__wrapper">
            <div class="contacts__block">
                <div class="contacts__title fz-48-bn">Контакты:</div>
                <div class="address_map">c. Калтук ул Снежная д5 кв 1</div>
                <div class="address_descr">Фундамент из железобетонных свай «под ключ» за 1 день</div>
                <div class="contacts__item_wrapper">
                    <div class="contacts__item">
                        <div class="contacts__label fz-16-os">Адрес</div>
                        <a href="" class="contacts__link fz-32-bn">Адрес: г. Иркутск, ул. Свердлова, 43а</a>
                        <div class="contacts__descr fz-14-os">пн-пт: <span>9:00 - 18:00</span>, сб: <span>10:00 - 15:00</span></div>
                    </div>
                    <div class="contacts__item">
                        <div class="contacts__label fz-16-os">Телефон</div>
                        <a href="" class="contacts__link fz-32-bn">+7 (3952) 78-86-45</a>
                    </div>
                    <div class="contacts__item">
                        <div class="contacts__label fz-16-os">Email</div>
                        <a href="" class="contacts__link fz-32-bn">irkutsk@specsvaya.ru</a>
                    </div>
                    <div class="contacts__item">
                        <div class="contacts__label fz-16-os">Социальные сети</div>
                        <a href="" class="contacts__link fz-32-bn">ВКонтакте</a>
                        <a href="" class="contacts__link fz-32-bn">Telegram</a>
                    </div>
                </div>
            </div>
            <div id="map" class="contacts__map"></div>
        </div>
    </div>

<?php
// get_sidebar();
get_footer();
