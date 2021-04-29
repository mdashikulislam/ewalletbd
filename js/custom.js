(function($) {

    "use strict";

    // caching selectors
    var mainWindow           = $(window),
        mainHeader           = $('.logo-nav-col'),
        mainBody             = $('body'),
        mainStatus           = $('#status'),
        sfMenuExample        = jQuery("#sf-example"),
        popularCourse        = $('.popular-course-carousel'),
        counter              = $('.counter'),
        teacherCarousel      = $('.teacher-carousel'),
        accordionToggle      = $('.accordion-toggle'),
        defaultCarousel      = $('.slider-carousel-col'),
        Clock                = $('#simply-countdown-losange'),
        testPopUp            = $('.test-popup-link'),
        scrollToUp           = $('.scrollup'),
        sfMenu               = jQuery(".sf-menu"),
        testMonialCarousel   = $('.main-carousel'),
        partnerCarousel      = $('.partner-carousel');

    mainWindow.on('load', function() {
         // Superfish Menu
        sfMenuExample.superfish({
            pathLevels: 1,
            delay: 1000,
            animation: {opacity: 'show'},
            animationOut: {opacity: 'hide'},
            speed: 'fast',
            speedOut: 'fast',
            cssArrows: true,
            disableHI: false,
        });
        
        //Sticky header
         mainWindow.on("scroll", function() {
            if ($(this).scrollTop() > 98){  
                mainHeader.addClass("sticky");
                mainBody.addClass("sticky");
                scrollToUp.show();
            }
            else{
                mainHeader.removeClass("sticky");
                mainBody.addClass("sticky");
                scrollToUp.hide();
            }
        });
         //Super-Fish  Menu
        sfMenu.slicknav({
            delay:       1000,                            // one second delay on mouseout
            animation:   {opacity:'show', height:'show'},  // fade-in and slide-down animation
            speed:       'fast',                          // faster animation speed
            autoArrows:  false
        });
        //Default Slider
        defaultCarousel.owlCarousel({
            loop: true,
            autoplay: true,
            dots: true,
            responsiveClass: true,
            navText: [
                '<i class="fa fa-arrow-left"></i>',
                '<i class="fa fa-arrow-right"></i>'
            ],
            responsive: {
                0: {
                    items: 1,
                    nav: true
                },
                600: {
                    items: 1,
                    nav: true
                },
                1000: {
                    items: 1,
                    nav: true,
                    loop: true
                }
            }
        });

        //Slider Animation Script
        defaultCarousel.on('translate.owl.carousel', function () {
            $('.text-item h2').removeClass('fadeInDown animated').hide();
            $('.text-item h3').removeClass('fadeInUp animated').hide();
            $('.text-col .button').addClass('fadeInLeft animated').hide();
        });

        defaultCarousel.on('translated.owl.carousel', function () {
            $('.text-item h2').addClass('fadeInDown animated').show();
            $('.text-item h3').addClass('fadeInUp animated').show();
            $('.text-col .button').addClass('fadeInLeft animated').show();
        });
        // Popular Crousel
        popularCourse.owlCarousel({
            loop: true,
            autoplay: true,
            dots: false,
            navigation:true, 
            responsiveClass: true,
            margin: 25,
            navText: [
                '<i class="fa fa-angle-left"></i>',
                '<i class="fa fa-angle-right"></i>'
            ],
            responsive: {
                0: {
                    items: 1,
                    nav: false,
                    dots: true

                },
                600: {
                    items: 2,
                    nav: false,
                    dots: true
                },
                992: {
                    items: 4,
                    nav: true,
                    loop: true,
                    dots: false,
                },               
                1000: {
                    items: 4,
                    nav: true,
                    loop: true,
                    dots: false
                }
            }
        });

        // Teacher Crousel
        teacherCarousel.owlCarousel({
            loop: true,
            autoplay: true,
            dots: true,
            navigation:false, 
            responsiveClass: true,
            margin: 25,
            navText: [
                '<i class="fa fa-angle-left"></i>',
                '<i class="fa fa-angle-right"></i>'
            ],
            responsive: {
                0: {
                    items: 1,
                    nav: false,
                    dots: true

                },
                600: {
                    items: 2,
                    nav: false,
                    dots: true
                },
                992: {
                    items: 4,
                    nav: false,
                    loop: true,
                    dots: true
                },               
                1000: {
                    items: 4,
                    nav: false,
                    loop: true,
                    dots: true
                }
            }
        });

         // Counter Script
        counter.counterUp({
         delay: 10,
         time: 1000
        });

         // accordian
        accordionToggle.on('click', function(){
            $(this).closest('.panel-group').children().each(function(){
            $(this).find('>.panel-heading').removeClass('active');
             });
            $(this).closest('.panel-heading').toggleClass('active');
        });
        //magnificPopup
        testPopUp.magnificPopup({
            type: 'image',
            gallery: {
            enabled: true
            },
        });
        // Testimonial Crousel
        testMonialCarousel.owlCarousel({
            loop: true,
            autoplay: true,
            dots: true,
            navigation:false, 
            responsiveClass: false,
            margin: 25,
            navText: [
                '<i class="fa fa-angle-left"></i>',
                '<i class="fa fa-angle-right"></i>'
            ],
            responsive: {
                0: {
                    items: 1,
                    nav: false,
                    dots: true

                },
                600: {
                    items: 2,
                    nav: false,
                    dots: true
                },
                992: {
                    items: 1,
                    nav: false,
                    loop: true,
                    dots: true,
                },               
                1000: {
                    items: 1,
                    nav: false,
                    loop: true,
                    dots: true
                }
            }
        });
        // partner Crousel
        partnerCarousel.owlCarousel({
            loop: true,
            autoplay: true,
            dots: false,
            navigation:false, 
            responsiveClass: false,
            margin: 25,
            navText: [
                '<i class="fa fa-angle-left"></i>',
                '<i class="fa fa-angle-right"></i>'
            ],
            responsive: {
                0: {
                    items: 1,
                    loop: true
                },
                600: {
                    items: 3,
                    loop: true
                },
                992: {
                    items: 3,
                    loop: true
                },               
                1000: {
                    items: 5,
                    loop: true
                }
            }
        });

        //scrollTop
        mainWindow.on("scroll",function() {
            if ($(this).scrollTop() > 100) {
                scrollToUp.fadeIn();
            }else {
                scrollToUp.fadeOut();
            }
        });

        scrollToUp.on("click",function() {
            $("html, body").animate({
                scrollTop: 0
            }, 600);
            return false;
        });

        var d = new Date();
        d.setDate(d.getDate() + 30);
        Clock.simplyCountdown({
            year: d.getFullYear(),
            month: d.getMonth() + 1,
            day: d.getDate(),
            enableUtc: false
        });
        

    });

})(jQuery);