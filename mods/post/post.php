<section class="centered wrapper padding-top">
    <div class="post-container">
        <?php
            global $post;
            $args = array('posts_per_page' => 7, 'category_name' => 'programs, events', 'meta_key'	=> 'start', 'orderby'	=> 'meta_value_num', 'order' => 'DESC' );
            $posts = get_posts( $args );
            foreach($posts as $post){ setup_postdata($post);
        ?>

        <a class="tile post-single" style="background-image: url(<?php echo get_the_post_thumbnail_url() ?>);" href="<?php echo get_permalink(); ?>">
           <?php
            if ( in_category('events') ) {
                echo '<span class="post__tag">';
                echo LangDicts::$dict['Event'];
                echo '</span><h2 class="post__title post__title--sm">';
            }
            else
                echo
                '<h2 class="post__title">'
            ?>
                <?php echo get_the_title()?>
            </h2>
            <span class="post__btn btn">
                <?php
                    // $dateformatstring = "j F";
                    // $unixtimestamp = strtotime(get_field('start'));
                    // $gmt = true;
                if ( in_category('programs') ) {
                    // echo 'старт ' . date_i18n($dateformatstring, $unixtimestamp, $gmt) . '';
                    echo LangDicts::$dict['Start'];
                    echo ' ' . get_post_meta( $post->ID, "start", true ) . '';
                }
                else {
                    // echo date_i18n($dateformatstring, $unixtimestamp, $gmt);
                    echo get_post_meta( $post->ID, "start", true );
                    echo ' ' . LangDicts::$dict['at'] . '&nbsp;';
                    echo get_post_meta( $post->ID, "time", true );
                }
                ?>
                <span class="post__btn--add btn">
                    <?php echo LangDicts::$dict['More'];?>
                </span>
            </span>        
        </a>

    <?php
        }
        wp_reset_postdata();
    ?>
    
    </div>
    
</section>