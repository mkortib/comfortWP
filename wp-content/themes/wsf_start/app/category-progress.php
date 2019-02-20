<?php
/**
 * @package WordPress
 * @subpackage wsf
 * @since wsf 2.0
 */

get_header(); ?>


    <div id="my-content">

        <!-- MAIN SECTION -->

        <main class="wrap about_prog">

            <section class="s_news s_white sect_top">

                <h2 class="news_title">Главная новость</h2>

                <div class="main_news_wrap">

                    <div class="container">

                        <div class="row justify-content-center">

                            <?php
                            $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                            $flats = new WP_Query( array (
                                'cat'            => 12,
                                'posts_per_page' => '1',
                                'paged'          => $paged,
                                'order'          => 'ASC',
                                'orderby'        => 'date'
                            ) );
                            ?>
                            <div class="cnt flex flex-sa">
                                <?php
                                if ( have_posts() ) :
                                    while ( $flats->have_posts() ) :
                                        $flats->the_post();
                                        ?>

                            <div class="col-xl-6 col-lg-6 col-md-6 col-12">
                                <div class="main_news_img">
                                    <?php the_post_thumbnail(); ?>
                                </div>
                            </div>

                            <div class="col-xl-6 col-lg-6 col-md-6 col-12">
                                <div class="main_news_descr">
                                    <div class="date">Ход строительства</div>
                                    <h3><?php the_title();?></h3>
                                    <p class="sub_des"><?php the_excerpt(); ?> </p>
                                    <a href="<?php get_the_permalink(); ?>" class="more">Читать<img src="img/orr_arr_right.svg" alt="arr"></a>
                                </div>
                            </div>

                            <?php endwhile;
                        endif;
                            wp_reset_postdata();
                        ?>

                        </div>

                    </div>

                    <img src="img/about_project/triang.png" class="triangle" alt="triangle">

                    <div class="decor_circles_wrap">
                        <div class="decor_circles">
                            <div class="circle"></div>
                            <div class="circle"></div>
                        </div>
                    </div>

                </div>


                <div class="nav_wrap">

                    <div class="nav">
                        <h3>Новости</h3>
                        <div class="line"></div>
                        <ul class="nav_titles">
                            <li class="active"><a href="#">Новости</a></li>
                            <li><a href="#">Ход строительства</a></li>
                            <li><a href="#">СМИ о нас</a></li>
                        </ul>
                    </div>

                </div>


                <div class="all_news">

                    <div class="container">

                        <div class="row">

                            <div class="col-xl-4 col-lg-6 col-md-6">
                                <div class="news_wrap">
                                    <div class="img_news">
                                        <img src="img/news/news1.png" alt="stock">
                                    </div>
                                    <div class="after_img">
                                        <div class="date_min">Сми о нас</div>
                                        <h3>Новый жилой комплекс комфорт класса. </h3>
                                        <p>Новый жилой комплекс комфорт класса, выдержанный в стиле современной европейской архитектуры!ЖК «Комфорт» расположен ...</p>
                                        <div class="alw_bot"><a href="#" class="more"><span>Читать</span><img src="img/orr_arr_right.svg" alt="arrow"></a></div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-4 col-lg-6 col-md-6">
                                <div class="news_wrap">
                                    <div class="img_news">
                                        <img src="img/news/news2.png" alt="stock">
                                    </div>
                                    <div class="after_img">
                                        <div class="date_min">Сми о нас</div>
                                        <h3>Новый жилой комплекс комфорт класса. </h3>
                                        <p>Новый жилой комплекс комфорт класса, выдержанный в стиле современной европейской архитектуры!ЖК «Комфорт» расположен ...</p>
                                        <div class="alw_bot"><a href="#" class="more"><span>Читать</span><img src="img/about_project/arro_orange.png" alt="arrow"></a></div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-4 col-lg-6 col-md-6">
                                <div class="news_wrap">
                                    <div class="img_news">
                                        <img src="img/news/news3.png" alt="stock">
                                    </div>
                                    <div class="after_img">
                                        <div class="date_min">Сми о нас</div>
                                        <h3>Новый жилой комплекс комфорт класса. </h3>
                                        <p>Новый жилой комплекс комфорт класса, выдержанный в стиле современной европейской архитектуры!ЖК «Комфорт» расположен ...</p>
                                        <div class="alw_bot"><a href="#" class="more"><span>Читать</span><img src="img/about_project/arro_orange.png" alt="arrow"></a></div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-4 col-lg-6 col-md-6">
                                <div class="news_wrap">
                                    <div class="img_news">
                                        <img src="img/news/news2.png" alt="stock">
                                    </div>
                                    <div class="after_img">
                                        <div class="date_min">Сми о нас</div>
                                        <h3>Новый жилой комплекс комфорт класса.</h3>
                                        <p>Новый жилой комплекс комфорт класса, выдержанный в стиле современной европейской архитектуры!ЖК «Комфорт» расположен ...</p>
                                        <div class="alw_bot"><a href="#" class="more"><span>читать</span><img src="img/about_project/arro_orange.png" alt="arrow"></a></div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-4 col-lg-6 col-md-6">
                                <div class="news_wrap">
                                    <div class="img_news">
                                        <img src="img/news/news3.png" alt="stock">
                                    </div>
                                    <div class="after_img">
                                        <div class="date_min">Сми о нас</div>
                                        <h3>Новый жилой комплекс комфорт класса. </h3>
                                        <p>Новый жилой комплекс комфорт класса, выдержанный в стиле современной европейской архитектуры!ЖК «Комфорт» расположен ...</p>
                                        <div class="alw_bot"><a href="#" class="more"><span>читать</span><img src="img/about_project/arro_orange.png" alt="arrow"></a></div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-4 col-lg-6 col-md-6">
                                <div class="news_wrap">
                                    <div class="img_news">
                                        <img src="img/news/news1.png" alt="stock">
                                    </div>
                                    <div class="after_img">
                                        <div class="date_min">Сми о нас</div>
                                        <h3>Новый жилой комплекс комфорт класса.</h3>
                                        <p>Новый жилой комплекс комфорт класса, выдержанный в стиле современной европейской архитектуры!ЖК «Комфорт» расположен ...</p>
                                        <div class="alw_bot"><a href="#" class="more"><span>Читать</span><img src="img/about_project/arro_orange.png" alt="arrow"></a></div>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>

                    <img src="img/sales/SVG/an_rect.svg" class="rect" alt="rect">

                    <img src="img/about_project/triang.png" class="triangle" alt="triangle">

                    <div class="decor_circles_wrap">
                        <div class="decor_circles">
                            <div class="circle"></div>
                            <div class="circle"></div>
                        </div>
                    </div>

                    <div class="nav_bottom_wrap">
                        <div class="nav_bottom">
                            <div class="page"><span class="num">1</span><span class="grad_trans"></span></div>
                            <div class="page"><span class="num">2</span><span class="grad_trans"></span></div>
                            <div class="page"><span class="num">3</span><span class="grad_trans"></span></div>
                            <div class="page"><i class="fas fa-angle-right"></i><span class="grad_trans"></span></div>
                        </div>
                    </div>

                </div>

                <div class="circles_wrap">
                    <div class="wrap_for_circles">
                        <div class="circle_around"></div>
                        <div class="circle_around"></div>
                        <div class="circle_around"></div>
                    </div>
                </div>

                <img src="img/sales/SVG/an_rect.svg" class="rect" alt="rect">

                <div class="hod_stroyki_wrap">

                    <h3>Хронология строительства</h3>

                    <div class="owl_nav">
                        <div class="slide_prev str_p"><img src="img/hr_arr_l.svg" alt="arrow"></div>
                        <div class="slide_next str_n"><img src="img/orr_arr_right.svg" alt="arrow"></div>
                    </div>

                    <div class="decor_circles_wrap">
                        <div class="decor_circles">
                            <div class="circle"></div>
                            <div class="circle"></div>
                        </div>
                    </div>

                    <img src="img/sales/SVG/an_rect.svg" class="rect" alt="rect">

                    <div class="container">

                        <div class="row justify-content-center">

                            <div class="col-xl-8 col-lg-11 col-12">
                                <div class="slider_all">
                                    <div class="slide">
                                        <img src="img/1.png" alt="">
                                        <div class="build_date">11 июля 2018</div>
                                    </div>
                                    <div class="slide">
                                        <img src="img/2.png" alt="">
                                        <div class="build_date">11 июля 2018</div>
                                    </div>
                                    <div class="slide">
                                        <img src="img/4.png" alt="">
                                        <div class="build_date">11 июля 2018</div>
                                    </div>
                                    <div class="slide">
                                        <img src="img/5.png" alt="">
                                        <div class="build_date">11 июля 2018</div>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>

                </div>

            </section>

        </main>

    </div>



<?php get_footer(); ?>