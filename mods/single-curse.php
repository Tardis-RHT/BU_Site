<!DOCTYPE html>
<html lang="en">
<?php /* 
Template Name: Single Curse
Template Post Type: post
*/ get_header(); ?>

	<body>
	<?php get_template_part('mods/site-header/site-header'); ?>
	<article class="post">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<header class="wrapper curse-header">
				<div class="curse-header_container" style="background-image: url('<?php echo the_post_thumbnail_url() ?>')">
					<h1 class=""><?php echo get_the_title() ?></h1>
				</div>				
			</header>
		<?php endwhile; endif; ?>
	</article>
	<?php get_template_part('mods/site-footer/site-footer'); ?>
	</body>
</html>

