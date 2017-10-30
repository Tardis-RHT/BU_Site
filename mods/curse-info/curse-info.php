<div class="wrapper curse-info">
    <div class="info-row info-row--first">
        <div class="info-wrap--lg">
            <p class="info__main info__main--color">    
                <?php
                    // $dateformatstring = "j F";
                    // $unixtimestamp = strtotime(get_field('start'));
                    // $gmt = true;
                    // echo date_i18n($dateformatstring, $unixtimestamp, $gmt);
                    the_field('start');
                ?>
                <span class="info__sub">
                    <?php echo LangDicts::$dict['Start'];?>
                </span>
            </p>
        </div>
        <div class="info-wrap--lg">
            <p class="info__main">
            <?php echo get_post_meta( $post->ID, 'time', true ); ?>
                <span class="info__sub">
                    <?php the_field('week'); ?>
                </span>
            </p>
        </div>
    </div>
    <div class="info-row">
        <div class="info-wrap--lg">
            <p class="info__main info__main--center">
                <?php echo get_post_meta( $post->ID, 'hours', true );?>
                <span class="info__sub">
                    <?php
                        $hour = get_post_meta( $post->ID, 'hours', true );
                        if ($hour == 1) echo LangDicts::$dict['Hour'];
                        elseif ($hour >= 5 && $hour <= 20) echo LangDicts::$dict['Hour(a)'];
                        elseif ($hour%10 == 1) echo LangDicts::$dict['Hour(n)'];
                        elseif ($hour%10 >= 2 && $hour%10 <= 4) echo LangDicts::$dict['Hour(g)'];
                        elseif ($hour%10 >= 5) echo LangDicts::$dict['Hour(a)'];
                    ?>
                </span>
            </p>
        <!-- </div>
        <div class="info-wrap--sm"> -->
            <p class="info__main info__main--center">
            <?php echo get_post_meta( $post->ID, 'month', true ); ?>
                <span class="info__sub">
                    <?php
                        $month = get_post_meta( $post->ID, 'month', true );
                        if ($month == 1) echo LangDicts::$dict['Month'];
                        elseif ($month >= 5 && $month <= 20) echo LangDicts::$dict['Month(a)'];
                        elseif ($month%10 == 1) echo LangDicts::$dict['Month(n)'];
                        elseif ($month%10 >= 2 && $month%10 <= 4) echo LangDicts::$dict['Month(g)'];
                        elseif ($month%10 >= 5) echo LangDicts::$dict['Month(a)'];
                    ?>
                </span>
            </p>
        </div>
        <div class="info-wrap--lg">
            <p class="info__main">
                <?php 
                    $price = get_post_meta( $post->ID, 'price', true ); 
                    $price_fin = number_format($price, 0, ',', ' ');;
                    echo $price_fin;
                    echo LangDicts::$dict['Curency'];
                ?>
                <span class="info__sub">
                    <?php echo LangDicts::$dict['Program price']; ?>
                </span>
            </p>
        </div>
    </div>
</div>