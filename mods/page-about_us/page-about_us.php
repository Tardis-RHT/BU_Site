<?php get_template_part('mods/site-header/site', 'header'); ?>
    <article class="post padding-top">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <div class="wrapper curse-content">
            <?php the_content(); ?>
        </div>
    <?php endwhile; endif; ?>
</article>
<?php get_template_part('mods/site-footer/site', 'footer'); ?>