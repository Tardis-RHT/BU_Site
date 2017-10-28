<?php get_template_part('mods/site-header/site', 'header'); ?>
<article class="post">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <header class="curse-header">
            <div class="curse-header_container">
            <img class="curse__post-img" <?php buTheme_src_set() ?> >
                <h1 class="curse__post-title"><?php echo get_the_title() ?></h1>
            </div>				
        </header>
        <?php 
        if ( in_category('programs') ) get_template_part('mods/curse-info/curse', 'info');
        ?>
        <div class="wrapper curse-content">
            <?php the_content(); ?>
        </div>
    <?php endwhile; endif; ?>
</article>
<?php 
if ( in_category( 'programs' ) ) get_template_part('mods/form/form');?>
<?php get_template_part('mods/site-footer/site', 'footer'); ?>