<?php get_template_part('mods/site-header/site', 'header'); ?>
    <article class="post padding-top news-container">
        <?php if (have_posts()) : 
            query_posts('cat=4');
            while (have_posts()) : the_post(); ?>
            <a class="tile tile__news" href="<?php echo get_permalink() ?>">
                <div class="news__cover-container" style="background-image: url('<?php echo get_the_post_thumbnail_url() ?>');">
                </div>
                <div class="news__content">
                    <span class="news__date"><?php echo get_the_date('d.m.Y') ?></span>
                    <h3 class="news__title"><?php echo get_the_title() ?></h3>
                    <p class="news__caption"><?php echo get_field('news_caption') ?></p>
                </div>
            </a>
        <?php endwhile; endif; ?>
    </article>
<?php get_template_part('mods/site-footer/site', 'footer'); ?>