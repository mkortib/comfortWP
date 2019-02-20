<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package wsf_start
 */

?>
<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">

<head>

    <meta charset="utf-8">
    <!-- <base href="/"> -->

<!--    <title>comfort</title>-->
    <meta name="description" content="">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Template Basic Images Start -->
    <meta property="og:image" content="path/to/image.jpg">
    <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/app/img/favicon/favicon.ico">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/app/img/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri(); ?>/app/img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="194x194" href="<?php echo get_template_directory_uri(); ?>/app/img/favicon/favicon-194x194.png">
    <link rel="icon" type="image/png" sizes="192x192" href="<?php echo get_template_directory_uri(); ?>/app/img/favicon/android-chrome-192x192.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri(); ?>/app/img/favicon/favicon-16x16.png">
    <link rel="manifest" href="<?php echo get_template_directory_uri(); ?>/app/img/favicon/site.webmanifest">
    <link rel="mask-icon" href="<?php echo get_template_directory_uri(); ?>/app/img/favicon/safari-pinned-tab.svg" color="#f18438">
    <meta name="apple-mobile-web-app-title" content="ЖК Comfort">
    <meta name="application-name" content="ЖК Comfort">
    <meta name="msapplication-TileColor" content="#161936">
    <meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/app/img/favicon/mstile-144x144.png">
    <meta name="msapplication-config" content="<?php echo get_template_directory_uri(); ?>/app/img/favicon/browserconfig.xml">
    <!-- Template Basic Images End -->

    <!-- Custom Browsers Color Start -->
    <meta name="theme-color" content="#1a1a1a">
    <!-- Custom Browsers Color End -->

    <?php if( is_404() ) : echo "<link href='https://fonts.googleapis.com/css?family=Anton|Passion+One|PT+Sans+Caption' rel='stylesheet' type='text/css'>"; endif; ?>

    <!-- <style>body {opacity: 0; overflow-x: hidden;} html {background-color: #1a1a1a;}</style> -->
<!--    <link rel="stylesheet" href="css/main.min.css"> in the end -->
    <?php wp_head(); ?>


</head>

<body class="<?php if(is_page(52)){echo 'ishome';} else {echo 'isnohome';};?>" id="post-<?php the_ID(); ?>">

<div id="my-page">

    <div id="my-header">

        <!-- header -->

        <header class="header">

            <div class="row">

                <div class="col-lg-2 col-md-2 col-sm-3 col-6">
                    <a href="/" class="logo"><svg class="logo" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 603.67 134.43"><defs><style>.cls-1{fill:#fff}.cls-2{fill:#f18438}</style></defs><g><path class="cls-1" d="M188.73 20.31c8.29 0 15.58 3.45 22.28 10.54l1.53 1.61 13.53-12.91L224.7 18A47.22 47.22 0 0 0 189 1.49a45 45 0 0 0-22.35 5.81 41.64 41.64 0 0 0-16 15.43 43 43 0 0 0-5.58 21.89c0 12.6 4.12 23.09 12.26 31.19S176.05 88 188.75 88a47 47 0 0 0 18.45-3.44c5.37-2.28 11.11-6.38 17.05-12.18l1.57-1.53-13.16-13.72-1.6 1.58c-4.08 4-7.82 6.86-11.14 8.36A26.49 26.49 0 0 1 189 69.29a26 26 0 0 1-12.73-3.17 22.31 22.31 0 0 1-8.75-8.67 25.85 25.85 0 0 1-3.12-12.81 24 24 0 0 1 24.34-24.33zM284 26.7a33 33 0 0 0-16.48-4.38A31.29 31.29 0 0 0 246 30.76 31.49 31.49 0 0 0 235.3 55a31.65 31.65 0 0 0 9.43 23 31.13 31.13 0 0 0 22.8 9.5 32.92 32.92 0 0 0 16.57-4.31 31.68 31.68 0 0 0 11.9-12 32.74 32.74 0 0 0 4.35-16.41A32.19 32.19 0 0 0 284 26.7zm-16.33 42.91a12.62 12.62 0 0 1-9.66-4c-2.58-2.71-3.83-6.21-3.83-10.69a14.46 14.46 0 0 1 3.88-10.51 13.81 13.81 0 0 1 19.43-.05c2.57 2.69 3.83 6.15 3.83 10.56a14.66 14.66 0 0 1-3.91 10.64 12.81 12.81 0 0 1-9.74 4.05zM396.73 25.51a22.62 22.62 0 0 0-12-3.19 25.44 25.44 0 0 0-12 2.91 24.88 24.88 0 0 0-7.26 5.77 20.29 20.29 0 0 0-17-8.72 26.4 26.4 0 0 0-10.82 2.21 25.51 25.51 0 0 0-5.16 3.08v-3.8h-18.94v62.28h18.93V58.11c0-5.26.45-9.11 1.32-11.43a10.61 10.61 0 0 1 3.66-5 8.67 8.67 0 0 1 5.27-1.73 6.81 6.81 0 0 1 4.27 1.24 8.11 8.11 0 0 1 2.66 4.09c.68 2.09 1 5.64 1 10.55v30.22h19V57.74c0-5.22.43-9 1.29-11.24a10.21 10.21 0 0 1 3.61-4.87 8.86 8.86 0 0 1 5.44-1.71c2.56 0 4.31.81 5.53 2.54.93 1.33 2 4.49 2 12v31.59h19V49.93c0-7.32-.73-12.53-2.24-15.93a18.85 18.85 0 0 0-7.56-8.49zM436.37 0c-4.69 0-8.42 1.11-11.1 3.29a13.22 13.22 0 0 0-4.8 9c-.14.89-.32 3.08-.38 11.57h-5.17v16.7h5.15v45.49H439V40.51h9.2v-16.7H439v-5a8.34 8.34 0 0 1 .15-1.67 3.49 3.49 0 0 1 2.22-.47 17.55 17.55 0 0 1 4.54.81l2.82.82V2.73l-1.45-.52A32.42 32.42 0 0 0 436.37 0z"/><path class="cls-2" d="M504 26.7a33 33 0 0 0-16.48-4.38A31.29 31.29 0 0 0 466 30.76 31.49 31.49 0 0 0 455.34 55a31.65 31.65 0 0 0 9.43 23 31.13 31.13 0 0 0 22.8 9.5 32.92 32.92 0 0 0 16.57-4.31 31.68 31.68 0 0 0 11.9-12 32.74 32.74 0 0 0 4.35-16.41A32.19 32.19 0 0 0 504 26.7zm-16.29 42.91a12.62 12.62 0 0 1-9.66-4c-2.58-2.71-3.83-6.21-3.83-10.69a14.46 14.46 0 0 1 3.88-10.51 13.8 13.8 0 0 1 19.42-.05c2.58 2.69 3.84 6.15 3.84 10.56a14.63 14.63 0 0 1-3.92 10.64 12.79 12.79 0 0 1-9.73 4.05z"/> <path class="cls-1" d="M549.08 24.92a15.53 15.53 0 0 0-1.93 1.52v-2.63h-16.86v62.24h18.83V57.64c0-9.54 1.1-13.52 2-15.19 1.68-3 3.22-3 3.73-3a7.75 7.75 0 0 1 3.2 1.05l2.23 1.11 6-16.71-1.78-.9a14.89 14.89 0 0 0-15.42.92zM595.07 23.81V2.5h-18.94v21.31h-7.44v16.91h7.44v45.33h18.94V40.72h8.6V23.81h-8.6zM178.81 129.74h-3l-8.15-8.81v8.81h-2.17v-8.82l-8.19 8.82h-3l8.75-9.16-8.44-8.15h3l7.9 7.76v-7.76h2.17v7.75l7.89-7.75h2.93l-8.44 8.15zM204.18 129.74h-2.24v-12.68l-12.67 13.16v-17.79h2.24v12.67l12.67-13.1zM227.93 114.41h-5.37v15.33h-2.19v-15.33H215v-2h13zM251.07 129.74h-2.19v-15.33h-7.56v10.19c0 2.07-.32 3.52-1 4.34a3 3 0 0 1-2.61 1.07 6.09 6.09 0 0 1-1.94-.27l.38-2a2.58 2.58 0 0 0 1.3.31 1.22 1.22 0 0 0 1.23-.67 7.68 7.68 0 0 0 .4-3.05v-11.9h11.95zM281.31 121.08a8.71 8.71 0 0 1-2.71 6.43 9.38 9.38 0 0 1-13.11 0 8.71 8.71 0 0 1-2.71-6.43 8.63 8.63 0 0 1 2.73-6.42 9.37 9.37 0 0 1 13.1 0 8.67 8.67 0 0 1 2.7 6.42zm-2.17 0a7 7 0 0 0-7.07-7 6.89 6.89 0 0 0-5 2 6.75 6.75 0 0 0-2.07 5 7.07 7.07 0 0 0 7.1 7.1 6.79 6.79 0 0 0 5-2.07 6.89 6.89 0 0 0 2.04-5.03zM306.53 124.91a4.32 4.32 0 0 1-1.45 3.29 6.87 6.87 0 0 1-4.8 1.54H293v-17.31h6.76a5.9 5.9 0 0 1 4.4 1.52 3.91 3.91 0 0 1 1.15 2.84 3.67 3.67 0 0 1-2.38 3.72 4.45 4.45 0 0 1 3.58 4.4zm-3.45-7.85q0-2.66-3.75-2.65h-4.16v5.43h4.2q3.7 0 3.71-2.78zm1.07 7.77c0-2.11-1.45-3.16-4.33-3.16h-4.65v6.09H300c2.77 0 4.15-.97 4.15-2.93zM333.23 129.74H331v-12.68l-12.67 13.16v-17.79h2.25v12.67l12.65-13.1zM361.47 129.74h-2.25v-12.68l-12.66 13.12v-17.75h2.24v12.63l12.67-13zm-2.66-23.56a4.78 4.78 0 0 1-9.55 0h1.83a3 3 0 0 0 .83 2.18 2.77 2.77 0 0 0 2.11.87 2.82 2.82 0 0 0 2.11-.87 3 3 0 0 0 .84-2.18zM409 129.74h-2.92l-8.34-8.63v8.63h-2.15v-17.31h2.15v7.67l8-7.67h2.86l-8.54 8.2zM435.59 121.08a8.71 8.71 0 0 1-2.71 6.43 9.38 9.38 0 0 1-13.11 0 8.71 8.71 0 0 1-2.71-6.43 8.63 8.63 0 0 1 2.73-6.42 9.37 9.37 0 0 1 13.1 0 8.67 8.67 0 0 1 2.7 6.42zm-2.17 0a7 7 0 0 0-7.07-7 6.89 6.89 0 0 0-5 2 6.75 6.75 0 0 0-2.07 5 7.07 7.07 0 0 0 7.1 7.1 6.79 6.79 0 0 0 5-2.07 6.89 6.89 0 0 0 2.04-5.03zM465.26 129.74h-2.2l-2.45-11.57-5.57 12-5.59-12-2.45 11.57h-2.17l3.95-17.8 6.27 14 6.28-14zM490.35 129.74h-2.14v-15.33h-9.6v15.33h-2.15v-17.31h13.89zM516 129.74h-2.19v-15.33h-7.57v10.19c0 2.07-.31 3.52-.95 4.34a3 3 0 0 1-2.59 1.06 6.09 6.09 0 0 1-1.94-.27l.38-2a2.57 2.57 0 0 0 1.29.31 1.23 1.23 0 0 0 1.24-.67 7.68 7.68 0 0 0 .4-3.05v-11.89H516zM545.22 121.44H529.8a6.57 6.57 0 0 0 1.92 4.79 6.38 6.38 0 0 0 4.75 2 7.44 7.44 0 0 0 4.06-1 8.42 8.42 0 0 0 2.34-2.59l1.76 1a9.3 9.3 0 0 1-8.16 4.53 8.32 8.32 0 0 1-6.31-2.56 9.13 9.13 0 0 1-2.43-6.54 8.88 8.88 0 0 1 2.59-6.56 8.34 8.34 0 0 1 6.15-2.53 8.22 8.22 0 0 1 6.38 2.67 9.1 9.1 0 0 1 2.37 6.42zm-2.2-1.75a6.83 6.83 0 0 0-2.27-4.19 6.66 6.66 0 0 0-8.59 0 6.5 6.5 0 0 0-2.24 4.15zM6.14 69.61l17.25-32.28s16.5-13.25 18-13.25 19.25-4.5 20.5-4.5 17.25-6.42 18.25-6.34 31.75-3.16 31.75-3.16 6.64 4.25 7.82 5.5 4.43 18 4.43 21.25-7 20-12.75 23.5-14.75 12.75-14.5 16 6.5 14 5.5 18-5.5 18.66-7.75 20.08-15.75 13-25.5 13.35-43.25-15-43.5-15.33-12.5-26.1-14.25-30.1-5.25-12.72-5.25-12.72zM570.31 129.74h-2.91l-8.34-8.63v8.63h-2.16v-17.31h2.16v7.67l8-7.67h2.85l-8.53 8.2zM593.93 128.14a9.38 9.38 0 0 1-6 2 8.94 8.94 0 0 1-6.54-2.62 9.09 9.09 0 0 1 6.5-15.52 9.93 9.93 0 0 1 5.93 1.83v2.67a8 8 0 0 0-6-2.5 6.4 6.4 0 0 0-4.8 2.1 6.81 6.81 0 0 0-2 4.91 7.22 7.22 0 0 0 1.95 5.12 6.33 6.33 0 0 0 4.83 2.1 8.06 8.06 0 0 0 6.17-2.69z"/><path class="cls-2" d="M65.19 4A65.19 65.19 0 0 0 0 69.16v.08a65.19 65.19 0 0 0 65.19 65.19h.08a65.19 65.19 0 0 0 65.19-65.19V4zm26.66 101.2a43.51 43.51 0 1 1-.51-64 4.78 4.78 0 0 1 .14 6.92L81.12 58.44a4.76 4.76 0 0 1-6.45.29A19.29 19.29 0 1 0 75 87.79a4.78 4.78 0 0 1 6.57.13L91.93 98.3a4.79 4.79 0 0 1-.08 6.87zm23.9-68.85a13.52 13.52 0 1 1 0-19.12 13.51 13.51 0 0 1 0 19.09z"/></g></svg></a>
                </div>

                <div class="col-lg-6 col-xl-7 col-md-6 col-sm-4 col-6">
                    <nav class="header_nav">
                        <ul class="nav_cnt">
                            <?php
                            wp_nav_menu( array(
                                'container'      => false,
                                'echo'           => true,
                                'depth'          => 0,
                                'theme_location' => 'primary',
                                'items_wrap'     => '%3$s',
                            ) );
                            ?>
                        </ul>
                    </nav>
                </div>

                <div class="col-lg-4 col-xl-3 col-md-4 col-sm-5 d-none d-sm-block d-md-block d-lg-block d-xl-block">
                    <div class="phone_warp">
                        <a class="phone" href="tel: +380 67 597 03 03">+380 67 597 03 03</a>
                        <a class="phone_icon popup-with-move-anim" href="#small-dialog"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 18 29">
                                <path class="cls-1" d="M10.53 2a.66.66 0 0 1 .08-.94l1.1-.91a.7.7 0 0 1 1 .07.66.66 0 0 1-.08.94l-1.1.92a.7.7 0 0 1-1-.08zM12.52 4.83a.67.67 0 1 0 0 1.34H14a.67.67 0 1 0 0-1.33zM11.65 3.59a.69.69 0 0 0 .64.44 1 1 0 0 0 .24 0l2.4-.86a.65.65 0 0 0 .4-.85.68.68 0 0 0-.87-.4l-2.4.85a.67.67 0 0 0-.41.82zM17.91 26.17l-2.19-5.84v-.08a1.49 1.49 0 0 0-1.2-.87c-.33 0-.66-.06-1-.08h-.47a9 9 0 0 1-1.41-.21 3.26 3.26 0 0 1-1.82-1 12.72 12.72 0 0 1-1.87-5 3.14 3.14 0 0 1 .72-1.92 7.84 7.84 0 0 1 .94-1.05l.33-.31.62-.59a1.45 1.45 0 0 0 .39-1.59l-2.2-5.88A1.53 1.53 0 0 0 6.81.87l-1.51.54a5.08 5.08 0 0 0-1.08.5C1.49 3.54 0 6.7 0 10.8c0 6.37 3.62 11.67 4.86 13.3a.63.63 0 0 0 .89.09.59.59 0 0 0 .1-.78c-1.46-2.09-4.48-7-4.48-12.61 0-3.62 1.25-6.37 3.56-7.75a3.28 3.28 0 0 1 .83-.38l1.52-.54a.15.15 0 0 1 .19.08l2.19 5.84a.14.14 0 0 1 0 .16l-.66.6-.36.33a9.09 9.09 0 0 0-1.09 1.23 4.43 4.43 0 0 0-1 2.7 13.54 13.54 0 0 0 2.21 5.83 4.6 4.6 0 0 0 2.53 1.45 8.56 8.56 0 0 0 1.65.25h.49c.31 0 .6 0 .88.07a.13.13 0 0 1 .12.09v.06l2.17 5.78a.16.16 0 0 1-.09.19l-1.38.49a4.2 4.2 0 0 1-1.23.31A7.61 7.61 0 0 1 8.44 26a.69.69 0 0 0-.94 0 .65.65 0 0 0 .09 1 9.3 9.3 0 0 0 5.57 2 7.54 7.54 0 0 0 .94-.06 5.82 5.82 0 0 0 1.53-.38l1.37-.49a1.48 1.48 0 0 0 .91-1.9z" style="fill: #fff;"/>
                            </svg></a>
                    </div>
                </div>


            </div>
            <div class="decorative">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 545.03 398.5"><defs><linearGradient id="a" y1="199.25" x2="545.03" y2="199.25" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#ff8632"/><stop offset="1" stop-color="#da4816"/></linearGradient></defs><g><path d="M207.13 0L4.41 349.88c-12.51 21.59 3.07 48.62 28 48.62H284a52.31 52.31 0 0 0 45.27-26.1L545 0z" fill="url(#a)"/></g></svg>
            </div>

            <nav id="my-menu">
                <ul class="dssd">
                    <?php
                    wp_nav_menu( array(
                        'container'      => false,
                        'echo'           => true,
                        'depth'          => 0,
                        'theme_location' => 'primary',
                        'items_wrap'     => '%3$s',
                    ) );
                    ?>
<!--                    <li class="dsdd"><a href="about_project.html">О проекте</a></li>-->
<!--                    <li class="fff"><a href="planirovki_main.html">Квартиры</a>-->
<!--                        <ul class="mob_padd">-->
<!--                            <li class="menu_item"><a href="smart.html">Smart</a></li>-->
<!--                            <li class="menu_item"><a href="smart.html">Квартиры с ремонтом под ключ</a></li>-->
<!--                        </ul>-->
<!--                    </li>-->
<!--                    <li class="fff"><a href="buy_cond.html">Условия покупки</a></li>-->
<!--                    <li class="ff"><a href="smart.html">Галерея</a></li>-->
<!--                    <li class="fff"><a href="stock.html">Акции</a></li>-->
<!--                    <li class="fff"><a href="news.html">Новости</a></li>-->
<!--                    <li class="fff"><a href="contact.html">Контакты</a></li>-->
                </ul>
            </nav>

        </header>

    </div>

