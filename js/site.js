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
        
        var current = $('.changeBackground');
        if (current.visible( true )) {
            $('body').addClass('background-transition');
            $('body').removeClass('background-transition-out');
            $('body').addClass('bg-black');
            $('body').removeClass('bg-white');
            $('p').addClass('white');
            $('.h2').addClass('white');
        }
        else if (!current.visible( true )) {
            $('body').addClass('background-transition-out');
            $('body').addClass('bg-white');
            $('body').removeClass('background-transition');
            $('body').removeClass('bg-black');
            $('p').removeClass('white');
            $('.h2').removeClass('white');
        }
        
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
});