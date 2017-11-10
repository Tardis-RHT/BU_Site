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
            // elseif(is_page( 'events' ) ){
            //     $args = array(
            //         'posts_per_page' => 4, 
            //         'category_name' => 'programs, events',
            //         'post__not_in' => array( $post->ID ),
            //         'meta_key'	=> 'start',
            //         'meta_type' => 'DATETIME',
            //         'meta_compare' => '>=',
            //         'meta_value' => $today,
            //         'orderby' => 'meta_value', 
            //         'order' => 'ASC' );
            // }
            else 
            // $args = array(
            //         'posts_per_page' => 7, 
            //         'category_name' => 'programs, events',
            //         'order' => 'ASC',
            //         'orderby' => 'meta_value', 
            //         'meta_key'	=> 'current', 
            //         'meta_compare' => '==',
            //         'meta_value' => '1',

            //         // 'posts_per_page' => 7, 
            //         // 'category_name' => 'programs, events',
            //         // 'meta_key'	=> 'start', 
            //         // 'meta_type' => 'DATETIME',
            //         // 'meta_compare' => '>=',
            //         // 'meta_value' => $today,
            //         // 'order' => 'ASC',                
            //  );
             $args = array(
                'posts_per_page' => 7, 
                'category_name' => 'programs, events',
                'meta_query' => array(
                    'relation' => 'OR',
                    array(
                        'key' => 'start',
                        'type' => 'DATETIME',
                        'compare' => '>=',
                        'value' => $today,
                    ),
                    array(
                        'key' => 'current',
                        'value' => '1',
                        'compare' => '==',
                    ),
                ),
                'orderby' => 'meta_value',
                'order' => 'ASC',
            );

            $posts = get_posts( $args);
           
            
             foreach($posts as $post){ setup_postdata($post);
       
            get_template_part('mods/post/post-tile');


        }
        wp_reset_postdata();

    //     if (count($posts) < 3) {
    //         // while(count($posts) < 4) { 
    //         $args1 = array(
    //             'posts_per_page' => 7, 
    //             'category_name' => 'programs, events',
    //             'meta_key'	=> 'start', 
    //             'meta_type' => 'DATETIME',
    //             'meta_compare' => '>=',
    //             'meta_value' => $today,
    //             'order' => 'ASC',
    //         );
            
    //             $posts1 = get_posts($args1); 
            
    //     }             
    //     foreach($posts1 as $post1){ setup_postdata($post1);
    //         get_template_part('mods/post/post-tile');
    // }
    // wp_reset_postdata();
    ?>
    
    </div>
    
</section>

