<!DOCTYPE html>
<html lang="en">
    <?php get_header(); ?>  
<body>

    <?php 
        if ( is_single() ) get_template_part('mods/single-curse');
        elseif ( is_404() ) get_template_part('mods/404');
        elseif ( is_page( 'programs' ) ) get_template_part('mods/page-programs/programs');
        elseif ( is_page( 'ui' ) ) get_template_part('mods/single-curse');
        else get_template_part('mods/homepage/home');
        
        wp_footer(); 
    ?>
    
    <?php wp_footer(); ?>
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