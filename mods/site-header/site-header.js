var window_width = $(window).width();
var menu_items = $('.menu-item');
var items_width = menu_items.width();
var menu = $('.main-menu');
var menu_width = menu[0].scrollWidth;

function header_scroll(){
    if(window_width <= menu_width && window_width % items_width){
        menu_items.css('margin', '0 calc(var(--grid-margin) + 1rem)');
        console.log('yes');
    }
    else{
        menu_items.css('margin', '0 var(--grid-margin)');
        console.log('no');
    }
}
$(document).ready(header_scroll);
$(window).resize(header_scroll);