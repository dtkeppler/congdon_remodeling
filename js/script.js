(function ($) {
	"use strict";

    //START PRELOADER

    $(window).load(function () {
        $('.preloader').fadeOut('slow');


    //START PROJECT

        // init Isotope
        var $grid = $('.grid').isotope({
            itemSelector: '.element-item',
            layoutMode: 'packery'
        });
        // init Isotope
        var $grid2 = $('.grid-2').isotope({
            layoutMode: 'packery',
            packery: {
                columnWidth: 0
            }
        });
        
        // filter functions
        var filterFns = {
            // show if number is greater than 50
            numberGreaterThan50: function () {
                var number = $(this).find('.number').text();
                return parseInt(number, 10) > 50;
            },
            // show if name ends with -ium
            ium: function () {
                var name = $(this).find('.name').text();
                return name.match(/ium$/);
            }
        };
        
        // bind filter button click
        $('.filters-button-group').on('click', 'button', function () {
            var filterValue = $(this).attr('data-filter');
            
            // use filterFn if matches value
            filterValue = filterFns[filterValue] || filterValue;
            $grid.isotope({ filter: filterValue });
            $grid2.isotope({ filter: filterValue });
        });

        // set selected class on button
        $('.button-group .button').on('click', function () {
            $(this).addClass('is-checked');
            $('.button').not(this).removeClass('is-checked');
        });

    /* ---------------------------------------- */
    // END PROJECT
    /* ---------------------------------------- */
        
    });// Window Load Function

    /* ---------------------------------------- */
    // START LOGO
    /* ---------------------------------------- */

    var windowWidth = $(window).width();
	function checkSize() {
        if (windowWidth >= 1600) {
            $('.navbar-brand').css({
                'position' : 'relative',
                'left'     : '-100%'
            });

            $('#page-index-2 .navbar-brand').css({
                'height': '150px',
                'margin-top': '-50px'
            });
        }
	}
	// When the page is loaded
	$(document).ready(function () {
        // Add a listener to check the size of the document when you load
        $(document).resize(checkSize);

        // Check the size now.
        checkSize();
	});

    /* ---------------------------------------- */
    // END LOGO
    /* ---------------------------------------- */

    /* ---------------------------------------- */
    // START NAVIATION / MOBILE MENU
    /* ---------------------------------------- */
    
    $('.navbar-toggle').on('click', function () {
        $('.navbar-expand').slideToggle();
    });
    $('.navbar-expand > ul > li').on('click', function () {
        $(this).children('ul').slideToggle();
        $(this).children('.arrow').find('i').toggleClass('fa-angle-down fa-angle-up');
    });




    /* ---------------------------------------- */
    // START NAVIATION
    /* ---------------------------------------- */

    /* ---------------------------------------- */
    // START SLIDER
    /* ---------------------------------------- */

	$('.slider-carousel').owlCarousel({
	    items: 1,
	    loop: true,
	    // autoplay:true,
	    smartSpeed: 450,
	    animateIn: 'fadeIn',
	    animateOut: 'fadeOut',
	    nav: true,
	    navText: ['<i class="fa fa-long-arrow-left"></i>', '<i class="fa fa-long-arrow-right"></i>']
	});
    setInterval(function () {
        var windowHeight = $(window).height(),
            sliderHeight = windowHeight - 150;
        $('#page-index-2 .single-slide').css({
            'height': Math.round(sliderHeight) + 'px'
        });
    }, 10);

    /* ---------------------------------------- */
    // END SLIDER
    /* ---------------------------------------- */
    
    /* ---------------------------------------- */
    // START KNOB
    /* ---------------------------------------- */
    function RXknob(RXknobClass) {
        RXknobClass = $(RXknobClass);
        RXknobClass.each(function () {
            var $this = $(this),
                knobVal = $this.attr('data-rel'),
                knobAnimate = function () {
                    $({
                        value: 0
                    }).animate({
                        value: knobVal
                    }, {
                        duration : 1000,
                        progress : function () {
                            $this.val(Math.ceil(this.value)).trigger('change');
                        }
                    });
                };

            $this.knob({
                'draw' : function () {
                    $(this.i).val(this.cv + '%').css('font-size', '12px').css('color', '#ffffff').css('font-family', 'Montserrat Light');
                }
            });

            $this.waypoint(knobAnimate, {
                offset: 'bottom-in-view',
                triggerOnce: !0
            });

        });
    }
    
    RXknob('.knob');
    
    $('#about .nav-tabs li').on('click', function () {
        RXknob('.knob');
    });

    /* ---------------------------------------- */
    // END CHART
    /* ---------------------------------------- */

    /* ---------------------------------------- */
    // START COUNTER
    /* ---------------------------------------- */

	$('.counter').counterUp({
	    delay: 10,
	    time: 1000
	});

    /* ---------------------------------------- */
    // END COUNTER
    /* ---------------------------------------- */



    /* ---------------------------------------- */
    // START VENOBOX
    /* ---------------------------------------- */
    $('a.venobox').venobox({
        numeratio: true
    });
    
    /* custom settings */
    $('.btn-icon').venobox({
        framewidth: '800px',        // default: ''
        frameheight: '500px',       // default: ''
        border: '0',             // default: '0'
        bgcolor: '#1b2932'           // default: false
    });
    /* ---------------------------------------- */
    // END VENOBOX
    /* ---------------------------------------- */

    /* ---------------------------------------- */
    // START ABOUT
    /* ---------------------------------------- */

	var aboutContentHeight = $('#about .container .row:last-child').height();
    if (windowWidth > 767) {
        // Selecting Row Height
		$('.process, .tab-content, .tab-trigger').css('height', aboutContentHeight);
		// Append Style in HTML Head via jQuery
		$('head').append('<style>.process::after{border-top:' + (aboutContentHeight / 2) + 'px solid #fff;border-bottom:' + (aboutContentHeight / 2) + 'px solid #fff;}</style>');
    }

    //  Page About 
    var containerWidth = $('.about2-content-bottom').width();
    $('head').append('<style>.about2-content-bottom::before{border-left:' + containerWidth + 'px solid transparent;border-bottom:' + 133 + 'px solid #fff;}</style>');
    $('head').append('<style>.about2-content-bottom::after{border-right:' + containerWidth + 'px solid transparent;border-top:' + 133 + 'px solid #fff;}</style>');

    /* ---------------------------------------- */
    // END ABOUT
    /* ---------------------------------------- */


    /* ---------------------------------------- */
    // START TEAM
    /* ---------------------------------------- */

    // Member Content Carousel
    var memberContentCarousel = $('.member-content-carousel');
	memberContentCarousel.owlCarousel({
	    items: 1,
	    loop: true,
	    smartSpeed: 450
	});

	// Member Image Carousel
    var memberImageCarousel = $('.member-image-carousel');
	memberImageCarousel.owlCarousel({
	    items: 1,
	    loop: true,
	    smartSpeed: 450,
        autoplay: true,
	    nav: true,
	    navText: ['<i class="fa fa-long-arrow-left"></i>', '<i class="fa fa-long-arrow-right"></i>']
	});

    memberContentCarousel.on('translate.owl.carousel', function (property) {
        $('.member-image-carousel .owl-dot:eq(' + property.page.index + ')').click();
    });
    memberImageCarousel.on('translate.owl.carousel', function (property) {
        $('.member-content-carousel .owl-dot:eq(' + property.page.index + ')').click();
    });

    /* ---------------------------------------- */
    // END TEAM
    /* ---------------------------------------- */

    /* ---------------------------------------- */
    // START CLIENT
    /* ---------------------------------------- */

    // Client Carousel
	$('.client-carousel').owlCarousel({
	    loop: true,
	    margin: 60,
	    smartSpeed: 450,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 3
            },
            992: {
                items: 5
            }
        }
	});

    /* ---------------------------------------- */
    // END CLIENT
    /* ---------------------------------------- */

    /* ---------------------------------------- */
    // START REVIEW
    /* ---------------------------------------- */

    // Review Text Slider
    var reviewTextSlider = $('.review-text-slider');
    reviewTextSlider.owlCarousel({
        items: 1,
        loop: true,
        smartSpeed: 450
    });

    // Review Image Slider
    var reviewImageSlider = $('.review-image-slider');
    reviewImageSlider.owlCarousel({
        items: 3,
        loop: true,
        center: true,
        smartSpeed: 450,
        nav: true,
        navText: ['<i class="fa fa-long-arrow-left"></i>', '<i class="fa fa-long-arrow-right"></i>']
    });

    reviewTextSlider.on('translate.owl.carousel', function (property) {
        $('.review-image-slider .owl-dot:eq(' + property.page.index + ')').click();
    });
    reviewImageSlider.on('translate.owl.carousel', function (property) {
        $('.review-text-slider .owl-dot:eq(' + property.page.index + ')').click();
    });

    var reviewerCenterImage = function reviewerCenterImage() {
        $('.review-image-slider .owl-item.active.center').prev().addClass('prev-item');
        $('.review-image-slider .owl-item.active.center').next().addClass('next-item');
        $('.review-image-slider .owl-item img').css('overflow', 'hidden');
    };
	reviewerCenterImage();
	
    reviewImageSlider.on('translate.owl.carousel', function () {
        $('.owl-item').removeClass('prev-item next-item');
        $('.review-image-slider .owl-item img').css('overflow', 'initial');
    }).on('translated.owl.carousel', reviewerCenterImage);
    
	var $height = $('.review-image-slider').width() / 3;
	$('.review-image-slider .reviewer-image').css('height', $height + 10 + 'px');

    /* ---------------------------------------- */
    // END REVIEW
    /* ---------------------------------------- */


})(jQuery);