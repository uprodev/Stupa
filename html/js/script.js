
jQuery(document).ready(function ($) {

  
  /*scroll left*/
  if($('.img-scroll').length >0){
    gsap.registerPlugin(ScrollTrigger);

    let sections = gsap.utils.toArray(".img-scroll .item");


    if(window.innerWidth > 990){
      gsap.to(sections, {
        xPercent: -100 * (sections.length - 3),
        ease: "none",
        scrollTrigger: {
          trigger: ".img-scroll .content",
          pin: true,
          scrub: 1,
          snap: 1 / (sections.length - 1),
          // base vertical scrolling on how wide the container is so it feels more natural.
          end: () => "+=" + document.querySelector(".img-scroll .content").offsetWidth
        }
      });
    }else{
      gsap.to(sections, {
        xPercent: -100 * (sections.length - 0.85),
        ease: "none",
        scrollTrigger: {
          trigger: ".img-scroll .content",
          pin: true,
          scrub: 1,
          snap: 1 / (sections.length - 1),
          // base vertical scrolling on how wide the container is so it feels more natural.
          end: () => "+=" + document.querySelector(".img-scroll .content").offsetWidth
        }
      });
    }


  }


 /* animations*/
  if(window.innerWidth > 767){
    if($('.anim-img').length >0){
      $(window).scroll(function () {
        let top = $('.anim-img').offset().top,
          win = $(window).scrollTop();

        if(win > top - 100){
          $('.anim-img').addClass('is-top')
        }else{
          $('.anim-img').removeClass('is-top')
        }
      })
    }
  }




  $('select').niceSelect();

  /* mob-menu*/
  $(document).on('click', '.open-menu a', function (e){
    e.preventDefault();
    $(this).toggleClass('is-open')

    if($(this).hasClass('is-open')){
      $.fancybox.open( $('#menu-responsive'), {
        touch:false,
        autoFocus:false,
        beforeShow:function (e){
          $('html').addClass('is-bg');
        },
        beforeClose: function (e){
          $('html').removeClass('is-menu');
        },
        afterClose: function (e){
          $('html').removeClass('is-bg');
        },
      });

      setTimeout(function() {
        $('html').addClass('is-menu');

      }, 100);
    }else{
      $('html').removeClass('is-menu');
      $.fancybox.close();
    }

  });

  //scroll to block

  $(document).on('click', '.scroll', function (e) {
    e.preventDefault();
    var id  = $(this).attr('href'),
      top = $(id).offset().top;
    $('body,html').animate({scrollTop: top}, 1000);
  });

  /*sub menu*/
  $(document).on('click', '.sub a', function (e) {
    e.preventDefault();
   $(this).toggleClass('is-open')
    if($(this).hasClass('is-open')){
      $(this).siblings('ul').slideDown();
    }else{
      $(this).siblings('ul').slideUp();
    }
  });


  /*slider*/
  var swiperImg = new Swiper(".slider-img", {
    slidesPerView: "auto",
    spaceBetween: 20,

    navigation: {
      nextEl: ".img-next",
      prevEl: ".img-prev",
    },
    breakpoints: {
      320: {
        spaceBetween: 10,
      },
      576: {
        spaceBetween: 20,
      },
    },
  });

 /* animations*/
  AOS.init({
    disable: 'mobile', // accepts following values: 'phone', 'tablet', 'mobile', boolean, expression or function
  });

 /* slider*/
  var swiperRecommend = new Swiper(".recommend-slider", {
    slidesPerView: "auto",
    spaceBetween: 50,
    navigation: {
      nextEl: ".recommend-next",
      prevEl: ".recommend-prev",
    },
    breakpoints: {
      320: {
        spaceBetween: 10,
        slidesPerView: 1,
      },
      480: {
        spaceBetween: 20,
        slidesPerView: "auto",
      },
      1200: {
        spaceBetween: 40,
        slidesPerView: "auto",
      },
      1500: {
        spaceBetween: 50,
        slidesPerView: "auto",
      },
    }
  });

  /*slider*/


  let step,
      total = $('.hotels-content .item').length;

  for (step = 1; step < total; step++) {

    var swiperMini$step = new Swiper(".slider-min-img-"+step, {
      pagination: {
        el: ".min-img-pagination-"+step,
        clickable: true,
      },
    });
  }

  //MOVE BACKGROUND

  var lFollowX = 0,
    lFollowY = 0,
    x = 0,
    y = 0,
    friction = 1 / 30;

  function moveBackground() {
    x += (lFollowX - x) * friction;
    y += (lFollowY - y) * friction;

    translate = 'translate(' + x + 'px, ' + y + 'px) scale(1.1)';

    $('.home-banner .bg img').css({
      '-webit-transform': translate,
      '-moz-transform': translate,
      'transform': translate
    });

    window.requestAnimationFrame(moveBackground);
  }

  $(window).on('mousemove click', function(e) {

    var lMouseX = Math.max(-100, Math.min(100, $(window).width() / 2 - e.clientX));
    var lMouseY = Math.max(-100, Math.min(100, $(window).height() / 2 - e.clientY));
    lFollowX = (20 * lMouseX) / 100; // 100 : 12 = lMouxeX : lFollow
    lFollowY = (10 * lMouseY) / 100;

  });

  moveBackground();



  /*stupa hover*/

  $(".product .info ul li").hover(function(e) {
    let item = $(this).index() + 2;
    $('.product figure>div').addClass('item-'+item);
  }, function() {
    $('.product figure>div').removeClass();
  });
});


