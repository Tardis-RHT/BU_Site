<section class="news">
    <div class="wrapper container">
        <div class="news-container">
            <?php
                global $post;
                $args = array('posts_per_page' => 3,'category' => buTheme_slugid('news'), 'order' => 'ASC' );
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
                    <p class="news__caption"><?php echo get_field('news_caption') ?></p>
                </div>
            </a>
            <?php
                }
                wp_reset_postdata();
            ?>
        </div>
    </div>
</section>