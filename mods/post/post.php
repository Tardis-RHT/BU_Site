<section class="post-container wrapper">
    <?php
        global $post;
        $args = array('posts_per_page' => 7, 'post_type' => 'post', 'order' => 'ASC' );
        $posts = get_posts( $args );
        
        foreach($posts as $post){ setup_postdata($post);

        $thumb_id = get_post_thumbnail_id();
        $thumb_url = wp_get_attachment_image_src($thumb_id,'thumbnail-size', true);
    ?>

        <a class="tile post-single" style="background-image: url(<?php echo $thumb_url[0]; ?>);" href="<?php echo get_permalink(); ?>">
        
            <h2 class="post__title">
                <?php echo get_the_title() ?>
            </h2>
            <span class="post__btn btn">
            старт <?php echo get_post_meta( $post->ID, 'start', true ); ?></span>
        </a>

    <?php
        }
        wp_reset_postdata();
    ?>
</section>