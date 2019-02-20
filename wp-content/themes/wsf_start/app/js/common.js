$(function() {

  // init menu and some changes

	$('#my-menu').mmenu({
        extensions: ['widescreen', 'theme-black', 'effect-menu-slide', 'pagedim-black', 'position-left'],
        navbar: {
		title: '<img src="/wp-content/themes/wsf_start/app/img/svg/logo.svg" alt="logo comfort">'
		}
	});

	var api = $("#my-menu").data( "mmenu" );

    api.bind('close:finish', function() {$('.close_mm').removeClass('is-active');});


	$('#menu-item-76').addClass('drop');
	$('.drop_down').prev().addClass('drop_hover');
	$('.drop_hover').html('Квартиры' + '<i class="fas fa-angle-down">');
	$('.nav_cnt').append('<li class="menu_mob"><a href="#my-menu">МЕНЮ</a></li><li><a class="mnu_toggle" href="#my-menu"><span class="menu_point"></span><span class="menu_point"></span><span class="menu_point"></span></a></li>');

	$('#my-menu .drop_down').addClass('mob_padd').prev().removeClass('drop_hover').find('i').remove();

	$('#mm-2 .mm-navbar').append('<a class="mm-btn mm-btn_prev mm-navbar__btn" href="#mm-1" aria-owns="mm-1" aria-haspopup="true"><span class="mm-sronly">Close submenu</span></a>');

	// interval to phone icon

	setInterval(function() {
	  if($('.phone_icon svg').hasClass('anim_ph')) {
	    $('.phone_icon svg').removeClass('anim_ph');
	  } else {
	    setTimeout(function () {
	      $('.phone_icon svg').addClass('anim_ph');
	      }, 6000);
	  }
	}, 10000);

	// mousemove animation for circles on main page

    var lFollowX = 0,
        lFollowY = 0,
        x = 0,
        y = 0,
        friction = 1 / 30;

    function moveBackground() {
        x += (lFollowX - x) * friction;
        y += (lFollowY - y) * friction;

        translate = 'translate(' + x + 'px, ' + y + 'px) scale(1)';

        $('.triangle, .rectang, .rect, .dec_fig2 img, .dec_fig img, .circ_wr, .main-slider .slide-all, .main-slider .slick-next, .dec_triangl, .dec_rectangl, .decor_circles_wrap, .decor_circles_wrap2, .decor_circles_wrap1, .triangle_dec, .rectangle, .triang, .circles_wrap').css({
            '-webit-transform': translate,
            '-moz-transform': translate,
            'transform': translate
        });

        $('.circle_alone').css({
            'bottom': y,
            'right': x
        });

        $('.contact_form .rectangle, .contact_form .triangle, .s_infra .rectang').css({
            'transform': 'scale(1)'
        });

        window.requestAnimationFrame(moveBackground);
    }

    $(window).on('mousemove click', function(e) {

        var lMouseX = Math.max(-100, Math.min(100, $(window).width() / 2 - e.clientX));
        var lMouseY = Math.max(-100, Math.min(100, $(window).height() / 2 - e.clientY));
        lFollowX = (20 * lMouseX) / 100; // 100 : 12 = lMouxeX : lFollow
        lFollowY = (10 * lMouseY) / 100;

    });


  // AOS animation 

  if ($(window).width() > 768) {

      // main page

    $('.ishome .circle').attr('data-aos', 'zoom-in').attr('data-aos-duration', '1000').attr('data-aos-delay', '500');
    $('.ishome .dec_fig2').attr('data-aos', 'zoom-in').attr('data-aos-duration', '1000').attr('data-aos-delay', '800');
    $('.ishome .dec_fig').attr('data-aos', 'zoom-in').attr('data-aos-duration', '1000').attr('data-aos-delay', '1000');

      // about page

    $('.prog_title .title_wrap').attr('data-aos', 'fade-right').attr('data-aos-duration', '1500');
    $('.prog_title .img_wrap').attr('data-aos', 'flip-right').attr('data-aos-delay', '200').attr('data-aos-duration', '1000');
    $('.circles_wrap .wrap_for_circles .circle_around:nth-child(3)').attr('data-aos', 'zoom-in').attr('data-aos-delay', '600').attr('data-aos-duration', '1000');
    $('.circles_wrap .wrap_for_circles .circle_around:nth-child(2)').attr('data-aos', 'zoom-in').attr('data-aos-delay', '900').attr('data-aos-duration', '1000');
    $('.circles_wrap .wrap_for_circles .circle_around:nth-child(1)').attr('data-aos', 'zoom-in').attr('data-aos-delay', '1100').attr('data-aos-duration', '1000');
    $('.prog_title .img_wrap_all .circle_alone').attr('data-aos', 'zoom-in').attr('data-aos-delay', '1000').attr('data-aos-duration', '1000');
    $('.img_container:nth-child(1)').attr('data-aos', 'zoom-in').attr('data-aos-duration', '1000');
    $('.circles_descr .it1').attr('data-aos', 'fade-up').attr('data-aos-duration', '1000');
    $('.circles_descr .it2').attr('data-aos', 'fade-down').attr('data-aos-delay', '100').attr('data-aos-duration', '1000');
    $('.circles_descr .it3').attr('data-aos', 'fade-up').attr('data-aos-delay', '200').attr('data-aos-duration', '1000');
    $('.circles_descr .it4').attr('data-aos', 'fade-down').attr('data-aos-delay', '300').attr('data-aos-duration', '1000');
    $('.circles_descr .it5').attr('data-aos', 'fade-up').attr('data-aos-delay', '400').attr('data-aos-duration', '1000');
    $('.slider_accomp ').attr('data-aos', 'zoom-in').attr('data-aos-duration', '1000');
    $('.flat_examples_wrap .flat_simple').attr('data-aos', 'flip-left').attr('data-aos-duration', '1000');
    $('.flat_examples_wrap .flat_all').attr('data-aos', 'flip-right').attr('data-aos-duration', '1000');

      // mainplanirovki page

    $('.plan_title').attr('data-aos', 'fade-down').attr('data-aos-duration', '1500');
    $('.after_title').attr('data-aos', 'fade-up').attr('data-aos-delay', '200').attr('data-aos-duration', '1600');

      // buy condition page

    $('.cond_title').attr('data-aos', 'fade-down').attr('data-aos-duration', '1500');
    $('.cond_title_add').attr('data-aos', 'fade-up').attr('data-aos-delay', '200').attr('data-aos-duration', '1500');
    $('.list_rules .list:nth-child(1)').attr('data-aos', 'zoom-in').attr('data-aos-duration', '1500');
    $('.list_rules .list:nth-child(2)').attr('data-aos', 'zoom-in').attr('data-aos-delay', '400').attr('data-aos-duration', '1500');
    $('.list_rules .list:nth-child(3)').attr('data-aos', 'zoom-in').attr('data-aos-delay', '800').attr('data-aos-duration', '1500');
    $('.list_rules .list:nth-child(4)').attr('data-aos', 'zoom-in').attr('data-aos-delay', '1200').attr('data-aos-duration', '1500');
    $('.doc_type').attr('data-aos', 'flip-left').attr('data-aos-duration', '1000');
    $('.aft_doc').attr('data-aos', 'flip-left').attr('data-aos-duration', '1000');
    $('.but_wrap').attr('data-aos', 'flip-left').attr('data-aos-duration', '1000');
    $('.quotes_wrap').attr('data-aos', 'fade-down-right').attr('data-aos-duration', '1500');

      // advantages page

    $('.s_outside h2').attr('data-aos', 'fade-down').attr('data-aos-duration', '1500');
    $('.s_outside h3').attr('data-aos', 'fade-up').attr('data-aos-delay', '200').attr('data-aos-duration', '1500');
    $('.slider_adv1_init').attr('data-aos', 'zoom-in').attr('data-aos-duration', '2000');
    $('.s_infra h2').attr('data-aos', 'fade-down').attr('data-aos-duration', '1500');
    $('.ifr_item:nth-child(1)').attr('data-aos', 'flip-left').attr('data-aos-duration', '1500');
    $('.ifr_item:nth-child(2)').attr('data-aos', 'flip-left').attr('data-aos-delay', '400').attr('data-aos-duration', '1500');
    $('.ifr_item:nth-child(3)').attr('data-aos', 'flip-left').attr('data-aos-delay', '800').attr('data-aos-duration', '1500');
    $('.ifr_item:nth-child(4)').attr('data-aos', 'flip-left').attr('data-aos-delay', '1200').attr('data-aos-duration', '1500');
    $('.ifr_item:nth-child(5)').attr('data-aos', 'flip-left').attr('data-aos-delay', '1600').attr('data-aos-duration', '1500');
    $('.s_teritory h2').attr('data-aos', 'fade-down').attr('data-aos-duration', '1500');
    $('.ter_slide_wr').attr('data-aos', 'zoom-in-up').attr('data-aos-duration', '2000');

     // smart page

    $('.smart_title').attr('data-aos', 'fade-down').attr('data-aos-duration', '1500');
    $('.tabel').attr('data-aos', 'zoom-in-up').attr('data-aos-duration', '2000');
    $('.parag_img').attr('data-aos', 'flip-right').attr('data-aos-duration', '1500');
    $('.descr_l').attr('data-aos', 'fade-right').attr('data-aos-duration', '1500');

      // readyflat page

    $('.sect_descr .l_descr').attr('data-aos', 'fade-right').attr('data-aos-duration', '2000');
    $('.sect_descr .ready_img').attr('data-aos', 'flip-right').attr('data-aos-duration', '2000');
    $('.ready_main h3').attr('data-aos', 'fade-down').attr('data-aos-duration', '1500');
    $('.ready_main .ready_item').attr('data-aos', 'fade-down').attr('data-aos-duration', '1500');
    $('.design_ready h3').attr('data-aos', 'fade-right').attr('data-aos-duration', '1500');
    $('.design_ready .done_flat').attr('data-aos', 'flip-right').attr('data-aos-duration', '1500');

      // move decor circles on main page

    moveBackground();

  }


  var $windWidth = $(window).width();
  var paragPlan = '12 предл...'; // change this for main plan
  var flatTitle = $('.flat_type').text().substr(0, 3);
  var $menuItem = $('.nav_cnt > .menu-item');

  $('.nav_cnt').append('<div class="hide_menu"></div>');
  $('.nav_cnt').append('<div class="hide_menu1"></div>');
  // $('.nav_cnt').append('<div class="hide_menu2"></div>');

  if ($windWidth >= 1920) {
     $('.blue_sect_dec').css('background-size', 'cover');
  } 

  /*** main_news_cut **/

  var main_new = $('.main_news_descr .sub_des').text();
  var cut_txt = main_new.substr(0, 150);
  var cut_txt2 = main_new.substr(0, 90);

  if ($windWidth <= 1280) {
      $menuItem.slice(4).appendTo('.hide_menu');
      $('.slide_big').remove();
      $('.qotes_title').text('Есть возможность приобрести квартиру в рассрочку.');
      $('.s_smart > .smart_title').text('Преимущества "смарт квартиры" - ЖК Комфорт');
      $('.main_news_descr .sub_des').text(cut_txt + '...');
  } 

  if ($windWidth >= 1280) {
      $('.slide_medium').remove();
  } 

  if ($windWidth <= 1024) {
      $menuItem.slice(2).appendTo('.hide_menu');
      $('.s_prog_title > .blue_sect_dec').css('background-image', 'url(/wp-content/themes/wsf_start/app/img/decor_about.svg)');
      $('.form_title > p').text('Уточните детали у нашего менеджера');
      $('.main_news_descr .sub_des').text(cut_txt2 + '...');
      $('#infr_cut').text('обсл. организация');
  } 

  if ($windWidth >= 1024) {
      $('.s_prog_title > .blue_sect_dec').css('background-image', 'url(/wp-content/themes/wsf_start/app/img/sect_dec.png)');
      $('.slide_small').remove();
  } 

  if ($windWidth <= 768) {
  		$menuItem.slice(0, 1).appendTo('.hide_menu');
      $('.slide_medium').remove();
      $('.flat_link > p').html(paragPlan);
      $('.flat_type').html(flatTitle + '.'); 
      $('#infr_cut').text('обсл. организация');
      $(window).scroll(function(){
        if ($(this).scrollTop() > 200) {
          $('.isnohome .header').addClass('mob_head');
        } else {
          $('.isnohome .header').removeClass('mob_head');
        }
      });
  }

  if ($windWidth <= 570) {
      $menuItem.slice(0).appendTo('.hide_menu');
      $(window).scroll(function(){
      if ($(this).scrollTop() > 200) {
        $('.isnohome .header').addClass('mob_head');
      } else {
        $('.isnohome .header').removeClass('mob_head');
      }
    });
  }

  // sliders init

  var $main = $('.main-slider');

  $main.slick({
      slidesToShow: 1,
      slidesToScroll: 1,
      infinite: true,
      rows: 0,
      dots: true,
      customPaging: function(slider, i) {
          $(slider.$slides[i]).data();
          return '<button>' + '0' + (i + 1) + '</button>';
      },
      prevArrow: false,
      nextArrow: '<button type="button" class="slick-next"></button>',
      fade: true,
      cssEase: 'linear',
      speed: 500,
      autoplay: true,
      autoplaySpeed: 5000
  });

  $('.slider_news').slick({
      slidesToShow: 1,
      slidesToScroll: 1,
      infinite: false,
      prevArrow: '.new_pr',
      nextArrow: '.new_n',
      rows: 0,
      fade: true,
      cssEase: 'linear',
      speed: 500
  });

  $('.hod_stroyki_wrap .slider_all').slick({
      slidesToShow: 1,
      slidesToScroll: 1,
      infinite: false,
      prevArrow: '.str_p',
      nextArrow: '.str_n',
      rows: 0,
      fade: true,
      cssEase: 'linear',
      speed: 500
  });

  $('.slider_adv1_init').slick({
    slidesToScroll: 4,
    slidesToShow: 4,
    prevArrow: '.s_outside .slide_prev',
    nextArrow: '.s_outside .slide_next',
    infinite: false,
    responsive: [{
      breakpoint: 1280,
      settings: {
        slidesToShow: 3,
      }
    },
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3
      }
    },
    {
      breakpoint: 768,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3
      }
    },
    {
      breakpoint: 570,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    },
    ]
  });

  $('.ter_slide_wr').slick({
    slidesToScroll: 2,
    slidesToShow: 2,
    prevArrow: '.s_teritory .slide_prev',
    nextArrow: '.s_teritory .slide_next',
    infinite: true,
    responsive: [
    {
      breakpoint: 570,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    },
    ]
  });

  $('.slider_detals').slick({
      prevArrow: '.s_prog_about .slide_prev',
      nextArrow: '.s_prog_about .slide_next',
      infinite: false,
      responsive: [{
            breakpoint: 1280,
            settings: {
                slidesToShow: 1,
                row: 2
            }

        },
            {

                breakpoint: 1024,
                settings: {
                    slidesToShow: 1,
                    row: 1
                }
            },
            {

                breakpoint: 768,
                settings: {
                    slidesToShow: 1,
                    row: 1
                }
            },
        ]
    });


    $('.slider_accomp').slick({
        slidesToScroll: 4,
        slidesToShow: 4,
        prevArrow: '.s_accomplishment .slide_prev',
        nextArrow: '.s_accomplishment .slide_next',
        infinite: false,
        responsive: [{
            breakpoint: 1280,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 3
            }
        },
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2
                }
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            },
        ]
    });

    $('.slider_flats').slick({
        slidesToShow: 3,
        centerPadding: '80px',
        prevArrow: '.slide_prev',
        nextArrow: '.slide_next',
        infinite: false,
        responsive: [{
            breakpoint: 1280,
            settings: {
                slidesToShow: 2,
            }
        },
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 2,
                }
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 1,
                }
            },
        ]
    });

    $('.cond_slider').slick({
        slidesToShow: 3,
        prevArrow: '.cond_pr',
        nextArrow: '.cond_next',
        responsive: [{
            breakpoint: 1280,
            settings: {
                slidesToShow: 2,
            }
        },
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 2,
                }
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 1,
                }
            },
        ]
    });

  // slider navigation changes

  $('.slider_news').on('init reInit afterChange', function (event, slick, currentSlide, nextSlide) {
    var i = (currentSlide ? currentSlide : 0) + 1;
    if (i == 1) {
      $('.info_news_wrap .owl_nav .slide_prev').css('border-color', '#d6d8d9');
      $('.info_news_wrap .owl_nav .slide_prev > img').attr('src', '/wp-content/themes/wsf_start/app/img/hr_arr_l.svg');
    } else {
      $('.info_news_wrap .owl_nav .slide_prev > img').attr('src', '/wp-content/themes/wsf_start/app/img/orr_arr_left.svg');
      $('.info_news_wrap .owl_nav .slide_prev').css('border-color', '#f97b2d');
    }
    if (i == slick.slideCount) {
      $('.info_news_wrap .owl_nav .slide_next > img').attr('src', '/wp-content/themes/wsf_start/app/img/hr_arr_r.svg');
      $('.info_news_wrap .owl_nav .slide_next').css('border-color', '#d6d8d9');
    } else {
      $('.info_news_wrap .owl_nav .slide_next > img').attr('src', '/wp-content/themes/wsf_start/app/img/orr_arr_right.svg');
      $('.info_news_wrap .owl_nav .slide_next').css('border-color', '#f97b2d');
    }
    $('.curr_slide').text(i + '/' + slick.slideCount);
  });

  /*** HOD STROYKI SLIDE ***/ 

  $('.hod_stroyki_wrap .slider_all').on('init reInit afterChange', function (event, slick, currentSlide, nextSlide) {
    var i = (currentSlide ? currentSlide : 0) + 1;
    if (i == 1) {
      $('.hod_stroyki_wrap .owl_nav .slide_prev').css('border-color', '#d6d8d9');
      $('.hod_stroyki_wrap .owl_nav .slide_prev > img').attr('src', '/wp-content/themes/wsf_start/app/img/hr_arr_l.svg');
    } else {
      $('.hod_stroyki_wrap .owl_nav .slide_prev > img').attr('src', '/wp-content/themes/wsf_start/app/img/orr_arr_left.svg');
      $('.hod_stroyki_wrap .owl_nav .slide_prev').css('border-color', '#f97b2d');
    }
    if (i == slick.slideCount) {
      $('.hod_stroyki_wrap .owl_nav .slide_next > img').attr('src', '/wp-content/themes/wsf_start/app/img/hr_arr_r.svg');
      $('.hod_stroyki_wrap .owl_nav .slide_next').css('border-color', '#d6d8d9');
    } else {
      $('.hod_stroyki_wrap .owl_nav .slide_next > img').attr('src', '/wp-content/themes/wsf_start/app/img/orr_arr_right.svg');
      $('.hod_stroyki_wrap .owl_nav .slide_next').css('border-color', '#f97b2d');
    }
  });

  $('.slider_accomp').on('init reInit afterChange', function (event, slick, currentSlide, nextSlide) {
    var i = (currentSlide == 4 ? 2 : 1);
    var j = (currentSlide ? currentSlide : 0) + 1;
    var k = slick.slideCount - 3;

    if ($(window).width() < 1280) {
      k = slick.slideCount - 1;
      $('#all_sl').text('3');
      if (currentSlide == 3) {
        i = 2;
      } else if(currentSlide == 6) {
        i = 3
      } else {
        i = 1;
      }
    } 
     
    if ($(window).width() < 1024) {
      k = slick.slideCount - 1;
      $('#all_sl').text('4');
      if (currentSlide == 2) {
        i = 2;
      } else if(currentSlide == 4) {
        i = 3
      } else if(currentSlide == 6) {
        i = 4
      } else {
        i = 1;
      }
      
    }
    
    if ($(window).width() < 768) {
      $('#all_sl').text('8');
      k = slick.slideCount;
      i = j;
    }

    $('#change_numb').text(i);

    if (j == 1) {
      $('.s_accomplishment .owl_nav .slide_prev').css('border-color', '#d6d8d9');
      $('.s_accomplishment .owl_nav .slide_prev > img').attr('src', '/wp-content/themes/wsf_start/app/img/hr_arr_l.svg');
    } else {
      $('.s_accomplishment .owl_nav .slide_prev > img').attr('src', '/wp-content/themes/wsf_start/app/img/orr_arr_left.svg');
      $('.s_accomplishment .owl_nav .slide_prev').css('border-color', '#f97b2d');
    }
    if (j == k) {
      $('.s_accomplishment .owl_nav .slide_next > img').attr('src', '/wp-content/themes/wsf_start/app/img/hr_arr_r.svg');
      $('.s_accomplishment .owl_nav .slide_next').css('border-color', '#d6d8d9');
    } else {
      $('.s_accomplishment .owl_nav .slide_next > img').attr('src', '/wp-content/themes/wsf_start/app/img/orr_arr_right.svg');
      $('.s_accomplishment .owl_nav .slide_next').css('border-color', '#f97b2d');
    }
  });


  $('.slider_adv1_init').on('init reInit afterChange', function (event, slick, currentSlide, nextSlide) {
    var i = (currentSlide == 4 ? 2 : 1);
    var j = (currentSlide ? currentSlide : 0) + 1;
    var k = slick.slideCount - 3;

    if ($(window).width() < 1280) {
      k = slick.slideCount - 1;
      $('#all_sl').text('3');
      if (currentSlide == 3) {
        i = 2;
      } else if(currentSlide == 6) {
        i = 3
      } else {
        i = 1;
      }
    } 
     
    
    if ($(window).width() < 570) {
      $('#all_sl').text('8');
      k = slick.slideCount;
      i = j;
    }

    $('#change_numb').text(i);

    if (j == 1) {
      $('.s_outside .slide_prev').css('border-color', '#d6d8d9');
      $('.s_outside .slide_prev > img').attr('src', '/wp-content/themes/wsf_start/app/img/hr_arr_l.svg');
    } else {
      $('.s_outside .slide_prev > img').attr('src', '/wp-content/themes/wsf_start/app/img/orr_arr_left.svg');
      $('.s_outside .slide_prev').css('border-color', '#f97b2d');
    }
    if (j == k) {
      $('.s_outside .slide_next > img').attr('src', '/wp-content/themes/wsf_start/app/img/hr_arr_r.svg');
      $('.s_outside .slide_next').css('border-color', '#d6d8d9');
    } else {
      $('.s_outside .slide_next > img').attr('src', '/wp-content/themes/wsf_start/app/img/orr_arr_right.svg');
      $('.s_outside .slide_next').css('border-color', '#f97b2d');
    }
  });

  // about page - changes state for types of flats

   $('.triger_1').click(function() {
      if(!$('.triger_2').hasClass('active_trig')) { 
        $('.triger_2').addClass('active_trig');
        $(this).removeClass('active_trig');
        $('.flat_simple').css({'transform' : 'scale(1)', 'top' : '0', 'z-index' : '22'});
        $('.flat_all').css({'transform' : 'scale(0.9)', 'top' : '-50px', 'z-index' : '20'});
      } else {
       $('.triger_2').removeClass('active_trig');
        $(this).addClass('active_trig');
        $('.flat_simple').css({'transform' : 'scale(1)', 'top' : '0', 'z-index' : '22'});
        $('.flat_all').css({'transform' : 'scale(0.9)', 'top' : '-50px', 'z-index' : '20'}); 
      }
    
  });

  $('.triger_2').click(function() {
    if($('.triger_1').hasClass('active_trig')) { 
      $(this).addClass('active_trig');
      $('.triger_1').removeClass('active_trig');
      $('.flat_all').css({'transform' : 'scale(1)', 'top' : '0', 'z-index' : '22'});
      $('.flat_simple').css({'transform' : 'scale(0.9)', 'top' : '-50px', 'z-index' : '20'});
    }
  });

  // forms settings

  $('form :submit').on('click', function () {
      $('input:required').each(function () {
          if (!$(this).val()) $(this).addClass('incomplete');
      });
  });

  $('input:required').on('input', function () {
      $(this).removeClass('incomplete');
  });

  $('input[name=phone]').mask("+38 (999) 999-9999", {
      completed: function () {
          $(this).removeClass('incomplete');
      }
  });

  $('input[name=name]').on('input', function () {
      $(this).val($(this).val().replace(/[0-9\\/^$.|?*+\-_()]/g, ""));
  });

  // tables arrow change - smart page

  $('.addr').click(function() {

    if($(this).parent().find('.add_info_wrap').css('display') != 'none') {
      $(this).find('img').attr('src', '/wp-content/themes/wsf_start/app/img/svg/arr_d.svg');
    } else {
      $(this).find('img').attr('src', '/wp-content/themes/wsf_start/app/img/svg/arr_u.svg');
    }
    $(this).parent().find('.add_info_wrap').slideToggle();   
  })


  // POPUP 

  $('.popup-with-move-anim').magnificPopup({
    type: 'inline',

    fixedContentPos: false,
    fixedBgPos: true,

    overflowY: 'auto',

    closeBtnInside: true,
    preloader: false,
    
    midClick: true,
    removalDelay: 300,
    mainClass: 'my-mfp-slide-bottom'
  });

    $('.popup-with-zoom-anim').magnificPopup({
        type: 'inline',

        fixedContentPos: false,
        fixedBgPos: true,

        overflowY: 'auto',

        closeBtnInside: true,
        preloader: false,

        midClick: true,
        removalDelay: 300,
        mainClass: 'my-mfp-zoom-in'
    });

  // FORM CALL

  $('.input-container input').blur(function(event) {
    var inputVal = this.value;
    
    if (inputVal) {
      this.classList.add('value-exists');
    } else {
      this.classList.remove('value-exists');
    }
  });


  // SCROLL SMOOTH

  try {
    $.browserSelector();
    if($("html").hasClass("chrome")) {
      $.smoothScroll();
    }
  } catch(err) {

  }

  $("img, a").on("dragstart", function(event) { event.preventDefault(); });

  // scroll to menu

  $(window).scroll(function() {
    if ($(this).scrollTop() > $(this).height()) {
      $('.top').addClass('active');
    } else {
      $('.top').removeClass('active');
    }
  });

  $('.top').click(function() {
    $('html, body').stop().animate({scrollTop: 0}, 'slow', 'swing');
  });


  // AJAX request forms

    $('.form_select_flat').on('submit', function (e) {

        e.preventDefault();

        var $this = $(this);
        var type = $this.find('input:radio:checked').val() ? $this.find('input:radio:checked').val() : null;
        var min_square = $this.find('#min_square').val() ? $this.find('#min_square').val() : null;
        var max_square = $this.find('#max_square').val() ? $this.find('#max_square').val() : null;
        var money = $this.find('#money').val() ? $this.find('#money').val() : null;
        var phone = $this.find('#num').val() ? $this.find('#num').val() : null;

        $.ajax({
            type: "POST",
            url: '/wp-admin/admin-ajax.php',
            data: {
                action: 'flat_request',
                type: type,
                min_square: min_square,
                max_square: max_square,
                money: money,
                phone: phone,
                url: location.href
            },
            beforeSend: function () {
                $('.form_select_flat').fadeOut();
            },
            success: function () {
                $('.bottom_form_wrap .succes_bl').fadeIn();
            }
        });
    });

    $('.call1').on('submit', function (e) {

        e.preventDefault();

        $this = $(this);
        var name = $this.find('input[name="name"]').val() ? $this.find('input[name="name"]').val() : null;
        var phone = $this.find('input[name="phone"]').val() ? $this.find('input[name="phone"]').val() : null;
        var mail = $this.find('input[name="email"]').val() ? $this.find('input[name="email"]').val() : null;
        var question = $this.find('.question').val() ? $this.find('.question').val() : null;

        $.ajax({
            type: "POST",
            url: '/wp-admin/admin-ajax.php',
            data: {
                action: 'do_something',
                name: name,
                phone: phone,
                mail: mail,
                question: question,
                url: location.href
            },
            beforeSend: function () {
                $this.fadeOut();
            },
            success: function () {
                $('.pop_call .succes_pop').delay(500).fadeIn();
            }
        });
    });

    $('.cont_call').on('submit', function (e) {

        e.preventDefault();

        $this = $(this);
        var name = $this.find('input[name="name"]').val() ? $this.find('input[name="name"]').val() : null;
        var phone = $this.find('input[name="phone"]').val() ? $this.find('input[name="phone"]').val() : null;
        var mail = $this.find('input[name="email"]').val() ? $this.find('input[name="email"]').val() : null;
        var question = $this.find('.question').val() ? $this.find('.question').val() : null;

        $.ajax({
            type: "POST",
            url: '/wp-admin/admin-ajax.php',
            data: {
                action: 'do_something',
                name: name,
                phone: phone,
                mail: mail,
                question: question,
                url: location.href
            },
            beforeSend: function () {
                $this.fadeOut();
            },
            success: function () {
                $('.succes_bl').delay(500).fadeIn();
            }
        });
    });

    $('.call2').on('submit', function (e) {

        e.preventDefault();

        $this = $(this);
        var name = $this.find('input[name="name"]').val() ? $this.find('input[name="name"]').val() : null;
        var phone = $this.find('input[name="phone"]').val() ? $this.find('input[name="phone"]').val() : null;
        var mail = $this.find('input[name="email"]').val() ? $this.find('input[name="email"]').val() : null;
        var comment = $this.find('.comment').val() ? $this.find('.comment').val() : null;
        var subject = 'Подбор квартиры ' + $('.subject_form').data('name') + ' - ' + $('.subject_form').data('square');

        $.ajax({
            type: "POST",
            url: '/wp-admin/admin-ajax.php',
            data: {
                action: 'do_something_2',
                name: name,
                phone: phone,
                mail: mail,
                comment: comment,
                subject: subject,
                url: location.href
            },
            beforeSend: function () {
                $this.fadeOut();
            },
            success: function () {
                $('.pop_call2 .succes_pop').fadeIn();
            }
        });
    });


    $('.call2').on('submit', function (e) {

        e.preventDefault();

        $this = $(this);
        var name = $this.find('input[name="name"]').val() ? $this.find('input[name="name"]').val() : null;
        var phone = $this.find('input[name="phone"]').val() ? $this.find('input[name="phone"]').val() : null;
        var mail = $this.find('input[name="email"]').val() ? $this.find('input[name="email"]').val() : null;
        var comment = $this.find('.comment').val() ? $this.find('.comment').val() : null;
        var subject = 'Подбор квартиры ' + $('.subject_form').data('name') + ' - ' + $('.subject_form').data('square');

        $.ajax({
            type: "POST",
            url: '/wp-admin/admin-ajax.php',
            data: {
                action: 'do_something_2',
                name: name,
                phone: phone,
                mail: mail,
                comment: comment,
                subject: subject,
                url: location.href
            },
            beforeSend: function () {
                $this.fadeOut();
            },
            success: function () {
                $('.pop_call2 .succes_pop').fadeIn();
            }
        });
    });

});

$(window).on('load', function() {

    // hide preloader

    $('.loader-wrap').fadeOut();

    // init AOS animation

    AOS.init({
      once: true
    });

});

