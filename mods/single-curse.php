<?php get_template_part('mods/site-header/site', 'header'); ?>
<div class="post">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <header class="curse-header">
            <div class="curse-header_container">
                <img class="curse__post-img" <?php buTheme_src_set() ?> >
                <h1 class="curse__post-title"><?php echo get_the_title() ?></h1>
            </div>				
        </header>
        <?php 
        if ( in_category('programs') ) get_template_part('mods/curse-info/curse', 'info');
        elseif ( in_category('events') ) get_template_part('mods/event-info/event', 'info');
        ?>
        <?php
            $text = get_the_content();
            $patern="#<[\s]*h1[\s]*>([^<]*)<[\s]*/h1[\s]*>#i";
            if(preg_match($patern, $text, $matches)) echo "<h1 class='title'>".$matches[1]."</h1>";
        ?>
        <div class="wrapper curse-content">
            <?php 
            // function deleteFirstImages($content) {
                $all_content = get_the_content();
                
                $content = preg_match('~</h1>(.*?)~is', $all_content, $m );
                // return $content;
                $email = '<h1>title</h1>';
                echo stristr($all_content, '</h1>'); // выводит ER@EXAMPLE.com
            //  }
            //  add_filter ('the_content', 'deleteFirstImages');
            // the_content(); ?>
        </div>
    <?php endwhile; endif; ?>
</div>
<?php if ( in_category('programs') ) get_template_part('mods/trainers/trainers'); ?>
<?php 
if ( in_category( 'programs' ) ) {get_template_part('mods/map/map'); get_template_part('mods/form/form');}
if ( in_category( 'news' ) ) {get_template_part('mods/post/post'); get_template_part('mods/news/news');}
if ( in_category( 'events' ) ) {get_template_part('mods/post/post');}
?>
<?php get_template_part('mods/site-footer/site', 'footer'); ?>