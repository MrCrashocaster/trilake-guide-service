/*jshint unused: false, undef:false, latedef: false */
/*jshint unused: false, undef:false, latedef: false */
/*jshint unused: false, undef:false, latedef: false */

$(window).on('load', function () {
    // page is fully loaded, including all frames, objects and images
    $('body').addClass('display');
});

$(document).ready(function() {
    
    $(window).resize(function() {
        
    });

    var scrollTop = $(window).scrollTop();
    
    // WINDOW SCROLL
    $(window).on('scroll', function(){
        scrollTop = $(window).scrollTop();
        
        var currentDark = $('.changeBackgroundToDark');

        if (currentDark.visible( true )) {
            $('body').addClass('background-transition');
            $('body').removeClass('background-transition-out');
            $('body').addClass('bg-dark');
            $('body').removeClass('bg-white');
            $('p').addClass('white');
            $('.h2').addClass('white');
            $('.btnContent').addClass('btnBorderWhite');
            $('#packageSection .btnContent').removeClass('btnBorderWhite');
            $('#unparalledService .btnContent').removeClass('btnBorderDark');
        }

        else {
            $('body').addClass('background-transition-out');
            $('body').addClass('bg-white');
            $('body').removeClass('background-transition');
            $('body').removeClass('bg-dark');
            $('p').removeClass('white');
            $('.h2').removeClass('white');
            $('.btnContent').addClass('btnBorderDark');
        }

        // var currentRed = $('.changeBackgroundToRed');

        // if (currentRed.visible( true )) {
        //     $('body').addClass('background-transition');
        //     $('body').removeClass('background-transition-out');
        //     $('body').addClass('bg-red');
        //     $('p').addClass('white');
        //     $('#servicesSection .h2').addClass('white');
        //     $('.h1').addClass('dark');
        //     $('.btnContent').addClass('btnBorderWhite');
        //     $('#packageSection .btnContent').removeClass('btnBorderWhite');
        //     $('#unparalledService .btnContent').removeClass('btnBorderDark');
        // }

        // else {
        //     $('body').addClass('background-transition-out');
        //     $('body').addClass('bg-white');
        //     $('body').removeClass('background-transition');
        //     $('body').removeClass('bg-red');
        //     $('p').removeClass('white');
        //     $('.h1').removeClass('dark');
        //     $('#servicesSection .h2').removeClass('white');
        //     $('.btnContent').addClass('btnBorderDark');
        // }
        
        if ($(window).width() >= 768) {
            $('.fade-up, .fade-down, .fade-right, .fade-left').each(function() {
                var crrnt = $(this);
                if (crrnt.visible( true )) {
                    crrnt.addClass('show');
                }
                else if (!crrnt.visible( true )) {
                    crrnt.removeClass('show');
                }
            });  
        }

        if ($(window).width() <= 768) {
            $('.fade-up, .fade-down, .fade-right, .fade-left').each(function() {
                var crrnt = $(this); 
                crrnt.addClass('show');
            });  
        }
        
    });

    $('.unparalledCopy .btn a').click(function(){
        var clicked = $(this);
        var clickedClass = $('#packageSection');

        $('html, body').stop().animate({'scrollTop': clickedClass.offset().top - 0});
    });
});