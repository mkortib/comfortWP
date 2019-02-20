<?php
/**
 * @package WordPress
 * @subpackage wsf
 * @since wsf 2.0
 */
?>


<div class="col-xl-4 col-lg-6 col-md-6">
    <div class="news_wrap">
        <div class="img_news">
            <?php the_post_thumbnail();?>
        </div>
        <div class="after_img">
            <div class="date_min">Сми о нас</div>
            <h3>Новый жилой комплекс комфорт класса.</h3>
            <p>-><?php the_excerpt(); ?></p>
            <div class="alw_bot"><a href="<?php echo get_permalink(); ?>" class="more"><span>Читать</span><img src="img/orr_arr_right.svg" alt="arrow"></a></div>
        </div>
    </div>
</div>

