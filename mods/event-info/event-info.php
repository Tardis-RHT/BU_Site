<div class="wrapper curse-info">
    <div class="event-info__item">
        <p class="info__main info__main--color">    
            <?php
                $dateformatstring = "j F";
                $unixtimestamp = strtotime(get_field('start'));
                // $gmt = true;
                echo date_i18n($dateformatstring, $unixtimestamp);
                // the_field('start');
            ?>
            <span class="info__sub">
                <?php echo LangDicts::$dict['Start'];?>
            </span>
        </p>
    </div>
    <div class="event-info__item">
        <p class="info__main">
        <?php echo get_post_meta( $post->ID, 'time', true ); ?>
            <span class="info__sub">
                Дни
            </span>
        </p>
    </div>
    <div class="event-info__item event-info__btn">
        <a href="<?php the_field('btn_url'); ?>" class="btn btn--action">
            <?php echo LangDicts::$dict['Apply']; ?>            
        </a>
    </div>
</div>