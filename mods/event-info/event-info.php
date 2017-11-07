<div class="wrapper curse-info">
    <div class="info-wrap--lg">
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
    <div class="nfo-wrap--lg">
        <p class="info__main">
        <?php echo get_post_meta( $post->ID, 'time', true ); ?>
            <span class="info__sub">
                <?php 
                $week  = get_field('week');
                $week_names = array("пн", "вт", "ср", "чт", "пт", "сб", "вс");
                $replace = array (
                    LangDicts::$dict['mon'], 
                    LangDicts::$dict['tue'], 
                    LangDicts::$dict['wed'], 
                    LangDicts::$dict['thu'], 
                    LangDicts::$dict['fri'], 
                    LangDicts::$dict['sat'], 
                    LangDicts::$dict['sun']
                );
                $new_week = implode(", ", str_replace($week_names, $replace, $week));

                echo $new_week; 
                ?>
            </span>
        </p>
    </div>
    <div class="info-wrap--lg event-info__btn-wrap">
        <a href="<?php the_field('btn_url'); ?>" class="btn btn--action event-info__btn">
            <?php echo LangDicts::$dict['Apply']; ?>            
        </a>
    </div>
</div>