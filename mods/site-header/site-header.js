$(document).ready(function() {
    
    var header = $(".header");
    var scrollPrev = 0
    
    $(window).scroll(function() {
        var scrolled = $(window).scrollTop();
        var firstScrollUp = false;
        var firstScrollDown = false;
        
        if ( scrolled > 0 ) {
            if ( scrolled > scrollPrev ) {
                firstScrollUp = false;
                if ( scrolled < header.outerHeight() + header.offset().top ) {
                    if ( firstScrollDown === false ) {
                        var topPosition = header.offset().top;
                        header.css({
                            "top": topPosition + "px"
                        });
                        firstScrollDown = true;
                    }
                    header.css({
                        "position": "absolute"
                    });
                } else {
                    header.css({
                        "position": "fixed",
                        "top": "-" + header.outerHeight() + "px"
                    });
                }
            } else {
                firstScrollDown = false;
                if ( scrolled > header.offset().top ) {
                    if ( firstScrollUp === false ) {
                        var topPosition = header.offset().top;
                        header.css({
                            "top": topPosition + "px"
                        });
                        firstScrollUp = true;
                    }
                    header.css({
                        "position": "absolute"
                    });
                } else {
                    header.removeAttr("style");
                }
            }
            scrollPrev = scrolled;
        }   
    });         
});