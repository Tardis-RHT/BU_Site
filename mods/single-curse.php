<?php get_template_part('mods/site-header/site', 'header'); ?>
    <article class="post">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <header class="curse-header">
                <div class="curse-header_container">
                    <img class="curse__post-img" alt="Post logo image"
                        <?php $thumb_id = get_post_thumbnail_id();?>
                        src="<?php wp_get_attachment_image_url( $thumb_id ) ?>"
                        srcset="<?php echo wp_get_attachment_image_srcset( $thumb_id, 'full' ) ?>"
                        sizes="<?php echo wp_get_attachment_image_sizes( $thumb_id, 'full' ) ?>"                    
                    >
                    <h1 class="curse__post-title"><?php echo get_the_title() ?></h1>
                </div>				
            </header>

            <?php 
            if ( is_single() ) get_template_part('mods/curse-info/curse', 'info');
            ?>
                
            <div class="wrapper curse-content">
                <?php the_content(); ?>
            </div>

        <?php endwhile; endif; ?>
    </article>
<?php get_template_part('mods/site-footer/site', 'footer'); ?>