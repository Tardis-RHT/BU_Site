<!DOCTYPE html>
<html lang="en">
    <?php get_header(); ?>  
<body>
    <?php get_template_part('mods/site-header/site', 'header'); ?>
    
    <a href="#" class="btn" style="margin-top:150px">Example button</a>
    <a href="#" class="btn btn--action">Action button</a>
    <a href="/java-pro/">visit single curse page</a>

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