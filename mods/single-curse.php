<!DOCTYPE html>
<html lang="en">
    <?php /*
		Template Name: Single Curse
		Template Post Type: post
		*/  
		get_header(); ?>  
	<body>
		<?php get_template_part('mods/site-header/site', 'header'); ?>
		<article class="post">
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<header class="wrapper curse-header">
				<div class="curse-header_container" style="background-image: url('<?php echo the_post_thumbnail_url() ?>')">
					<h1 class=""><?php echo get_the_title() ?></h1>
				</div>				
			</header>

			<?php get_template_part('mods/curse-info/curse', 'info'); ?>
				
			<div class="curse-content">
				<?php the_content(); ?>
			</div>

			<?php endwhile; endif; ?>
		</article>
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
