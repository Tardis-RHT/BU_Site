<section class="centered wrapper padding-top">
    <div class="post-container">
        <?php
            if ( is_page( 'programs' ) ) {
                $args = array('posts_per_page' => 0, 'category_name' => 'programs', 'order' => 'DESC' );
            }
            else {
                $args = array('posts_per_page' => 7, 'category_name' => 'programs, events', 'order' => 'DESC' );                
            }
            global $post;
            $posts = get_posts( $args );
            foreach($posts as $post){ setup_postdata($post);
        ?>

        <!-- <a class="tile post-single" style="background-image: url(<?php echo get_the_post_thumbnail_url() ?>);" href="<?php echo get_permalink(); ?>">
            <span class="post__tag">Мероприятие</span>
            <h2 class="post__title">
                <?php echo get_the_title() ?>
            </h2>
            <span class="post__btn btn">
            старт <?php echo get_post_meta( $post->ID, 'start', true ); ?>
            <span class="post__btn--add btn">Подробнее</span></span>
            
        </a> -->

        <a class="tile post-single" style="background-image: url(<?php echo get_the_post_thumbnail_url() ?>);" href="<?php echo get_permalink(); ?>">
           <?php
            if ( in_category('events') ) 
                echo
                '<span class="post__tag">Мероприятие</span><h2 class="post__title post__title--sm">';
            else
                echo
                '<h2 class="post__title">'
            ?>
                <?php echo get_the_title()?>
            </h2>
            <span class="post__btn btn">
            <?php
            if ( in_category('programs') ) 
                echo 'старт ' . get_post_meta( $post->ID, "start", true ) . '';
            else {
                echo get_post_meta( $post->ID, "start", true );
                echo ' в ';
                echo get_post_meta( $post->ID, "time", true );
            }
            ?>
            <span class="post__btn--add btn">Подробнее</span></span>        
        </a>
        

    <?php
        }
        wp_reset_postdata();
    ?>
    
    </div>
    
</section>