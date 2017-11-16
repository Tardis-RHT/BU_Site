<?php get_template_part('mods/site-header/site', 'header'); ?>
<div class="post">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <header class="curse__img">
            <div class="curse__img_container">
                <img class="curse__post-img" <?php buTheme_src_set() ?> >
                <h1 class="curse__post-title"><?php echo get_the_title() ?></h1>
            </div>				
        </header>
        <?php 
        if ( in_category('programs') ) get_template_part('mods/curse-info/curse', 'info');
        elseif ( in_category('events') ) get_template_part('mods/event-info/event', 'info');
        ?>
        <div class="wrapper curse-content">
            <?php the_content(); ?>
        </div>
    <?php endwhile; endif; ?>
</div>
<?php 
if ( in_category( 'programs' ) ) {get_template_part('mods/map/map'); get_template_part('mods/form/form');}
if ( in_category( 'news' ) ) {get_template_part('mods/post/post'); get_template_part('mods/news/news');}
if ( in_category( 'events' ) ) {get_template_part('mods/post/post');}
?>
<?php get_template_part('mods/site-footer/site', 'footer'); ?>