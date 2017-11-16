function replaceValidationUI(e){e.addEventListener("invalid",function(e){e.preventDefault()},!0),e.addEventListener("submit",function(e){this.checkValidity()||e.preventDefault()}),e.querySelector("button:not([type=button]), input[type=submit]").addEventListener("click",function(t){for(var o=e.querySelectorAll(":invalid"),r=e.querySelectorAll(".error-message"),n=0;n<r.length;n++)r[n].parentNode.removeChild(r[n]);for(n=0;n<o.length;n++)o[n].parentNode.insertAdjacentHTML("beforeend","<div class='error-message'>"+error_text+"</div>");if(o.length>0){for(n=0;n<o.length;n++)o[n].style.borderColor="var(--secondary-color)";o[0].focus()}})}function telValidity(){var e=document.getElementById("tel"),t=e.parentNode;t.getElementsByClassName("error-message").length>0&&(t.removeChild(t.lastChild),e.style.borderColor="var(--primary-color)",e.onblur=function(){e.style.borderColor="var(--font-light)"},e.onfocus=function(){e.style.borderColor="var(--primary-color)"})}$(document).ready(function(e){e("#tel").length>0&&e("#tel").mask("+38 (999) 999 - 99 - 99",{completed:function(){telValidity()}}),e("#mainForm").submit(function(){event.preventDefault();e("#mainForm");var t=e(this).serialize();console.log(t);var o={curse:e("input")[4].value,name:e("input")[0].value,surname:e("input")[1].value,phone:e("input")[2].value,email:e("input")[3].value},r=JSON.stringify(o,null,"  ");return console.log(r),e.ajax({type:"GET",data:"dataJson",response:"text",error:function(e,t){console.log("Sample of error data:",t),console.log("readyState: "+e.readyState+"\nstatus: "+e.status+"\nresponseText: "+e.responseText)},success:function(t,o,r){200==r.status&&(e("#mainForm").trigger("reset"),window.location.href="/thankyou"),console&&console.log&&(console.log("Sample of data:",t.slice(0,100)),console.log("textStatus: ",o),console.log("jqXHR: ",r),console.log("statusText: ",r.statusText))}}),!1})});for(var forms=document.querySelectorAll("form"),i=0;i<forms.length;i++)replaceValidationUI(forms[i]);for(var input=document.getElementsByClassName("form__input"),error_msg=document.getElementsByClassName("error-message"),i=0;i<input.length;i++)input[i].oninput=function(){this.checkValidity();var e=this.parentNode;1==this.checkValidity()&&e.getElementsByClassName("error-message").length>0&&(e.removeChild(e.lastChild),this.style.borderColor="var(--primary-color)",this.onblur=function(){this.style.borderColor="var(--font-light)"},this.onfocus=function(){this.style.borderColor="var(--primary-color)"})};if(jQuery.browser={},jQuery.browser.mozilla=/mozilla/.test(navigator.userAgent.toLowerCase())&&!/webkit/.test(navigator.userAgent.toLowerCase()),$.browser.mozilla&&$(".post-single").length>0){var tile=$(".post-single"),padding=.08*tile.height()+"px";tile.css("padding",padding)}$(document).ready(function(){var e=$(".header-container"),t=0;0===e.offset().top?e.css({"background-color":"rgba(255,255,255,.8)"}):0!==e.offset().top&&e.css({"background-color":"rgb(255,255,255)"}),$(window).scroll(function(){var o=$(window).scrollTop(),r=!1,n=!1;if(0===e.offset().top&&e.css({"background-color":"rgba(255,255,255,.8)"}),o>0){if(o>t)if(r=!1,o<e.outerHeight()+e.offset().top){if(!1===n){s=e.offset().top;e.css({top:s+"px"}),n=!0}e.css({position:"absolute"})}else e.css({position:"fixed",top:"-"+(e.outerHeight()+4)+"px"});else if(n=!1,o>e.offset().top){if(!1===r){var s=e.offset().top;e.css({top:s+4+"px"}),r=!0}e.css({position:"absolute"})}else e.removeAttr("style"),0!==e.offset().top&&e.css({"background-color":"rgb(255,255,255)"});t=o}})}),window.location.href.indexOf("programs/")>-1?($(".menu-item-14").addClass("current-menu-item"),$(".menu-item-23").addClass("current-menu-item"),$(".menu-item-188").addClass("current-menu-item")):window.location.href.indexOf("projects/")>-1?($(".menu-item-15").addClass("current-menu-item"),$(".menu-item-22").addClass("current-menu-item"),$(".menu-item-187").addClass("current-menu-item")):window.location.href.indexOf("news/")>-1&&($(".menu-item-16").addClass("current-menu-item"),$(".menu-item-21").addClass("current-menu-item"),$(".menu-item-186").addClass("current-menu-item"));