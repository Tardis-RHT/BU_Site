<?php get_template_part('mods/site-header/site', 'header'); ?>
<div class="flex-content">
    <div class="news-page-container">
        <?php echo do_shortcode('[ajax_load_more css_classes="news-page-container" post_type="post" posts_per_page="12" category="news"]'); ?>
    </div>
</div>
<?php get_template_part('mods/site-footer/site', 'footer'); ?>