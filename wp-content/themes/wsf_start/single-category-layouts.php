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

            <section class="s_white s_flat sect_top">

                <div class="decor_sect s_grey"></div>

                <div class="flat_title_wrap">

                    <div class="flat_title">

                        <?php
                        if (in_category('8')) : $hideCat = '9 and 10 and 11'; $type = '1';
                        elseif (in_category('9')) : $hideCat = '8 and 10 and 11'; $type = '2';
                        elseif (in_category('10')) : $hideCat = '8 and 9 and 11'; $type = '3';
                        elseif (in_category('11')) : $hideCat = '8 and 9 and 10'; $type = 'Smart';
                        endif;
                        ?>

                        <p><?php the_field('section'); ?> секция - <?php the_field('floors'); ?> этаж</p>
                        <h3><span class="flat_type"><?php echo $type ?>-комнатная</span> квартира (<?php echo esc_html(get_the_title());?>)</h3>

                        <?php
                        $next_title = '<span class="hide_top_arr d-none d-lg-block">Следущая квартира</span><span class="img_span"><img src="/wp-content/themes/wsf_start/app/img/orr_arr_right.svg" alt="arrow"></span>';
                        $prev_title = '<span class="img_span"><img src="/wp-content/themes/wsf_start/app/img/orr_arr_left.svg" alt="arrow"></span><span class="hide_top_arr d-none d-lg-block">Назад</span>';
                        previous_post_link('<div class="fl_prev">%link</div>', $prev_title, 1, $hideCat);
                        next_post_link('<div class="fl_next">%link</div>', $next_title, 1, $hideCat); ?>

                    </div>

                </div>

                <div class="flat_wrap">

                    <div class="flat">

                        <div class="container">

                            <div class="row">

                                <div class="col-lg-5 col-sm-6 col-12">
                                    <div class="flat_img">
                                        <a href="<?php the_post_thumbnail_url(); ?>" data-fancybox="images"><?php the_post_thumbnail(); ?></a>
                                    </div>
                                </div>
                                <div class="col-lg-1 col-sm-1"></div>
                                <div class="col-lg-6 col-sm-5 col-12">
                                    <div class="flat_descr">

                                        <div class="flat_items">
                                            <div class="l_bl">
                                                <div class="item_fl">
                                                    <div class="circle_fl"><span><?php the_field('hallway'); ?> м<sup>2</sup></span></div>
                                                    <p>Прихожая</p>
                                                </div>
                                                <div class="item_fl">
                                                    <div class="circle_fl"><span><?php the_field('bathroom'); ?> м<sup>2</sup></span></div>
                                                    <p>Ванная комната</p>
                                                </div>
                                            </div>
                                            <div class="r_bl">
                                                <div class="item_fl">
                                                    <div class="circle_fl"><span><?php the_field('kitchen'); ?> м<sup>2</sup></span></div>
                                                    <p>Кухня</p>
                                                </div>
                                                <div class="item_fl">
                                                    <div class="circle_fl"><span><?php the_field('l_room-1'); ?> м<sup>2</sup></span></div>
                                                    <p>Жилая комната</p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="respon_wrap d-none d-xl-block">

                                            <div class="square_flat">
                                                <div class="frst_sq"><span><?php the_field('dwelling_place'); ?> м<sup>2</sup></span> - Жилая площадь</div>
                                                <div class="scnd_sq"><span><?php the_field('l_room-1'); ?> м<sup>2</sup></span> - Жилая комната</div>
                                            </div>

                                            <div class="mail_consult">
                                                <div class="img_consult">
                                                    <img src="<?php echo get_template_directory_uri(); ?>/app/img/flat/mail.png" alt="mail">
                                                </div>
                                                <div class="img_descr">
                                                    <a href="#small-dialog2" data-square="<?php the_field('dwelling_place'); echo 'м2' ?>" data-name="<?php echo esc_html(get_the_title()); ?>" class="orange_button popup-with-zoom-anim subject_form"><span>Оставить заявку</span></a>
                                                </div>
                                            </div>

                                        </div>

                                    </div>
                                </div>
                                <div class="col-12 d-block d-xl-none">
                                    <div class="wrap_resp">

                                        <div class="square_flat">
                                            <div class="frst_sq"><span>52.7 м<sup>2</sup></span> - Жилая площадь</div>
                                            <div class="scnd_sq"><span>90.7 м<sup>2</sup></span> - Жилая комната</div>
                                        </div>

                                        <div class="mail_consult">
                                            <div class="img_consult">
                                                <img src="<?php echo get_template_directory_uri(); ?>/app/img/flat/mail.png" alt="mail">
                                            </div>
                                            <div class="img_descr">
                                                <a href="#small-dialog2" data-square="<?php the_field('dwelling_place'); echo 'м2' ?>" data-name="<?php echo esc_html(get_the_title()); ?>" class="orange_button popup-with-zoom-anim subject_form"><span>Оставить заявку</span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>

                    </div>

                    <div class="decor_circles_wrap">
                        <div class="decor_circles">
                            <div class="circle"></div>
                            <div class="circle"></div>
                        </div>
                    </div>

                </div>

                <div class="slider_flat_wrap">

                    <div class="slider_title">
                        <h3>Другие квартиры</h3>
                        <div class="owl_nav">
                            <div class="slide_prev" data-slide="2"><img src="<?php echo get_template_directory_uri(); ?>/app/img/orr_arr_left.svg" alt="arrow"></div>
                            <div class="slide_next" data-slide="3"><img src="<?php echo get_template_directory_uri(); ?>/app/img/orr_arr_right.svg" alt="arrow"></div>
                        </div>
                    </div>

                    <div class="slider_flats">

                        <?php
                        if (in_category('9')) : $cat = 9;
                        elseif (in_category('8')) : $cat = 8;
                        elseif (in_category('10')) : $cat = 10;
                        elseif (in_category('11')) : $cat = 11;
                        endif;
                        $rand = new WP_Query(array(
                            'cat' => $cat,
                            'posts_per_page' => 6,
                            'orderby' => 'rand'
                        ));
                        if (have_posts()) :
                            while ($rand->have_posts()) :
                                $rand->the_post(); ?>

                        <div class="item">

                            <div class="img_wrap">
                                <a href="<?php echo get_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
                                <span><?php echo esc_html( get_the_title()); ?></span>
                            </div>

                            <div class="plan_descr s_grey">
                                <p class="top_descr"><?php the_field('section'); ?> секция - <?php the_field('floor'); ?> этаж</p>
                                <p class="type_flat"> <?php
                                        if ( in_category('8') ) : echo '1-комнатная квартира' . '(' . esc_html(get_the_title()) . ')';
                                        elseif ( in_category('10') ) : echo '3-комнатная квартира'. '(' . esc_html(get_the_title()) . ')';
                                        elseif ( in_category('9') ) : echo '2-комнатная квартира' . '(' . esc_html(get_the_title()) . ')';
                                        elseif ( in_category('11') ) : echo 'Smart-квартира' . '(' . esc_html(get_the_title()) . ')';
                                        endif; ?></p>
                                <div class="add_info">
                                    <p class="all_sq">Общая: <?php the_field('total_area');?> м<sup>2</sup></p>
                                    <p class="live_sq">Жилая: <?php the_field('dwelling_place'); ?> м<sup>2</sup></p>
                                </div>
                                <a href="<?php echo get_permalink(); ?>" class="more"><span class="grad_trans"></span>Детальнее</a>
                            </div>

                        </div>

                            <?php endwhile;
                        else :
                            echo 'Планировок еще нет';
                        endif;
                        ?>

                    </div>

                    <img class="triang" src="<?php echo get_template_directory_uri(); ?>/app/img/about_project/triang.png" alt="triang">
                    <div class="circles_wrap">
                        <div class="wrap_for_circles">
                            <div class="circle_around"></div>
                            <div class="circle_around"></div>
                            <div class="circle_around"></div>
                        </div>
                    </div>

            </section>

        </main>

    </div>




<?php get_footer(); ?>