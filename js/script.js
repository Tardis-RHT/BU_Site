$(document).ready(function(){var o=$(".header-container"),s=0;0===o.offset().top?o.css({"background-color":"rgba(255,255,255,.8)"}):0!==o.offset().top&&o.css({"background-color":"rgb(255,255,255)"}),$(window).scroll(function(){var t=$(window).scrollTop(),e=!1,f=!1;if(0===o.offset().top&&o.css({"background-color":"rgba(255,255,255,.8)"}),t>0){if(t>s)if(e=!1,t<o.outerHeight()+o.offset().top){if(!1===f){r=o.offset().top;o.css({top:r+"px"}),f=!0}o.css({position:"absolute"})}else o.css({position:"fixed",top:"-"+(o.outerHeight()+4)+"px"});else if(f=!1,t>o.offset().top){if(!1===e){var r=o.offset().top;o.css({top:r+4+"px"}),e=!0}o.css({position:"absolute"})}else o.removeAttr("style"),0!==o.offset().top&&o.css({"background-color":"rgb(255,255,255)"});s=t}})});