<?php get_template_part('mods/site-header/site', 'header'); ?>
<section class="four-block">
    <div class="wrapper four-container">
        <h1><?php echo LangDicts::$dict['404_text'] ?>
        </h1>
        <p><?php echo LangDicts::$dict['404_more_text'] ?>  
        </p>
    </div>
</section>
<?php get_template_part('mods/post/post'); ?>
<?php get_template_part('mods/news/news'); ?>
<?php get_template_part('mods/site-footer/site', 'footer'); ?>