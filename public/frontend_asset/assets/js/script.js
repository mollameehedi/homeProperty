$(function () {
    'use strict';

    //  Form Validation
    window.addEventListener('load', function() {
        var forms = document.getElementsByClassName('needs-validation');
        var validation = Array.prototype.filter.call(forms, function(form) {
          form.addEventListener('submit', function(event) {
            if (form.checkValidity() === false) {
              event.preventDefault();
              event.stopPropagation();
            }
            form.classList.add('was-validated');
          }, false);
        });
    }, false);

    //  Fixed Header
    $(window).scroll(function () {
        let scrolling = $(this).scrollTop();

        if (scrolling > 110) {
            $(".header").addClass("header--fixed");
        } else {
            $(".header").removeClass("header--fixed");
        }
    });

    // scroll top
    $(".scroll-top").click(function () {
        $("html,body").animate({
            scrollTop: 0,
        }, 50);
    });
    $(window).scroll(function () {
        var scrolling = $(this).scrollTop();

        if (scrolling > 200) {
            $(".scroll-top").fadeIn();
        } else {
            $(".scroll-top").fadeOut();
        }
    });

    // veno box
    $('.venobox').venobox({
      bgcolor: '#ffffff',
      spinner: 'three-bounce',
    });

    //  Banner slider
    $(".banner__slider").slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 6000,
        fade: true,
        cssEase: 'linear',
        speed: 600,
        arrows: true,
        prevArrow:'<i class="fas fa-chevron-left slick__arrows slick__arrows--left"></i>',
        nextArrow:'<i class="fas fa-chevron-right slick__arrows slick__arrows--right"></i>',
        dots: false,
        pauseOnHover: false,
        pauseOnFocus: false,
        infinite: true,
        responsive: [
            {
              breakpoint: 600,
              settings: {
                dots: true,
                arrows: false,
              }
            }
        ]
    });

    //  Watch Video slider
    $(".watch__slider").slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 4000,
        speed: 550,
        centerMode: true,
        centerPadding: '0',
        arrows: false,
        dots: false,
        pauseOnHover: false,
        pauseOnFocus: false,
        infinite: true,
        responsive: [
            {
              breakpoint: 767,
              settings: {
                slidesToShow: 1,
                centerMode: false,
              }
            },
        ]
    });

     //  Testimonials slider
     $(".testimonials__slider").slick({
      slidesToShow: 3,
      slidesToScroll: 1,
      autoplay: true,
      autoplaySpeed: 4500,
      speed: 500,
      centerMode: true,
      centerPadding: '0',
      arrows: false,
      dots: false,
      pauseOnHover: false,
      pauseOnFocus: false,
      infinite: true,
      responsive: [
          {
            breakpoint: 992,
            settings: {
              slidesToShow: 2,
            }
          },
          {
            breakpoint: 576,
            settings: {
              slidesToShow: 1,
            }
          },
        ]
     });

    // Closes responsive menu when a scroll link is clicked
    $('.nav-link').on('click', function () {
        $('.navbar-collapse').collapse('hide');
        $(".navbar-toggler").removeClass("hide");
    });

});