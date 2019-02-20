<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package wsf_start
 */

get_header();
?>

<div id="my-content">

    <main class="wrap about_prog">

    <!-- Error Page -->
    <div class="error">
        <div class="container-floud">
            <div class="col-xs-12 ground-color text-center">
                <div class="container-error-404">
                    <div class="clip"><div class="shadow"><span class="digit thirdDigit"></span></div></div>
                    <div class="clip"><div class="shadow"><span class="digit secondDigit"></span></div></div>
                    <div class="clip"><div class="shadow"><span class="digit firstDigit"></span></div></div>
                    <div class="msg">OH!<span class="triangle"></span></div>
                </div>
                <h2 class="h1">Извините! Страница не найдена</h2>
            </div>
        </div>
    </div>
    <!-- Error Page -->
    </main>
</div>

    <script>

        // 404 Page

        function randomNum()
        {
            "use strict";
            return Math.floor(Math.random() * 9)+1;
        }
        var loop1,loop2,loop3,time=30, i=0, number, selector3 = document.querySelector('.thirdDigit'), selector2 = document.querySelector('.secondDigit'),
            selector1 = document.querySelector('.firstDigit');
        loop3 = setInterval(function()
        {
            "use strict";
            if(i > 40)
            {
                clearInterval(loop3);
                selector3.innerHTML = 4;
            }else
            {
                selector3.innerHTML = randomNum();
                i++;
            }
        }, time);
        loop2 = setInterval(function()
        {
            "use strict";
            if(i > 80)
            {
                clearInterval(loop2);
                selector2.innerHTML = 0;
            }else
            {
                selector2.innerHTML = randomNum();
                i++;
            }
        }, time);
        loop1 = setInterval(function()
        {
            "use strict";
            if(i > 100)
            {
                clearInterval(loop1);
                selector1.innerHTML = 4;
            }else
            {
                selector1.innerHTML = randomNum();
                i++;
            }
        }, time);

    </script>

<?php
get_footer();
?>