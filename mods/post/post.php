<section class="wrapper">
    <?php 
        if (is_front_page()) echo '<div class="post-container main">';
        else echo '<div class="post-container">';

        if (in_category('news')) echo '<h2 class="tag">' . LangDicts::$dict['curse_nabor_text'] . '</h2>';

        // Staring main loop
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
        elseif(in_category( 'programs' ) || in_category( 'events' ) ){
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
            'posts_per_page' => 7, 
            'category_name' => 'programs, events',
            
            'meta_query' => array (
                'relation' => 'AND',
                'true' => array (
                    'key' => 'current',                      
                    'value' => '1',
                    'compare' => '==',
                ),
                'date' => array (
                    'key' => 'start',
                    'type' => 'DATETIME',
                ),
            ),
            'orderby' => array( 
                'date' => 'ASC',
            ),    
        );
        $posts = get_posts( $args);
        
        foreach($posts as $post){ 
            setup_postdata($post);
            get_template_part('mods/post/post-tile');
        }
        wp_reset_postdata();
        // End of main loop

        // Starting new loop for sorting and showing Checked Programs on the main page
        if (is_front_page() && count($posts) < 7) {
            $post_more = 7 - count($posts);
            $args = array(
                'posts_per_page' => $post_more, 
                'meta_query' => array (
                    'relation' => 'AND',
                    'false' => array (
                        'key' => 'current',                      
                        'value' => '0',
                        'compare' => '==',
                    ),
                    'false_date' => array (
                        'key' => 'start',
                        'type' => 'DATETIME',
                        'compare' => '>=',
                        'value' => $today,
                    ),
                ),
                'orderby' => array( 
                    'false_date' => 'ASC',
                ),   
            );
            $posts = get_posts( $args);
            foreach($posts as $post){ 
                setup_postdata($post);
                get_template_part('mods/post/post-tile');
            }
            wp_reset_postdata();
        }
        // End of new loop for sorting and showing Checked Programs on the main page

        // Starting new loop for sorting and showing ADDITIONAL Programs posts in the page News
        if(in_category('news') && count(($posts) < 4) ){
            $post_count = 4 - count($posts);
            $args = array(
                'posts_per_page' => $post_count,
                'category_name' => 'programs',
                'tag__not_in' => $tag_ids,
                'meta_key'	=> 'start',
                'meta_type' => 'DATETIME',
                'meta_compare' => '>=',
                'meta_value' => $today,
                'orderby' => 'meta_value',                    
                'order' => 'ASC',
            );
        $posts = get_posts( $args);
        foreach($posts as $post){ setup_postdata($post);
        get_template_part('mods/post/post-tile');
        }wp_reset_postdata();}
        // End of sorting and showing Programs posts in the page News

        ?>   
    </div>    
</section>