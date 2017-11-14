<a class="tile post-single <?php if (is_front_page()) echo 'post-single--big'; ?>" style="background-image: url(<?php echo get_the_post_thumbnail_url($post->ID, 'medium') ?>);" href="<?php echo get_permalink(); ?>">
       
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
        }
        ?>
        <span class="post__btn--add btn">
            <?php echo LangDicts::$dict['More'];?>
        </span>
    </span>        
</a>