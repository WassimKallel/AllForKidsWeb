'use strict';

// ---------------------------------------------------------------------------------------
// Multi Level Drowpdown Menu Start
$(function () {
    $(".dropdown-menu > li > a.dropdown-toggle").on("click", function (e) {
        var current = $(this).next();
        var grandparent = $(this).parent().parent();
        if ($(this).hasClass('left-caret') || $(this).hasClass('right-caret'))
            $(this).toggleClass('right-caret left-caret');
        grandparent.find('.left-caret').not(this).toggleClass('right-caret left-caret');
        grandparent.find(".sub-menu:visible").not(current).hide();
        current.toggle();
        e.stopPropagation();
    });
    $(".dropdown-menu > li > a:not(.dropdown-toggle)").on("click", function () {
        var root = $(this).closest('.dropdown');
        root.find('.left-caret').toggleClass('right-caret left-caret');
        root.find('.sub-menu:visible').hide();
    });
});
// Multi Level Drowpdown Menu End
// ---------------------------------------------------------------------------------------

// ---------------------------------------------------------------------------------------
// Mega Drowpdown Menu Start
jQuery(document).ready(function () {
    if (window.matchMedia('(min-width: 768px)').matches) {
        $(".dropdown").hover(
                function () {
                    $('.dropdown-menu', this).stop(true, true).slideDown("fast");
                },
                function () {
                    $('.dropdown-menu', this).stop(true, true).slideUp("fast");
                }
        );
        // SUBSCRIBE NEWSLETTER
        $(".subscribe-me").subscribeBetter({
            trigger: "onload",
            delay: 5000
        });
    }

    if (window.matchMedia('(max-width: 767px)').matches) {
        $(".mega-dropdown").hover(
                function () {
                    $('.dropdown-menu', this).stop(true, true).slideDown("fast");
                },
                function () {
                    $('.dropdown-menu', this).stop(true, true).slideUp("fast");
                }
        );
    }

});

// Mega Drowpdown Menu End
// ---------------------------------------------------------------------------------------



jQuery(document).ready(function () {

    // Preloader
    $(window).bind("load", function () {
        $('#preloader').delay(1000).fadeOut(200);

    });

    var interval = null;

    interval = setInterval(function () {
        if ($("body:has(#preloader)")) {
            var babyclass = document.getElementsByClassName("baby");
            if (babyclass.length) {
                babyclass[0].classList.toggle('down');
            }
        }
    }, 500);


    // Sticky Header
    $(window).scroll(function () {
        if (window.matchMedia('(min-width: 767px)').matches) {
            if (!(jQuery('body > main ').hasClass('header-style-wrap'))) {
                if ($(this).scrollTop() > 1) {
                    $('.header-wrapper').addClass("sticky-header");
                }
                else {
                    $('.header-wrapper').removeClass("sticky-header");
                }
            }
        }
    });


    // ---------------------------------------------------------------------------------------
    // Scroll To Top Start

    $(window).scroll(function () {
        if ($(this).scrollTop() > 100) {
            $('.to-top').fadeIn();
        } else {
            $('.to-top').fadeOut();
        }
    });
    //Click event to scroll to top
    $('.to-top').click(function () {
        $('html, body').animate({scrollTop: 0}, 800);
        return false;
    });

    //Scroll To Top End
    // ---------------------------------------------------------------------------------------


    // ---------------------------------------------------------------------------------------
    // Product Slider Start

    jQuery(".product-slider.related-product").owlCarousel({
        autoPlay: true, //Set AutoPlay to 3 seconds
        items: 3,
        itemsDesktop: [1199, 3],
        itemsTablet: [1024, 2],
        itemsTabletSmall: [768, 2],
        itemsMobile: [480, 1]
    });
    jQuery(".verticle-tabination .product-slider").owlCarousel({
        autoPlay: true, //Set AutoPlay to 3 seconds
        items: 3,
        itemsDesktop: [1199, 3],
        itemsTablet: [1024, 3],
        itemsTabletSmall: [767, 2],
        itemsMobile: [480, 1]
    });
    jQuery(".product-slider").owlCarousel({
        autoPlay: true, //Set AutoPlay to 3 seconds
        items: 4,
        itemsDesktop: [1199, 4],
        itemsTablet: [1024, 3],
        itemsTabletSmall: [767, 2],
        itemsMobile: [480, 1]
    });

    jQuery(".product-slide.next").click(function () {
        jQuery(".product-slider").trigger('owl.next');
    });
    jQuery(".product-slide.prev").click(function () {
        jQuery(".product-slider").trigger('owl.prev');
    });
    // Product Slider End
    // ---------------------------------------------------------------------------------------


    // ---------------------------------------------------------------------------------------
    // Top Rated Slider Start

    jQuery(".top-rated-owl-slider").owlCarousel({
        autoPlay: true, //Set AutoPlay to 3 seconds
        items: 1,
        itemsDesktop: [1199, 1],
        itemsTablet: [1024, 1],
        itemsTabletSmall: [767, 2],
        itemsMobile: [480, 1]
    });
    jQuery(".top-rated .next").click(function () {
        jQuery(".top-rated-owl-slider").trigger('owl.next');
    });
    jQuery(".top-rated .prev").click(function () {
        jQuery(".top-rated-owl-slider").trigger('owl.prev');
    });

    // Top Rated Slider End
    // ---------------------------------------------------------------------------------------


    // ---------------------------------------------------------------------------------------
    // Best Seller Slider Start
    jQuery(".best-sellers-owl-slider").owlCarousel({
        autoPlay: true, //Set AutoPlay to 3 seconds
        items: 1,
        itemsDesktop: [1199, 1],
        itemsTablet: [1024, 1],
        itemsTabletSmall: [767, 2],
        itemsMobile: [480, 1]
    });
    jQuery(".best-sellers-slider .next").click(function () {
        jQuery(".best-sellers-owl-slider").trigger('owl.next');
    });
    jQuery(".best-sellers-slider .prev").click(function () {
        jQuery(".best-sellers-owl-slider").trigger('owl.prev');
    });

    // Best Seller Slider End
    // ---------------------------------------------------------------------------------------


    // ---------------------------------------------------------------------------------------
    // Popular Items Slider Start

    jQuery(".popular-items-owl-slider").owlCarousel({
        autoPlay: true, //Set AutoPlay to 3 seconds
        items: 1,
        itemsDesktop: [1199, 1],
        itemsTablet: [1024, 1],
        itemsTabletSmall: [767, 2],
        itemsMobile: [480, 1]
    });
    jQuery(".popular-items .next").click(function () {
        jQuery(".popular-items-owl-slider").trigger('owl.next');
    });
    jQuery(".popular-items .prev").click(function () {
        jQuery(".popular-items-owl-slider").trigger('owl.prev');
    });

    // Popular Items Slider  End
    // ---------------------------------------------------------------------------------------


    // ---------------------------------------------------------------------------------------
    // Brands Slider Start
    jQuery("#brands-carousel-slider").owlCarousel({
        autoPlay: true, //Set AutoPlay to 3 seconds
        items: 7,
        itemsDesktop: [1199, 7],
        itemsDesktopSmall: [1024, 6],
        itemsTablet: [991, 4],
        itemsTabletSmall: [767, 3],
        itemsMobile: [480, 2]
    });
    jQuery(".brands-slider .next").click(function () {
        jQuery("#brands-carousel-slider").trigger('owl.next');
    });
    jQuery(".brands-slider .prev").click(function () {
        jQuery("#brands-carousel-slider").trigger('owl.prev');
    });
    // Brands Slider End
    // ---------------------------------------------------------------------------------------


    // ---------------------------------------------------------------------------------------
    // Testimonials Slider Start
    jQuery(".testimonials-slider").owlCarousel({
        autoPlay: true, //Set AutoPlay to 3 seconds
        items: 1,
        itemsDesktop: [1199, 1],
        itemsTablet: [1024, 1],
        itemsMobile: [768, 1]
    });
    jQuery(".testimonials-wrap .next").click(function () {
        jQuery(".testimonials-slider").trigger('owl.next');
    });
    jQuery(".testimonials-wrap .prev").click(function () {
        jQuery(".testimonials-slider").trigger('owl.prev');
    });
    // Testimonials Slider End
    // ---------------------------------------------------------------------------------------


    // Cart Dorwpdown
    $('.cart-btn').click(function () {
        $('.cart-dropdown').slideToggle('fast');
    });

    // Who We Are Tabination
    $('#we-are-toggle').find('.we-are').click(function (e) {
        e.preventDefault();
        $(this).next().slideToggle('fast');
        $(this).find('.fa').toggleClass('fa-caret-right fa-caret-down');
        $(".we-are-content").not($(this).next()).slideUp('fast');
    });

    // ---------------------------------------------------------------------------------------
    // DateTimePicker Start
    $(".datetimepicker").datepicker();
    // DateTimePicker End
    // ---------------------------------------------------------------------------------------


    // ---------------------------------------------------------------------------------------
    // Checkout Massage Start

    $('#diff-address').click(function () {
        $('.form-delivery-different').toggle("slow");
    });
    $('#direct-transfer').click(function () {
        $('.direct-transfer-msg').show("slow");
        $('.cheque-transfer-msg').hide();
        $('.paypal-transfer-msg').hide();
    });

    $('#cheque-transfer').click(function () {
        $('.cheque-transfer-msg').show("slow");
        $('.direct-transfer-msg').hide();
        $('.paypal-transfer-msg').hide();
    });

    $('#paypal-transfer').click(function () {
        $('.paypal-transfer-msg').show("slow");
        $('.cheque-transfer-msg').hide();
        $('.direct-transfer-msg').hide();
    });

    // Checkout Massage End
    // ---------------------------------------------------------------------------------------

    // ---------------------------------------------------------------------------------------
    // Countdown Start
    if ($().countdown) {
        var austDay = new Date();
        austDay = new Date(austDay.getFullYear() + 1, 1 - 1, 26);
        $('#dealCountdown1').countdown({until: austDay});
        $('#dealCountdown2').countdown({until: austDay});
        $('#dealCountdown3').countdown({until: austDay});
    }
    // Countdown End
    // ---------------------------------------------------------------------------------------





    // ---------------------------------------------------------------------------------------
    // Sidebar Filter Scroll Start
    if ($().slimScroll) {
        $('#pink-scroll').slimScroll({
            size: '3px',
            color: '#f37f8c',
            railOpacity: 1,
            alwaysVisible: true,
            railVisible: true,
            railColor: '#e4e4e4',
            opacity: '1',
            height: '215px'
        });
        $('#purple-scroll').slimScroll({
            size: '3px',
            color: '#9865eb',
            railOpacity: 1,
            alwaysVisible: true,
            railVisible: true,
            railColor: '#e4e4e4',
            opacity: '1',
            height: '215px'
        });
    }
    // Sidebar Filter Scroll End
    // ---------------------------------------------------------------------------------------


});



// ---------------------------------------------------------------------------------------
// Sidebar Filter Range Start
var priceSliderRange = $('#slider-range');
if ($.ui) {
    if ($(priceSliderRange).length) {
        $(priceSliderRange).slider({
            range: true,
            min: 0,
            max: 500,
            values: [75, 300],
            slide: function (event, ui) {
                $("#amount").val("$" + ui.values[0] + " - $" + ui.values[1]);
            }
        });
        $("#amount").val(
                "$" + $("#slider-range").slider("values", 0) +
                " - $" + $("#slider-range").slider("values", 1)
                );
    }
}
// Sidebar Filter Range End
// ---------------------------------------------------------------------------------------
