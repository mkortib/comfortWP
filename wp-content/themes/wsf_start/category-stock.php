<?php
get_header();
?>


<div id="my-content">

    <!-- MAIN SECTION -->

    <main class="wrap about_prog">

        <section class="s_stock s_white sect_top">

            <h2 class="stock_title">Акции</h2>

            <div class="main_stock_wrap">

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

                                <div class="col-xl-6 col-lg-6 col-md-6 col-12">
                                    <div class="main_news_img">
                                        <?php the_post_thumbnail(); ?>
                                    </div>
                                </div>

                                <div class="col-xl-6 col-lg-6 col-md-6 col-12">
                                    <div class="main_news_descr">
                                        <div class="date"><?php the_field('date'); ?></div>
                                        <h3><?php the_title(); ?></h3>
                                        <?php the_excerpt(); ?>
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

            <div class="all_stock">

                <div class="container">

                    <div class="row">

                        <?php
                        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                        $category = get_category( get_query_var( 'cat' ) );
                        $cat_id = $category->cat_ID;
                        $news = new WP_Query( array (
                            'cat'            => $cat_id,
                            'posts_per_page' => 6,
                            'paged'          => $paged,
                            'order'          => 'DESC',
                            'orderby'        => 'date'
                        ) );
                        if ( have_posts() ) :
                            while ( $news->have_posts() ) :
                                $news->the_post();
                                ?>



                                <div class="col-xl-4 col-lg-6 col-md-6">
                                    <div class="stock_wrap">
                                        <div class="img_stock">
                                            <?php the_post_thumbnail(); ?>
                                        </div>
                                        <div class="after_img">
                                            <div class="date_min"><?php the_field('date'); ?></div>
                                            <h3><?php the_title(); ?></h3>
                                            <p> <?php the_excerpt(); ?></p>
                                            <div class="alw_bot"><a href="<?php echo get_the_permalink(); ?>" class="more"><span>Подробнее</span><img src="<?php echo get_template_directory_uri(); ?>/app/img/orr_arr_right.svg" alt="arrow"></a></div>
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

            <img src="<?php echo get_template_directory_uri(); ?>/app/img/sales/SVG/an_rect.svg" class="rect" alt="rect">

            <div class="decor_circles_wrap">
                <div class="decor_circles">
                    <div class="circle"></div>
                    <div class="circle"></div>
                </div>
            </div>

        </section>

    </main>

</div>


<?php
get_footer();
?>
