<?php get_template_part('mods/site-header/site', 'header'); ?>
    <div class="main flex-content">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <div class="wrapper post__content">
            <?php the_content(); ?>
        </div>
    <?php endwhile; endif; ?>
    <?php get_template_part('mods/map/map'); ?>
</div>

<?php get_template_part('mods/site-footer/site', 'footer'); ?>