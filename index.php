<!DOCTYPE html>
<html>
	<body>
        <?php get_header(); ?>



        <?php get_template_part('mods/site-footer/site', 'footer'); ?>
	</body>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script>
	jQuery(document).ready(function($){
		$('.post iframe').each(function(){
			if($(this).parent().siblings().not('.inpost-wrap--big')){
				$(this).wrap('<div class="inpost-wrap--big"></div>');
			}
		});
		$('.post-aside').each(function(){
			$(this).prev('p').css({'float':'left','width':'100%','margin-bottom':'1rem'});
		});
		var doit;
		function resizedw() {
			$('.aligncenter,.alignleft,.alignright,.inpost-wrap,.inpost-wrap--big,.post-aside').each(function() {
				lh = 8; //base-line-height
				th = parseFloat( $( this ).css("height"));
				need_margin = Math.floor(th/lh +1)*lh - th;
				if(need_margin < lh){
					$( this ).css('padding-bottom', need_margin);
				}
			});
		};
		resizedw();
		window.onresize = function() {
			clearTimeout(doit);
			doit = setTimeout(resizedw, 250);
		};
		// debuger begin
		var flag = 1;
		$('html').keydown(function(eventObject){ //отлавливаем нажатие клавиш
			if (event.ctrlKey && event.keyCode == 71) { //если нажали Ctrl+g
				$('html').toggleClass('debuger');
				$('body *').each( function() {
	            if ($(this).css("display")=="block"){ 
	                $(this).toggleClass('debuger__block').parents().removeClass('debuger__block'); }
	            });
	            if(flag == 1){
	            	$('head').append('<link rel="stylesheet" href="<?php bloginfo('template_directory');?>/css/debuger.css" />');
	            	$('body').append('<div class="debuger-grid"><div></div><div></div><div></div><div></div></div>')
	            	flag++
	            }
			}
		});
		//debuger end
	});
	</script>
</html>