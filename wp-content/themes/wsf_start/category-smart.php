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

        <section class="s_grey s_planning sect_top">

            <div class="filter_room_wrap">

                <div class="filter_room">

                    <div class="container">

                        <div class="row titles_room">

                            <div class="col-xl-9"><h4>Квартиры</h4></div>
                            <div class="col-xl-3 d-none d-xl-block"><h4>Площадь м<sup>2</sup></h4></div>

                        </div>

                        <div class="row form">

                            <div class="col-xl-8 col-12">

                                <ul class="button_all">
                                    <li class="links_two"><a href="/layouts/" class="but_white">Все</a><a href="/layouts/smart/" class="but_white act_but">Smart</a></li>
                                    <li><a href="/layouts/one-room/" class="but_white">1-комнатные</a></li>
                                    <li><a href="/layouts/two-room/" class="but_white">2-комнатны</a></li>
                                    <li><a href="/layouts/three-room/" class="but_white">3-комнатные</a></li>
                                </ul>

                            </div>

                            <div class="col-xl-4"><!-- d-none d-xl-block -->

                                <div class="filter_square">

                                    <div class="selects">

                                        <form>
                                            <div class="inp_t">
                                                <input type="number" name="min_square" placeholder="От" value="">
                                                <input type="number" name="max_square" placeholder="До" value="">
                                            </div>
                                            <div class="reb_wrap">
                                                <div class="reset"><a href="/layouts/"><span>&times;</span>сбросить фильтр</a></div>
                                                <div class="wrap_but"><input type="submit" value="Показать" class="orange_button"></div>
                                            </div>
                                        </form>

                                    </div>

                                </div>

                            </div>

                        </div>

                        <div class="row titles_room title_sec">

                            <div class="col-lg-9 d-block d-xl-none col-12"><h4>Площадь м<sup>2</sup></h4></div>

                        </div>

                    </div>

                </div>

            </div>

        </section>

        <section class="s_white s_plans">

            <div class="circles_wrap">
                <div class="wrap_for_circles">
                    <div class="circle_around"></div>
                    <div class="circle_around"></div>
                    <div class="circle_around"></div>
                </div>
            </div>

            <div class="grey_decor s_grey"></div>

            <div class="planning_wrap">

                <div class="decor_circles_wrap">
                    <div class="decor_circles">
                        <div class="circle"></div>
                        <div class="circle"></div>
                    </div>
                </div>

                <img class="triang" src="<?php echo get_template_directory_uri(); ?>/app/img/about_project/triang.png" alt="triang">

                <div class="planning_items">

                    <div class="container">

                        <div class="row justify-content-center">

                            <?php
                            $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                            $flats = new WP_Query( array (
                                'cat'            => 11,
                                'posts_per_page' => 9,
                                'paged'          => $paged,
                                'order'          => 'DESC',
                                'orderby'        => 'date'
                            ) );
                            function status()  {
                                echo (get_field('status') == 'true') ? ('sold') : null;
                            }
                            ?>
                            <?php
                            if ($_GET && !empty($_GET)) : go_filter(); endif;
                            if ( have_posts() ) :
                                while ( $flats->have_posts() ) :
                                    $flats->the_post();
                                    ?>

                                    <div class="col-12 col-md-6 col-sm-10 col-lg-4">

                                        <div class="item">

                                            <div class="img_wrap">
                                                <a href="<?php echo get_the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
                                                <span>1Г</span>
                                            </div>

                                            <div class="plan_descr s_grey">
                                                <p class="top_descr"><?php the_field('section'); ?> секция - <?php the_field('floors'); ?> этаж</p>
                                                <p class="type_flat"><?php echo 'Smart-квартира' .' (' . esc_html( get_the_title()) . ')'; ?></p>
                                                <div class="add_info">
                                                    <p class="all_sq">Общая: <?php the_field('total_area');?> м<sup>2</sup></p>
                                                    <p class="live_sq">Жилая: <?php the_field('dwelling_place'); ?> м<sup>2</sup></p>
                                                </div>
                                                <a href="<?php echo get_permalink(); ?>" class="more"><span class="grad_trans"></span>Детальнее</a>
                                            </div>

                                        </div>

                                    </div>


                                <?php endwhile;
                            else : ?>
                                <p class="e_message">Вибачте, таких планувань немає[:ru]Извините, таких планировок нет</p>
                            <?php endif; ?>


                        </div>

                    </div>

                </div>

            </div>


            <div class="nav_bottom_wrap">
                <div class="nav_bottom">
                    <?php if ( function_exists( 'wp_pagenavi' ) ) : wp_pagenavi(array('query' => $flats));
                    endif;
                    wp_reset_postdata();?>
                </div>
            </div>

</section>

</main>

</div>


<?php get_footer(); ?>
