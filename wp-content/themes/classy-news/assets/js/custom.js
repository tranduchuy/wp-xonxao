jQuery(function($) {

    /* -----------------------------------------
    Preloader
    ----------------------------------------- */
    $('#preloader').delay(1000).fadeOut();
    $('#loader').delay(1000).fadeOut("slow");

    /*--------------------------------------------------------------
    # Banner Slider
    --------------------------------------------------------------*/

    $('.banner-slider').slick({
        slidesToShow: 1,
        dots: false,
        infinite: true,
        arrows: true,
        adaptiveHeight: true,
        nextArrow: '<button class="adore-arrow slide-next fas fa-angle-double-right"></button>',
        prevArrow: '<button class="adore-arrow slide-prev fas fa-angle-double-left"></button>',
    });
    
    /* -----------------------------------------
    Post Carousel
    ----------------------------------------- */
    
    $('.four-column.carousel-wrapper').slick({
        autoplay: false,
        autoplaySpeed: 3000,
        dots: false,
        arrows: true,
        adaptiveHeight: true,
        slidesToShow: 4,
        nextArrow: '<button class="adore-arrow slide-next fas fa-angle-double-right"></button>',
        prevArrow: '<button class="adore-arrow slide-prev fas fa-angle-double-left"></button>',
        responsive: [{
            breakpoint: 1025,
            settings: {
                slidesToShow: 4,
            }
        },
        {
            breakpoint: 600,
            settings: {
                slidesToShow: 2,
            }
        },
        {
            breakpoint: 480,
            settings: {
                slidesToShow: 1,
            }
        }
        ]
    });
    $('.three-column.carousel-wrapper').slick({
        autoplay: false,
        autoplaySpeed: 3000,
        dots: false,
        arrows: true,
        adaptiveHeight: true,
        slidesToShow: 3,
        nextArrow: '<button class="adore-arrow slide-next fas fa-angle-double-right"></button>',
        prevArrow: '<button class="adore-arrow slide-prev fas fa-angle-double-left"></button>',
        responsive: [{
            breakpoint: 1025,
            settings: {
                slidesToShow: 3,
            }
        },
        {
            breakpoint: 600,
            settings: {
                slidesToShow: 2,
            }
        },
        {
            breakpoint: 480,
            settings: {
                slidesToShow: 1,
            }
        }
        ]
    });
    $('.two-column.carousel-wrapper').slick({
        autoplay: false,
        autoplaySpeed: 3000,
        dots: false,
        arrows: true,
        adaptiveHeight: true,
        slidesToShow: 2,
        nextArrow: '<button class="adore-arrow slide-next fas fa-angle-double-right"></button>',
        prevArrow: '<button class="adore-arrow slide-prev fas fa-angle-double-left"></button>',
        responsive: [{
            breakpoint: 1025,
            settings: {
                slidesToShow: 2,
            }
        },
        {
            breakpoint: 600,
            settings: {
                slidesToShow: 2,
            }
        },
        {
            breakpoint: 480,
            settings: {
                slidesToShow: 1,
            }
        }
        ]
    });
    $('.one-column.carousel-wrapper').slick({
        autoplay: false,
        autoplaySpeed: 3000,
        dots: false,
        arrows: true,
        adaptiveHeight: true,
        slidesToShow: 1,
        nextArrow: '<button class="adore-arrow slide-next fas fa-angle-double-right"></button>',
        prevArrow: '<button class="adore-arrow slide-prev fas fa-angle-double-left"></button>',
    });

    /* -----------------------------------------
    Tabs
    ----------------------------------------- */
    $('.post-tabs-wrapper').each(function(index) {
        $(this).find('.post-tab-container:not(:first-child)').hide();
        $(this).find('.post-tabs li:not(:first-child) a').addClass('inactive');
    });
    $('.post-tabs li a').click(function() {
        var t = $(this).attr('href');
        $(this).closest('.post-tabs-wrapper').find('.post-tabs li a').addClass('inactive');
        $(this).removeClass('inactive');
        $(this).closest('.post-tabs-wrapper').find('.post-tab-container').hide();
        $(this).closest('.post-tabs-wrapper').find(t).fadeIn('slow');
        return false;
    });

    /*--------------------------------------------------------------
    # Navigation menu responsive
    --------------------------------------------------------------*/
    $(document).ready(function(){
        $(".menu-toggle").click(function(){
            $(".main-navigation .nav-menu").slideToggle(500, function() {
                if ($(this).css('display') == 'none') {
                    // Remove inline class
                    $(this).css('display', '');
                }
            });
        });
    });
    $(window).on('load resize', function() {
        if ($(window).width() < 1200) {
            $('.main-navigation').find("li").last().bind('keydown', function(e) {
                if (e.which === 9) {
                    e.preventDefault();
                    $('#masthead').find('.menu-toggle').focus();
                }
            });
        } else {
            $('.main-navigation').find("li").unbind('keydown');
        }
    });

    var primary_menu_toggle = $('#masthead .menu-toggle');
    primary_menu_toggle.on('keydown', function(e) {
        var tabKey = e.keyCode === 9;
        var shiftKey = e.shiftKey;

        if (primary_menu_toggle.hasClass('open')) {
            if (shiftKey && tabKey) {
                e.preventDefault();
                $('.main-navigation').toggleClass('toggled');
                primary_menu_toggle.removeClass('open');
            };
        }
    });
    /*--------------------------------------------------------------
    # Navigation Search
    --------------------------------------------------------------*/

    var searchWrap = $('.navigation-search-wrap');
    $(".navigation-search-icon").click(function(e) {
        e.preventDefault();
        searchWrap.toggleClass("show");
        searchWrap.find('input.search-field').focus();
    });
    $(document).click(function(e) {
        if (!searchWrap.is(e.target) && !searchWrap.has(e.target).length) {
            $(".navigation-search-wrap").removeClass("show");
        }
    });

    $('.navigation-search-wrap').find(".search-submit").bind('keydown', function(e) {
        var tabKey = e.keyCode === 9;
        if (tabKey) {
            e.preventDefault();
            $('.navigation-search-icon').focus();
        }
    });

    $('.navigation-search-icon').on('keydown', function(e) {
        var tabKey = e.keyCode === 9;
        var shiftKey = e.shiftKey;
        if ($('.navigation-search-wrap').hasClass('show')) {
            if (shiftKey && tabKey) {
                e.preventDefault();
                $('.navigation-search-wrap').removeClass('show');
                $('.navigation-search-icon').focus();
            }
        }
    });
    /* -----------------------------------------
    Marquee
    ----------------------------------------- */
    $(document).ready(function(){
        $("ul#newstick").endlessRiver({
            speed: 100
        });
    });

    /* -----------------------------------------
    Scroll Top
    ----------------------------------------- */
    var scrollToTopBtn = $('.classy-news-scroll-to-top');

    $(window).scroll(function() {
        if ($(window).scrollTop() > 400) {
            scrollToTopBtn.addClass('show');
        } else {
            scrollToTopBtn.removeClass('show');
        }
    });

    scrollToTopBtn.on('click', function(e) {
        e.preventDefault();
        $('html, body').animate({
            scrollTop: 0
        }, '300');
    });

});