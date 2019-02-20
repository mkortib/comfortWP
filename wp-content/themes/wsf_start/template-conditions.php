<?php
/**
 * @package WordPress
 * @subpackage wsf
 * @since wsf 2.0
 * Template Name: Conditions
 */

get_header() ?>


    <div id="my-content">

        <!-- MAIN SECTION -->

        <main class="wrap about_prog">

            <section class="s_condition sect_top">

                <h2 class="cond_title">Условия покупки</h2>
                <h3 class="cond_title_add">Необходимые документы</h3>

                <div class="list_rules">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-12 col-xl-10">
                                <div class="list_wrap">
                                    <div class="list">
                                        <div class="lst_img">
                                            <img src="<?php echo get_template_directory_uri(); ?>/app/img/buy_conditions/id_card.png" alt="id">
                                        </div>
                                        <p>Паспорт</p>
                                    </div>
                                    <div class="list">
                                        <div class="lst_img">
                                            <img src="<?php echo get_template_directory_uri(); ?>/app/img/buy_conditions/code.png" alt="код">
                                        </div>
                                        <p>Идентификационный код</p>
                                    </div>
                                    <div class="list">
                                        <div class="lst_img">
                                            <img src="<?php echo get_template_directory_uri(); ?>/app/img/buy_conditions/wed.png" alt="договор">
                                        </div>
                                        <p>Свидетельство о браке</p>
                                    </div>
                                    <div class="list">
                                        <div class="lst_img">
                                            <img src="<?php echo get_template_directory_uri(); ?>/app/img/buy_conditions/allowed.png" alt="согласие">
                                        </div>
                                        <p>Согласие супруга(и)</p>
                                    </div>
                                    <div class="circles_wrap">
                                        <div class="wrap_for_circles">
                                            <div class="circle_around"></div>
                                            <div class="circle_around"></div>
                                            <div class="circle_around"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <h3 class="doc_type">Тип договора - имещественных прав</h3>
                <p class="aft_doc">хочешь получить шаблон договора ?</p>
                <div class="btn_wrap">
                    <a href="#" class="orange_button"><span>Получить</span></a>
                </div>

            </section>

            <section class="s_white cond_flats">

                <div class="quotes_wrap">
                    <p class="qotes_title">Есть возможность приобрести квартиру в беспроцентную рассрочку от застройщика</p>
                </div>

                <div class="cond_slider_wrap">

                    <div class="cond_decor">

                        <div class="container">

                            <div class="cond_slider">

                                <div class="slide">

                                    <div class="img">
                                        <img src="<?php echo get_template_directory_uri(); ?>/app/img/buy_conditions/flat_slide.png" alt="flat">
                                    </div>

                                    <div class="descr">
                                        <div class="flat_descr">
                                            <p class="frst_desc">2-х ком. квартира</p>
                                            <p class="cost">от 28.000 y.e</p>
                                        </div>
                                        <a href="#" class="but"><span class="grad_class"></span>Заказать</a>
                                    </div>

                                </div>

                                <div class="slide">

                                    <div class="img">
                                        <img src="<?php echo get_template_directory_uri(); ?>/app/img/buy_conditions/flat_slide.png" alt="flat">
                                    </div>

                                    <div class="descr">
                                        <div class="flat_descr">
                                            <p class="frst_desc">2-х ком. квартира</p>
                                            <p class="cost">от 28.000 y.e</p>
                                        </div>
                                        <a href="#" class="but"><span class="grad_class"></span>Заказать</a>
                                    </div>

                                </div>

                                <div class="slide">

                                    <div class="img">
                                        <img src="<?php echo get_template_directory_uri(); ?>/app/img/buy_conditions/flat_slide.png" alt="flat">
                                    </div>

                                    <div class="descr">
                                        <div class="flat_descr">
                                            <p class="frst_desc">2-х ком. квартира</p>
                                            <p class="cost">от 28.000 y.e</p>
                                        </div>
                                        <a href="#" class="but"><span class="grad_class"></span>Заказать</a>
                                    </div>

                                </div>

                                <div class="slide">

                                    <div class="img">
                                        <img src="<?php echo get_template_directory_uri(); ?>/app/img/buy_conditions/flat_slide.png" alt="flat">
                                    </div>

                                    <div class="descr">
                                        <div class="flat_descr">
                                            <p class="frst_desc">2-х ком. квартира</p>
                                            <p class="cost">от 28.000 y.e</p>
                                        </div>
                                        <a href="#" class="but"><span class="grad_class"></span>Заказать</a>
                                    </div>

                                </div>

                            </div>

                        </div>

                        <img src="<?php echo get_template_directory_uri(); ?>/app/img/about_project/triang.png" class="triangle" alt="triangle">
                        <img src="<?php echo get_template_directory_uri(); ?>/app/img/about_project/rectang.png" class="rectang" alt="rectang">

                        <div class="decor_circles_wrap1">
                            <div class="decor_circles">
                                <div class="circle"></div>
                                <div class="circle"></div>
                            </div>
                        </div>

                        <div class="decor_circles_wrap2">
                            <div class="decor_circles">
                                <div class="circle"></div>
                                <div class="circle"></div>
                            </div>
                        </div>

                    </div>
                    <div class="owl_nav">
                        <div class="slide_prev cond_pr"><img src="<?php echo get_template_directory_uri(); ?>/app/img/orr_arr_left.svg" alt="arrow"></div>
                        <div class="slide_next cond_next"><img src="<?php echo get_template_directory_uri(); ?>/app/img/orr_arr_right.svg" alt="arrow"></div>
                    </div>

                </div>

            </section>

        </main>

    </div>



<?php get_footer(); ?>