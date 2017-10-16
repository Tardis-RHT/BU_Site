<!DOCTYPE html>
<html lang="en">
    <?php get_header(); ?>  
<body>
    <?php get_template_part('mods/site-header/site', 'header'); ?>
    <h1>Hello!</h1>
    <h2>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nesciunt, repellat. Quo, officiis dolore. Maiores nostrum, sequi iure ipsum id sapiente explicabo iusto eos magnam, ab harum, reprehenderit quisquam architecto facere!</h2>
    <h2 style="margin-bottom:1000px">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nesciunt, repellat. Quo, officiis dolore. Maiores nostrum, sequi iure ipsum id sapiente explicabo iusto eos magnam, ab harum, reprehenderit quisquam architecto facere!</h2>
	<?php get_template_part('mods/site-footer/site', 'footer'); ?>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/script.js"></script>
    <script>
    jQuery(document).ready(function($){
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
</body>
</html>