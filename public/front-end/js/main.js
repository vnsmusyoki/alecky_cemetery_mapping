(function($) {
    "use strict";
    /***************************************
     jQuery MeanMenu activation code
     ***************************************/
    $('nav#dropdown').meanmenu({
        siteLogo: "<a href='index.html'><img src='img/logo.png' /></a>"
    });

    /***************************************
     jquery Services activation code
     ***************************************/
    $(".services-carousel").owlCarousel({
        autoPlay: false,
        slideSpeed: 2000,
        pagination: true,
        navigation: false,
        items: 3,
        navigationText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
        itemsDesktop: [1199, 3],
        itemsDesktopSmall: [991, 2],
        itemsTablet: [767, 1],
        itemsMobile: [479, 1],
    });

    /***************************************
     jquery Staff activation code
     ***************************************/
    $(".staff-right").owlCarousel({
        autoPlay: false,
        slideSpeed: 2000,
        pagination: false,
        navigation: true,
        items: 3,
        navigationText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
        itemsDesktop: [1199, 2],
        itemsDesktopSmall: [991, 1],
        itemsTablet: [767, 2],
        itemsMobile: [479, 1],
    });

    /***************************************
     jquery Talk About activation code
     ***************************************/
    $(".talk-about-carousel").owlCarousel({
        autoPlay: false,
        slideSpeed: 2000,
        pagination: true,
        navigation: false,
        items: 1,
        navigationText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
        itemsDesktop: [1199, 1],
        itemsDesktopSmall: [980, 1],
        itemsTablet: [768, 1],
        itemsMobile: [479, 1],
    });

    /***************************************
     jquery Partner activation code
     ***************************************/
    $(".partner-carousel").owlCarousel({
        autoPlay: true,
        slideSpeed: 2000,
        pagination: false,
        navigation: true,
        items: 5,
        navigationText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
        itemsDesktop: [1199, 4],
        itemsDesktopSmall: [980, 3],
        itemsTablet: [768, 3],
        itemsMobile: [479, 1],
    });

    /***************************************
     jquery Sidebar Services activation code
     ***************************************/
    $(".sidebar-services-carousel").owlCarousel({
        autoPlay: false,
        slideSpeed: 2000,
        pagination: true,
        navigation: false,
        items: 1,
        navigationText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
        itemsDesktop: [1199, 1],
        itemsDesktopSmall: [991, 1],
        itemsTablet: [768, 1],
        itemsMobile: [479, 1],
    });

    /***************************************
     jquery Obituary activation code
     ***************************************/
    $(".obituary-right").owlCarousel({
        autoPlay: false,
        slideSpeed: 2000,
        pagination: false,
        navigation: true,
        items: 5,
        navigationText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
        itemsDesktop: [1199, 4],
        itemsDesktopSmall: [991, 3],
        itemsTablet: [767, 3],
        itemsMobile: [479, 1]
    });

    /***************************************
     jquery Scollup activation code
     ***************************************/
    $.scrollUp({
        scrollText: '<i class="fa fa-angle-up"></i>',
        easingType: 'linear',
        scrollSpeed: 900,
        animation: 'fade'
    });

    /***************************************
     jquery Serch Box activation code
     ***************************************/
    $('.search-button').on("click", function(e) {
        e.preventDefault();
        $('.search-form').slideToggle('slow');
    });

    /****************************************
      Contact Form activation code
    *****************************************/
    if ($('#contact-form').length) {
        $('#contact-form').validator().on('submit', function(e) {
            var $this = $(this),
                $target = $('.form-response');
            if (e.isDefaultPrevented()) {
                $target.html("<div class='alert alert-success'><p>Please select all required field.</p></div>");
            } else {
                var name = $('#form-name').val();
                var email = $('#form-email').val();
                var message = $('#form-message').val();
                // ajax call
                $.ajax({
                    url: "php/form-process.php",
                    type: "POST",
                    data: "name=" + name + "&email=" + email + "&message=" + message,
                    beforeSend: function() {
                        $target.html("<div class='alert alert-info'><p>Loading ...</p></div>");
                    },
                    success: function(text) {
                        if (text == 'success') {
                            $this[0].reset();
                            $target.html("<div class='alert alert-success'><p>Message has been sent successfully.</p></div>");
                        } else {
                            $target.html("<div class='alert alert-success'><p>" + text + "</p></div>");
                        }
                    }
                });
                return false;
            }
        });
    }

    /****************************************
     jquery Stiky Menu activation code
     ***************************************/
    $(window).on('scroll', function() {
        var s = $("#sticker");
        var w = $(".wrapper-area");
        var windowpos = $(window).scrollTop();

        if ($(window).width() > 767) {
            var topBar = $(".header-area-top-area").outerHeight();
            if (windowpos > topBar) {
                s.addClass('stick');
                var h = $(".main-header-area").outerHeight();
                w.css('padding-top', h + "px");
            } else {
                s.removeClass('stick');
                w.css('padding-top', 0);
            }
        } else {
            if (windowpos > 0) {
                $(".mean-container .mean-bar").css('position', 'fixed');
                var h = $(".mean-bar").outerHeight();
                w.css('padding-top', h + "px");
            } else {
                $(".mean-container .mean-bar").css('position', 'relative');
                w.css('padding-top', 0);
            }
        }
    });

    /****************************************
     jquery zoom activation code
     ***************************************/
    $('.ex1').zoom();

    /***************************************
     jquery preloader 
     ***************************************/
    $(window).load(function() {
        $('#preloader').fadeOut('slow', function() {
            $(this).remove();
        });
    });

})(jQuery);