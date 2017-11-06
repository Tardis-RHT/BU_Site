<?php get_template_part('mods/site-header/site', 'header'); ?>
 
<?php $tags = get_tags();
$html .= '<div class="wrapper tags-container">';
    foreach ($tags as $tag){
        global $post;
        $slug = $tag->slug;
        $args = array(
            'posts_per_page' => 0, 
            'category_name' => 'programs', 
            'tag' => $slug, 
            'meta_key'	=> 'level', 
            'orderby'	=> 'meta_value_num', 
            'order' => 'ASC' );
        $posts = get_posts( $args );

        
        $html .= '<div class="post-container">';
        $html .= "<h2 class='tag'>";
        $html .= "{$tag->name}</h2>";
        
        
        foreach($posts as $post){ 
            setup_postdata($post);
            $post_title = get_the_title();
            $post_thumb = get_the_post_thumbnail_url();
            $post_link = get_permalink();
            $level = get_field('level');

            $more = LangDicts::$dict['More'];

            $dateformatstring = "j F";
            $unixtimestamp = strtotime(get_field('start'));
            $date = date_i18n($dateformatstring, $unixtimestamp);
            $full_date = date_i18n('j F Y', $unixtimestamp);
            $year = date('Y');
            $start_year = date_i18n('Y', $unixtimestamp);

            $html .= "<a class='tile post-single' style='background-image: url({$post_thumb})' href='{$post_link}'>";
            $html .= "<h2 class='post__title'>{$post_title}{$level}</h2>";
            $html .= "<span class='post__btn btn'>";
            if ($start_year === $year){
                $html .= "{$date}";
            }
            else{
                $html .= "{$full_date}";
            }
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