<?php get_template_part('mods/site-header/site', 'header'); ?>
 
<?php $tags = get_tags();
$html .= '<div class="centered wrapper padding-top">';
    foreach ($tags as $tag){
        global $post;
        $slug = $tag->slug;
        $args = array('posts_per_page' => 0, 'category_name' => 'programs', 'tag' => $slug, 'meta_key'	=> 'start', 'orderby'	=> 'meta_value_num', 'order' => 'DESC' );
        $posts = get_posts( $args );

        
        $html .= '<div class="post-container">';
        $html .= "<h2 class='tag'>";
        $html .= "{$tag->name}</h2>";
        
        
        foreach($posts as $post){ 
            setup_postdata($post);
            $post_title = get_the_title();
            $post_thumb = get_the_post_thumbnail_url();
            $post_link = get_permalink();
            $program_start = get_post_meta( $post->ID, "start", true );
            $html .= "<a class='tile post-single' style='background-image: url({$post_thumb})' href='{$post_link}'>";
            $html .= "<h2 class='post__title'>{$post_title}</h2>";
            $html .= "<span class='post__btn btn'>Старт {$program_start}";
            $html .= "<span class='post__btn--add btn'>Подробнее</span>";
            $html .= "</span></a>";
        }
        $html .= '</div></div>';

        wp_reset_postdata();
    }
    echo $html; 
?>  
<?php get_template_part('mods/site-footer/site', 'footer'); ?>