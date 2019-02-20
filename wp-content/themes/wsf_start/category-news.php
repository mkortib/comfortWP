<?php
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
                        $category = get_category( get_query_var( 'cat' ) );
                        $cat_id = $category->cat_ID;
                        $news = new WP_Query( array (
                            'cat'            => $cat_id,
                            'posts_per_page' => 1,
                            'paged'          => $paged,
                            'order'          => 'DESC',
                            'orderby'        => 'date'
                        ) );
                        if ( have_posts() ) :
                            while ( $news->have_posts() ) :
                                $news->the_post();
                                ?>


                                <?php
                                    $type = '';
                                    if (in_category('5')) : $type = 'Ход строительства';
                                    elseif (in_category('6')) : $type = 'СМИ о нас';
                                endif; ?>

                                <div class="col-xl-6 col-lg-6 col-md-6 col-12">
                                    <div class="main_news_img">
                                        <?php the_post_thumbnail(); ?>
                                    </div>
                                </div>

                                <div class="col-xl-6 col-lg-6 col-md-6 col-12">
                                    <div class="main_news_descr">
                                        <div class="date"><?php echo $type; ?></div>
                                        <h3><?php the_title(); ?></h3>
                                        <?php the_excerpt(); ?> <!-- sub_des -->
                                        <a href="<?php echo get_the_permalink() ?>" class="more">Читать<img src="<?php echo get_template_directory_uri(); ?>/app/img/orr_arr_right.svg" alt="arr"></a>
                                    </div>
                                </div>

                            <?php endwhile;
                        endif;?>

                    </div>



                </div>

                <img src="<?php echo get_template_directory_uri(); ?>/app/img/about_project/triang.png" class="triangle" alt="triangle">

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
                        <li class="active"><a href="/news/">Новости</a></li>
                        <li><a href="/news/progress/">Ход строительства</a></li>
                        <li><a href="/news/media/">СМИ о нас</a></li>
                    </ul>
                </div>

            </div>


            <div class="all_news">

                <div class="container">

                    <div class="row">

                        <?php
                        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                        $category = get_category( get_query_var( 'cat' ) );
                        $cat_id = $category->cat_ID;
                        $news = new WP_Query( array (
                            'cat'            => array(5 ,6),
                            'posts_per_page' => 6,
                            'paged'          => $paged,
                            'order'          => 'DESC',
                            'orderby'        => 'date'
                        ) );
                        if ( have_posts() ) :
                            while ( $news->have_posts() ) :
                                $news->the_post();
                                ?>

                        <?php
                            $type = '';
                            if (in_category('5')) : $type = 'Ход строительства';
                            elseif (in_category('6')) : $type = 'СМИ о нас';
                            endif; ?>


                                <div class="col-xl-4 col-lg-6 col-md-6">
                                    <div class="news_wrap">
                                        <div class="img_news">
                                            <?php the_post_thumbnail(); ?>
                                        </div>
                                        <div class="after_img">
                                            <div class="date_min"><?php echo $type; ?></div>
                                            <h3><?php the_title(); ?></h3>
                                            <?php the_excerpt(); ?>
                                            <div class="alw_bot"><a href="<?php echo get_the_permalink(); ?>" class="more"><span>Читать</span><img src="<?php echo get_template_directory_uri(); ?>/app/img/orr_arr_right.svg" alt="arrow"></a></div>
                                        </div>
                                    </div>
                                </div>

                            <?php endwhile;
                        else : ?>
                            <p class="e_message"><?php echo __('[:ua]Вибачте, таких планувань немає[:ru]Извините, таких планировок нет[:en]Sorry, there are no such plans[:]'); ?></p>
                        <?php endif; ?>


                    </div>

                </div>

                <img src="<?php echo get_template_directory_uri(); ?>/app/img/sales/SVG/an_rect.svg" class="rect" alt="rect">

                <img src="<?php echo get_template_directory_uri(); ?>/app/img/about_project/triang.png" class="triangle" alt="triangle">

                <div class="decor_circles_wrap">
                    <div class="decor_circles">
                        <div class="circle"></div>
                        <div class="circle"></div>
                    </div>
                </div>

                <div class="nav_bottom_wrap">
                    <div class="nav_bottom">
                        <?php
                            if ( function_exists( 'wp_pagenavi' ) ) : wp_pagenavi(array('query' => $news));
                            endif;
                            wp_reset_postdata();
                        ?>
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

            <img src="<?php echo get_template_directory_uri(); ?>/app/img/sales/SVG/an_rect.svg" class="rect" alt="rect">

            <div class="hod_stroyki_wrap">

                <h3>Хронология строительства</h3>

                <div class="owl_nav">
                    <div class="slide_prev str_p"><img src="<?php echo get_template_directory_uri(); ?>/app/img/hr_arr_l.svg" alt="arrow"></div>
                    <div class="slide_next str_n"><img src="<?php echo get_template_directory_uri(); ?>/app/img/orr_arr_right.svg" alt="arrow"></div>
                </div>

                <div class="decor_circles_wrap">
                    <div class="decor_circles">
                        <div class="circle"></div>
                        <div class="circle"></div>
                    </div>
                </div>

                <img src="<?php echo get_template_directory_uri(); ?>/app/img/sales/SVG/an_rect.svg" class="rect" alt="rect">

                <div class="container">

                    <div class="row justify-content-center">

                        <div class="col-xl-8 col-lg-11 col-12">

                            <div class="slider_all">
                                <?php
                                    $news = new WP_Query( array (
                                        'cat'            => 5,
                                        'posts_per_page' => 4,
                                        'paged'          => $paged,
                                        'order'          => 'DESC',
                                        'orderby'        => 'date'
                                    ) );

                                    if ( have_posts() ) :
                                        while ( $news->have_posts() ) :
                                            $news->the_post();

                                            $images = get_field('gallery');

                                            if( $images ):

                                                foreach( $images as $image ): ?>

                                <div class="slide">
                                    <img src="<?php echo $image['url']; ?>" alt="news">
                                    <div class="build_date"><?php the_date('j F Y'); ?></div>
                                </div>

                                <?php
                                                endforeach;
                                            endif;
                                        endwhile;
                                    endif;

                                    wp_reset_postdata();
                                ?>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </section>

    </main>

</div>


<?php get_footer(); ?>
