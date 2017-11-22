<?php get_template_part('mods/site-header/site', 'header'); ?>
<div class="post">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <header class="post-img">
            <div class="post-img__container">
                <img class="post-img__inner" <?php buTheme_src_set() ?> >
                <?php if (in_category('news')) echo '<div class="post-img__date">' . get_the_date('d F Y') . '</div>'; ?>
                <h1 class="post-img__title"><?php echo get_the_title() ?></h1>
            </div>				
        </header>
        <?php 
        if ( in_category('programs') ) get_template_part('mods/curse-info/curse', 'info');
        elseif ( in_category('events') ) get_template_part('mods/event-info/event', 'info');
        ?>
        <div class="wrapper post__content">
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