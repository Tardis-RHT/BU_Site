<?php get_template_part('mods/site-header/site', 'header'); ?>
    
    <h2 style="margin-top:100px;">Hi! I'm page programs</h2>
    <h3>Here are your programs</h3>
    <?php
        global $post;
        $args = array('posts_per_page' => 10,'category' => '4', 'order' => 'ASC' );
        $myposts = get_posts( $args );
        foreach( $myposts as $post ){ setup_postdata($post);
    ?>
            
    <a href="<?php echo the_permalink(); ?>"><?php echo the_title() ?></a>
                
            
    <?php
        }
        wp_reset_postdata();
    ?>

<?php get_template_part('mods/site-footer/site', 'footer'); ?>