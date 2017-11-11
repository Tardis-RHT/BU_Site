jQuery.browser = {};
jQuery.browser.mozilla = /mozilla/.test(navigator.userAgent.toLowerCase()) && !/webkit/.test(navigator.userAgent.toLowerCase());
if ($.browser.mozilla && $('.post-single').length > 0){
    var tile = $('.post-single');
    var padding = tile.height() * 0.08 + 'px';
    tile.css('padding', padding)
}