<?php
/**
 * @package WordPress
 * @subpackage wsf
 * @since wsf 2.0
 * Template Name: Сontacts
 */

get_header() ?>




        <div id="my-content">

            <!-- MAIN SECTION -->

            <main class="wrap about_prog">

                <section class="s_contacts s_white sect_top">

                    <h2 class="cont_title">Контакты</h2>

                    <img src="<?php echo get_template_directory_uri(); ?>/app/img/about_project/triang.png" class="str" alt="triangle">
                    <img src="<?php echo get_template_directory_uri(); ?>/app/img/about_project/rectang.png" class="srec" alt="rectang">

                    <div class="map_block_wrap">

                        <div class="map_block">

                            <img src="<?php echo get_template_directory_uri(); ?>/app/img/about_project/rectang.png" class="rectang" alt="rectang">
                            <div class="circles_wrap">
                                <div class="wrap_for_circles">
                                    <div class="circle_around"></div>
                                    <div class="circle_around"></div>
                                    <div class="circle_around"></div>
                                </div>
                            </div>

                            <div class="container">

                                <div class="row flex-xl-column flex-row">

                                    <div class="col-xl-6 col-lg-4 col-md-5 col-12 order-xl-1 order-md-2 order-1">

                                        <div class="contacts_info">
                                            <div class="top_inf">
                                                <div class="loc_wrap">
                                                    <div class="loc_icon"><img src="<?php echo get_template_directory_uri(); ?>/app/img/svg/loc.svg" alt="компании"></div>
                                                </div>
                                                <div class="add d-block d-xl-none">Адрес:</div>
                                            </div>
                                            <div class="bot_info">
                                                <p class="loc_descr"> <span>г.Харьков.,</span> <span>ул. Большая Панасовская,</span> <span>29 (Котлова, 29)</span></p>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-xl-6 col-lg-8 col-md-7 col-12 order-xl-2 order-md-1 order-2">

                                        <div class="all_schedule">

                                            <div class="phone_info">
                                                <div class="top_info">
                                                    <div class="cons_wrap">
                                                        <div class="cons_icon"><img src="<?php echo get_template_directory_uri(); ?>/app/img/svg/cons_dark.svg" alt="компании"></div>
                                                    </div>
                                                </div>
                                                <div class="bot_info">
                                                    <div class="hide_d d-block d-xl-none">Отдел продаж:</div>
                                                    <div class="phones">
                                                        <a href="tel:0503663333">+38 (050) 366 33 33</a>
                                                        <span>  /  </span>
                                                        <a href="tel:0733663333">+38 (073) 366 33 33</a>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="schedule_info">
                                                <div class="top_info">
                                                    <div class="sched_wrap">
                                                        <div class="sched_icon"><img src="<?php echo get_template_directory_uri(); ?>/app/img/svg/clock.svg" alt="компании"></div>
                                                    </div>

                                                </div>
                                                <div class="bot_info">
                                                    <div class="schedule">
                                                        <div class="work_d">
                                                            <p class="bold">Пн - Пт</p>
                                                            <p class="clock">с 08:00 до 20:00</p>
                                                        </div>
                                                        <div class="weekend">
                                                            <p class="bold">Сб - Вс</p>
                                                            <p class="clock">с 08:00 до 20:00</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>

                                    </div>

                                    <div class="col-12 order-3">
                                        <div class="cont_but">
                                            <a href="#small-dialog" class="orange_button popup-with-move-anim"><span>Записаться на просмотр</span></a>
                                        </div>
                                    </div>

                                </div>

                            </div>

                        </div>

                        <!-- MAP INIT -->

                        <div class="map_bl"><div id="map"></div></div>

                    </div>

                    <div class="contact_form_wrap">

                        <div class="container">

                            <div class="row justify-content-center">

                                <div class="col-xl-10">

                                    <div class="contact_form">

                                        <img src="<?php echo get_template_directory_uri(); ?>/app/img/contacts/tria_cut.png" class="triangle" alt="triangle">
                                        <img src="<?php echo get_template_directory_uri(); ?>/app/img/contacts/rect_cut.png" class="rectangle" alt="rectang">
                                        <div class="circles_wrap">
                                            <div class="wrap_for_circles">
                                                <div class="circle_around"></div>
                                                <div class="circle_around"></div>
                                                <div class="circle_around"></div>
                                            </div>
                                        </div>
                                        <div class="decor_circles_wrap">
                                            <div class="decor_circles">
                                                <div class="circle"></div>
                                                <div class="circle"></div>
                                            </div>
                                        </div>
                                        <div class="form_title">
                                            <img src="<?php echo get_template_directory_uri(); ?>/app/img/svg/man_form.svg" alt="">
                                            <h2>Остались вопросы?</h2>
                                            <p>Уточните детали у специалиста по продаже недвиживости</p>
                                        </div>

                                        <form class="cont_call">
                                            <input type="text" name="name" placeholder="Ваше имя" required>
                                            <input type="tel" name="phone" placeholder="Ваш телефон" required>
                                            <input type="submit" class="orange_button" value="Отправить">
                                        </form>

                                        <div class="succes_bl">

                                            <h3>Спасибо за заявку!</h3>
                                            <h4>Наш менеджер свяжется с вамм в ближайшее время</h4>

                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                </section>

            </main>

        </div>


    <script>
        function initMap() {
            var uluru = {lat: 49.994982, lng: 36.217765};
            var map = new google.maps.Map(document.getElementById('map'), {
                zoom: 17,
                center: uluru
            });
            var marker = new google.maps.Marker({
                position: uluru,
                map: map
            });
        }
    </script>
    <script async defer
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAoQeEZv3tflPFly8YMyUYXXZwWFV82Vss&callback=initMap">
    </script>



<?php get_footer(); ?>