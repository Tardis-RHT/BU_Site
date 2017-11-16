$(document).ready(function() {
    
    var header = $(".header-container");
    var scrollPrev = 0

    if (header.offset().top === 0){
        header.css({
            "background-color" : "rgba(255,255,255,.8)"
        });
    } else if (header.offset().top !== 0){
        header.css({
            "background-color" : "rgb(255,255,255)"
        });
    }
    
    $(window).scroll(function() {
        var scrolled = $(window).scrollTop();
        var firstScrollUp = false;
        var firstScrollDown = false;

        if (header.offset().top === 0){
            header.css({
                "background-color" : "rgba(255,255,255,.8)"
            });
        }
        
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
                        "top": "-" + (header.outerHeight() + 4) + "px"
                    });
                }
            } else {
                firstScrollDown = false;
                if ( scrolled > header.offset().top ) {
                    if ( firstScrollUp === false ) {
                        var topPosition = header.offset().top;
                        header.css({
                            "top": (topPosition + 4) + "px"
                        });
                        firstScrollUp = true;
                    }
                    header.css({
                        "position": "absolute"
                    });
                } else {
                    header.removeAttr("style");
                    if (header.offset().top !== 0){
                        header.css({
                            "background-color" : "rgb(255,255,255)"
                        });
                    }
                }
            }
            scrollPrev = scrolled;
        }
    });
});
if (window.location.href.indexOf("programs/") > -1) { 
    $('.menu-item-14').addClass('current-menu-item');
    $('.menu-item-23').addClass('current-menu-item');
    $('.menu-item-188').addClass('current-menu-item');
}    
else if (window.location.href.indexOf("projects/") > -1) { 
    $('.menu-item-15').addClass('current-menu-item');
    $('.menu-item-22').addClass('current-menu-item');
    $('.menu-item-187').addClass('current-menu-item');
}  
else if (window.location.href.indexOf("news/") > -1) { 
    $('.menu-item-16').addClass('current-menu-item');
    $('.menu-item-21').addClass('current-menu-item');
    $('.menu-item-186').addClass('current-menu-item');
}            