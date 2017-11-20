<section class="news-block">
    <div class="wrapper container">
        <div class="<?php
            if ( is_page( 'news' ) ) {
                echo 'news-page-container';
            }
            else {
                echo 'news-container';
            }
        ?>">
            <?php
                if ( is_page( 'news' ) ) {
                    $args = array('numberposts' => 0, 'category_name' => 'news', 'order' => 'DESC' );
                }
                else {
                    $args = array('posts_per_page' => 3, 'post__not_in' => array( $post->ID ), 'category_name' => 'news', 'order' => 'DESC' );                
                }
                global $post;
                $myposts = get_posts( $args );
                foreach( $myposts as $post ){ setup_postdata($post);
            ?>                    
            <a class="tile tile__news" href="<?php echo get_permalink() ?>">
                <div class="news__cover-container">
                    <img class="news__img" <?php echo buTheme_src_set() ?>>
                </div>
                <div class="news__content">
                    <span class="news__date"><?php echo get_the_date('d.m.Y') ?></span>
                    <h3 class="news__title"><?php echo get_the_title() ?></h3>
                    <?php echo the_excerpt() ?>
                </div>
            </a>
            <?php
                }
                wp_reset_postdata();
            ?>
        </div>
    </div>
</section>