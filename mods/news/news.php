<section class="news">
    <div class="wrapper container">
        <div class="news-container">
            <?php
                if ( is_page( 'news' ) ) {
                    $args = array('posts_per_page' => 0, 'category_name' => 'news', 'order' => 'ASC' );
                }
                else {
                    $args = array('posts_per_page' => 3, 'category_name' => 'news', 'order' => 'ASC' );                
                }
                global $post;
                $myposts = get_posts( $args );
                foreach( $myposts as $post ){ setup_postdata($post);
            ?>                    
            <a class="tile tile__news" href="<?php echo get_permalink() ?>">
                <div class="news__cover-container">
                    <div class="news__cover">
                        <img class="news__img" src="<?php echo get_the_post_thumbnail_url() ?>">
                    </div>
                </div>
                <div class="news__content">
                    <span class="news__date"><?php echo get_the_date('d.m.Y') ?></span>
                    <h3 class="news__title"><?php echo get_the_title() ?></h3>
                    <p class="news__caption"><?php echo the_excerpt() ?></p>
                </div>
            </a>
            <?php
                }
                wp_reset_postdata();
            ?>
        </div>
    </div>
</section>