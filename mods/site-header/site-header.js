$(function () {
    var scrollPrev = 0;
    var header_height = $('header').outerHeight();
    $('.header').removeClass('header--scroll');
    console.log(header_height);
    $(window).scroll(function (event) {
        var scrolled = $(window).scrollTop();
    
        if (scrolled < scrollPrev) {
            $('.header').addClass('header--scroll');
            // $('.header--scroll').css('top', '-110px');
            
            // $('.header--scroll').animate({
            //     top:'+=110px',
            // },500);
            if (scrolled == 0){
                $('header').removeClass('header--scroll');
            }
        }
        // else if (scrolled > scrollPrev){
        //     $('.header--scroll').animate({
        //         top:100,
        //     });
        //     console.log('else if');
        // }
        else {
            $('header').removeClass('header--scroll');
        }
        scrollPrev = scrolled;
    });
});
