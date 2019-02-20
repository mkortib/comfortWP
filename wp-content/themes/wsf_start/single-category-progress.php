<?php
get_header();
?>




<div id="my-content">


    <!-- MAIN SECTION -->

    <main class="wrap about_prog">

        <section class="s_stock_open s_white sect_top">


            <div class="top_title">
                <div class="container">
                    <?php

                    $next_title = 'Следущая <img src=" '. get_template_directory_uri() .'/app/img/orr_arr_right.svg" alt="arr">';
                    $prev_title = '<img src=" '. get_template_directory_uri() .'/app/img/orr_arr_left.svg" alt="arr"> Назад';
                    previous_post_link('<div class="prev_block">%link</div>', $prev_title, 1);
                    ?>

                    <h2>Ход строительства</h2>

                   <?php next_post_link('<div class="next_block">%link</div>', $next_title, 1); ?>

                </div>
            </div>



            <img src="<?php echo get_template_directory_uri(); ?>/app/img/sales/SVG/an_rect.svg" class="rect" alt="rect">

            <div class="decor_circles_wrap">
                <div class="decor_circles">
                    <div class="circle"></div>
                    <div class="circle"></div>
                </div>
            </div>

            <div class="rect_gr">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="539" height="509" viewBox="0 0 539 509">

                    <image id="Векторный_смарт-объект1_копия_3" data-name="Векторный смарт-объект1 копия 3" x="-58" width="597" height="509" xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAAlUAAAH9CAMAAAAEf3meAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAC+lBMVEXx8vn////x8vnx8vnx8vnx8vnx8vnx8vnx8vnx8vnx8vnx8vnx8vnx8vnx8vnx8vnx8vnx8vnx8vnx8vnx8vnx8vnx8vnx8vnx8vnx8vnx8vnx8vnx8vnx8vnx8vnx8vnx8vnx8vnx8vnx8vnx8vnx8vnx8vnx8vnx8vnx8vnx8vnx8vnx8vnx8vnx8vnx8vnx8vnx8vnx8vnx8vnx8vnx8vnx8vnx8vnx8vnx8vnx8vnx8vnx8vnx8vnx8vnx8vnx8vnx8vnx8vnx8vnx8vnx8vnx8vnx8vnx8vnx8vnx8vnx8vnx8vnx8vnx8vnx8vnx8vnx8vnx8vnx8vnx8vnx8vnx8vnx8vnx8vnx8vnx8vnx8vnx8vnx8vnx8vnx8vnx8vnx8vnx8vnx8vnx8vnx8vnx8vnx8vnx8vnx8vnx8vnx8vnx8vnx8vnx8vnx8vnx8vnx8vnx8vnx8vnx8vnx8vnx8vnx8vnx8vnx8vnx8vnx8vnx8vnx8vnx8vnx8vnx8vnx8vnx8vnx8vnx8vnx8vnx8vnx8vnx8vnx8vnx8vnx8vnx8vnx8vnx8vnx8vnx8vnx8vnx8vnx8vnx8vnx8vnx8vnx8vnx8vnx8vnx8vnx8vnx8vnx8vnx8vnx8vnx8vnx8vnx8vnx8vnx8vnx8vnx8vnx8vnx8vnx8vnx8vnx8vnx8vnx8vnx8vnx8vnx8vnx8vnx8vnx8vnx8vnx8vnx8vnx8vnx8vnx8vnx8vnx8vnx8vnx8vnx8vnx8vnx8vnx8vnx8vnx8vnx8vnx8vnx8vnx8vnx8vnx8vnx8vnx8vnx8vnx8vnx8vnx8vnx8vnx8vnx8vnx8vnx8vnx8vnx8vnx8vnx8vnx8vnx8vnx8vnx8vnx8vnx8vnx8vnx8vnx8vnx8vnx8vnx8vnx8vnx8vnx8vnx8vnx8vnx8vnx8vnx8vnx8vnx8vnx8vnx8vnx8vnx8vnx8vnx8vnx8vnx8vnx8vnx8vnx8vnx8vnx8vnx8vkAAADh+eY0AAAA/HRSTlMAABVQgq7O6Pz24seid0QKKoHQ+r9uGgZd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"/>
                </svg>
            </div>

            <div class="decor_circles_news">
                <div class="decor_circles">
                    <div class="circle"></div>
                    <div class="circle"></div>
                </div>
            </div>

            <div class="info_news_wrap">

                <h3 class="date_news"><?php the_field('date'); ?></h3>

                <div class="owl_nav">
                    <div class="slide_prev new_pr"><img src="<?php echo get_template_directory_uri(); ?>/app/img/hr_arr_l.svg" alt="arrow"></div>
                    <div class="slide_next new_n"><img src="<?php echo get_template_directory_uri(); ?>/app/img/orr_arr_right.svg" alt="arrow"></div>
                </div>

                <img src="<?php echo get_template_directory_uri(); ?>/app/img/about_project/triang.png" class="triangle" alt="triangle">

                <div class="decor_circles_wrap">
                    <div class="decor_circles">
                        <div class="circle"></div>
                        <div class="circle"></div>
                    </div>
                </div>



                        <?php

                        $images = get_field('gallery');


                        if( $images ): ?>

                        <div class="slider_news">


                            <?php foreach( $images as $image ): ?>

                                <div class="slide">

                                    <div class="container">

                                        <div class="row justify-content-center">

                                            <div class="col-xl-8 col-lg-10 col-sm-10 col-12">

                                                <div class="img_wr">
                                                    <a href="<?php echo $image['url']; ?>" data-fancybox="images"><img src="<?php echo $image['url']; ?>" alt="news"></a>
                                                </div>
                                            </div>

                                        </div>

                                    </div>

                                </div>
                            <?php endforeach; ?>
                        </div>
                    <?php endif; ?>

                <p class="curr_slide">1/<?php echo count($images); ?></p>

                <div class="new_descr">

                    <h2><?php the_title(); ?></h2>

                    <?php the_content(); ?>

                </div>

            </div>

        </section>

    </main>

</div>



<?php
get_footer();
?>
