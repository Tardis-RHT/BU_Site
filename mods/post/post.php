<section class="wrapper">
    <?php 
        if (is_front_page()) echo '<div class="post-container main">';
        else echo '<div class="post-container">';
        
        if (in_category('news')) echo '<h2 class="tag">' . LangDicts::$dict['curse_nabor_text'] . '</h2>';
               
            global $post;
            $today = date('Ymd');
            $tag_ids = wp_get_post_tags( $post->ID, array( 'fields' => 'ids' ) );
            if(in_category('news') ){
                $args = array(
                    'posts_per_page' => 4, 
                    'category_name' => 'programs',
                    'tag__in' => $tag_ids,
                    'meta_key'	=> 'start',
                    'meta_type' => 'DATETIME',
                    'meta_compare' => '>=',
                    'meta_value' => $today,
                    'orderby' => 'meta_value', 
                    'order' => 'ASC' );
            }
            elseif(is_page( 'programs' ) ){
                $args = array(
                    'posts_per_page' => 4, 
                    'category_name' => 'programs, events',
                    'post__not_in' => array( $post->ID ),
                    'meta_key'	=> 'start',
                    'meta_type' => 'DATETIME',
                    'meta_compare' => '>=',
                    'meta_value' => $today,
                    'orderby' => 'meta_value', 
                    'order' => 'ASC' );
            }
            elseif(is_page( 'events' ) ){
                $args = array(
                    'posts_per_page' => 4, 
                    'category_name' => 'programs, events',
                    'post__not_in' => array( $post->ID ),
                    'meta_key'	=> 'start',
                    'meta_type' => 'DATETIME',
                    'meta_compare' => '>=',
                    'meta_value' => $today,
                    'orderby' => 'meta_value', 
                    'order' => 'ASC' );
            }
            else $args = array(
                    // 'posts_per_page' => 7, 
                    // 'category_name' => 'programs, events',
                    // 'order' => 'ASC',
                    // 'orderby' => 'meta_value', 
                    // 'meta_key'	=> 'current', 
                    // 'meta_compare' => '==',
                    // 'meta_value' => '1',
                    'posts_per_page' => 7, 
                    'category_name' => 'programs, events',
                    'meta_key'	=> 'start', 
                    'meta_type' => 'DATETIME',
                    'meta_compare' => '>=',
                    'meta_value' => $today,
                    'order' => 'ASC',                
             );
          
            $posts = get_posts( $args);
            // if (count($posts) < 3) {
            //     // while(count($posts) < 4) { 
            //     $args = array(
            //         'posts_per_page' => 7, 
            //         'category_name' => 'programs, events',
            //         'meta_key'	=> 'start', 
            //         'meta_type' => 'DATETIME',
            //         'meta_compare' => '>=',
            //         'meta_value' => $today,
            //         'order' => 'ASC',
            //     );
                
            //         $posts = get_posts($args); 
            //     // }
            // }             
            foreach($posts as $post){ setup_postdata($post);
        ?>
        <a class="tile post-single <?php if (is_front_page()) echo 'post-single--big'; ?>" style="background-image: url(<?php echo get_the_post_thumbnail_url() ?>);" href="<?php echo get_permalink(); ?>">
       
           <?php
            if ( in_category('events') ) {
                echo '<span class="post__tag">' . LangDicts::$dict['Event'] . '</span><h2 class="post__title post__title--event">';
            }
            else
                echo
                '<h2 class="post__title">';
            ?>
                <?php echo get_the_title()?>
            </h2>
            <span class="post__btn btn">
                <?php
                    $dateformatstring = "j F";
                    $unixtimestamp = strtotime(get_field('start'));
                    $year = date('Y');
                    $start_year = date_i18n('Y', $unixtimestamp);
                if ( in_category('programs') ) {
                //    echo get_field('current');
                    if ($start_year === $year){
                        echo ' ' . date_i18n($dateformatstring, $unixtimestamp) . '';
                    }
                    else{
                        echo date_i18n('j F Y', $unixtimestamp);
                    }
                }
                else {
                    if ($start_year === $year){ 
                        echo date_i18n($dateformatstring, $unixtimestamp);
                    }
                    else{
                        echo date_i18n('j F Y', $unixtimestamp);
                    }
                    // echo ' ' . LangDicts::$dict['at'] . '&nbsp;';
                    // echo get_post_meta( $post->ID, "time", true );
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

