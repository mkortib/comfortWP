<?php
/**
 * @package WordPress
 * @subpackage wsf
 * @since wsf 2.0
 * Template Name: Main Layouts
 */

get_header() ?>


    <div id="my-content">

        <!-- MAIN SECTION -->

        <main class="wrap about_prog">

                <section class="s_grey s_planmain sect_top">

                    <div class="top_bl_wrap">

                        <div class="top_bl">

                            <div class="call_consult">

                                <div class="img_consult">
                                    <div class="grad_class"></div>
                                    <img src="<?php echo get_template_directory_uri(); ?>/app/img/svg/consult.svg" alt="operator">
                                </div>

                                <div class="img_descr">
                                    <a href="#small-dialog" class="orange_button popup-with-move-anim"><span class="grad_class"></span><span class="spm">Заказать консультацию</span></a>
                                </div>

                            </div>

                            <h2 class="plan_title">Создавать комфорт – это искусство!</h2>
                            <p class="after_title">Подберите для себя нужный тип квартиры</p>

                            <div class="flats_links">

                                <div class="flats_row1">

                                    <a class="flat_link" href="/layouts/smart/">

                                        <h5>Smart</h5>
                                        <p>12 предложений</p>
                                        <img src="<?php echo get_template_directory_uri(); ?>/app/img/planners/arrow.svg" alt="">
                                        <div class="grad_class"></div>

                                    </a>

                                    <a class="flat_link" href="/layouts/one-room/">

                                        <h5>1-комнатные</h5>
                                        <p>12 предложений</p>
                                        <img src="<?php echo get_template_directory_uri(); ?>/app/img/planners/arrow.svg" alt="arrow">
                                        <div class="grad_class"></div>
                                    </a>

                                </div>

                                <div class="flats_row2">


                                    <a class="flat_link" href="/layouts/two-room/">

                                        <h5>2-комнатные</h5>
                                        <p>12 предложений</p>
                                        <img src="<?php echo get_template_directory_uri(); ?>/app/img/planners/arrow.svg" alt="arrow">
                                        <div class="grad_class"></div>

                                    </a>

                                    <a class="flat_link" href="/layouts/three-room/">

                                        <h5>3-комнатные с двориком</h5>
                                        <p>12 предложений</p>
                                        <img src="<?php echo get_template_directory_uri(); ?>/app/img/planners/arrow.svg" alt="arrow">
                                        <div class="grad_class"></div>

                                    </a>

                                </div>

                                <img class="triangle_dec" src="<?php echo get_template_directory_uri(); ?>/app/img/triangle_white.png" alt="triangle">

                                <div class="decor_circles_wrap">
                                    <div class="decor_circles">
                                        <div class="circle"></div>
                                        <div class="circle"></div>
                                    </div>
                                </div>

                            </div>
                        </div>




                        <div class="bottom_form_wrap">

                            <div class="bottom_form">

                                <h2 class="select_title">Подбор квартиры</h2>

                                <form class="form_select_flat">

                                    <div class="form_container">

                                        <div class="container">

                                            <div class="row justify-content-center">

                                                <div class="col-xl-1"></div>

                                                <div class="col-xl-6 col-lg-7 col-md-12 col-12 justify-content-center">

                                                    <div class="radio_wrap">

                                                        <p class="need1">Хочу</p>
                                                        <div class="frst_rad">


                                                            <div class="radio">
                                                                <label for="smart">
                                                                    <input type="radio" name="mounth" id="smart" value="Smart" />
                                                                    <span class="f-room"></span>
                                                                    Smart
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label for="1-room">
                                                                    <input type="radio" name="mounth" id="1-room" value="Однокомнатная" />
                                                                    <span></span>
                                                                    одно
                                                                </label>
                                                            </div>

                                                        </div>

                                                        <div class="scnd_rad">

                                                            <div class="radio">
                                                                <label for="2-room">
                                                                    <input type="radio" name="mounth" id="2-room" value="Двухкомнатная" />
                                                                    <span></span>
                                                                    двух
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label for="3-room">
                                                                    <input type="radio" name="mounth" id="3-room" value="Трехкомнатная" />
                                                                    <span class="lm"></span>
                                                                    трех
                                                                </label>
                                                            </div>
                                                        </div>


                                                        <p class="need2 d-none d-md-block">комнатную квартиру</p>


                                                    </div>


                                                </div>

                                                <div class="col-xl-4 col-lg-4 col-md-12 col-12">

                                                    <div class="metr_square">

                                                        <div class="square">
                                                            <label for="min_square">
                                                                Метраж от
                                                                <input type="number" id="min_square" placeholder="26,6 м">
                                                            </label>
                                                        </div>
                                                        <div class="square">
                                                            <label for="max_square">
                                                                до
                                                                <input type="number" id="max_square" placeholder="26,6 м">
                                                            </label>
                                                        </div>

                                                    </div>

                                                </div>

                                                <div class="col-xl-1"></div>

                                            </div>

                                            <div class="row scnd_row">

                                                <div class="col-xl-2"></div>
                                                <div class="col-xl-4 col-lg-6 col-md-6 col-12">

                                                    <div class="budget">
                                                        <label class="f_lab" for="money">
                                                            Бюджет до
                                                            <input type="number" placeholder="$130 000" id="money">
                                                        </label>
                                                    </div>

                                                </div>
                                                <div class="col-xl-4 col-lg-6 col-md-6 col-12">

                                                    <div class="budget">
                                                        <label>
                                                            Ваш телефон
                                                            <input type="tel" id="num" name="phone" placeholder="+3 80 (--) --- -- --" required>
                                                        </label>
                                                    </div>

                                                </div>
                                                <div class="col-xl-2"></div>

                                            </div>

                                        </div>

                                    </div>

                                    <div class="but_wrap"><button class="orange_button" type="submit"><span>Заказать подбор квартиры</span></button></div>

                                </form>

                                <!-- Hidden Block Call Request -->

                                <div class="succes_bl">

                                    <h3>Спасибо за заявку!</h3>
                                    <h4>Наш менеджер свяжется с вамм в ближайшее время</h4>

                                </div>

                            </div>

                        </div>

                    </div>

                    <img class="rectangle" src="<?php echo get_template_directory_uri(); ?>/app/img/about_project/rect_white.png" alt="rectangle">
                    <div class="decor_circles_wrap">
                        <div class="decor_circles">
                            <div class="circle"></div>
                            <div class="circle"></div>
                        </div>
                    </div>

                </section>

            </main>

        </div>



<?php get_footer(); ?>