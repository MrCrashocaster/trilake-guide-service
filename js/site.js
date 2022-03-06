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

        $('.fade-up, .fade-down, .fade-right, .fade-left').each(function() {
            var crrnt = $(this);
            if (crrnt.visible( true )) {
                crrnt.addClass('show');
            }
            else if (!crrnt.visible( true )) {
                crrnt.removeClass('show');
            }
        });
        
    });
});