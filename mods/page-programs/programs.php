<?php get_template_part('mods/site-header/site', 'header'); ?>
 
<?php $tags = get_tags();
$html .= '<div class="centered wrapper padding-top">';
    foreach ($tags as $tag){
        global $post;
        $slug = $tag->slug;
        $args = array('posts_per_page' => 0, 'category_name' => 'programs', 'tag' => $slug, 'meta_key'	=> 'start', 'meta_type' => 'DATETIME', 'orderby'	=> 'meta_value_num', 'order' => 'DESC' );
        $posts = get_posts( $args );

        
        $html .= '<div class="post-container">';
        $html .= "<h2 class='tag'>";
        $html .= "{$tag->name}</h2>";
        
        
        foreach($posts as $post){ 
            setup_postdata($post);
            $post_title = get_the_title();
            $post_thumb = get_the_post_thumbnail_url();
            $post_link = get_permalink();

            $more = LangDicts::$dict['More'];
            $start = LangDicts::$dict['Start'];
            // $program_start = get_post_meta( $post->ID, "start", true );

            $dateformatstring = "j F";
            $unixtimestamp = strtotime(get_field('start'));
            $gmt = true;
            $date = date_i18n($dateformatstring, $unixtimestamp, $gmt);

            $html .= "<a class='tile post-single' style='background-image: url({$post_thumb})' href='{$post_link}'>";
            $html .= "<h2 class='post__title'>{$post_title}</h2>";
            $html .= "<span class='post__btn btn'>{$start} {$date}";
            $html .= "<span class='post__btn--add btn'>{$more}</span>";
            $html .= "</span></a>";
        }
        $html .= '</div>';

        wp_reset_postdata();
    }
    $html .= '</div>';
    echo $html; 
?>  
<?php get_template_part('mods/site-footer/site', 'footer'); ?>