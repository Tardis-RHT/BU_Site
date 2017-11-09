<div class="wrapper curse-info">
    <div class="info-row info-row--first">
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
        <div class="info-wrap--lg">
            <p class="info__main">
            <?php echo get_post_meta( $post->ID, 'time', true ); ?>
                <span class="info__sub">
                    <?php                    
                    $week  = get_field('week');
                    $week_names = array("пн", "вт", "ср", "чт", "пт", "сб", "вс");
                    $replace = array(
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
                        elseif ($hour%10 >= 5 || $hour%10 == 0) echo LangDicts::$dict['Hour(a)'];
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
                        elseif (substr($month, -2) == ".5" || substr($month, -2) == ",5") echo LangDicts::$dict['Month(g)'];
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
                    if (get_field('currency') == 'UAH') $currency = LangDicts::$dict['UAH'];
                    else $currency = get_field('currency');
                        
                    if( $value === 'month_price' ){
                        $price = get_post_meta( $post->ID, 'month_price', true ); 
                        $price_fin = number_format($price, 0, ',', ' ');

                        echo $price_fin . ' ' . $currency;
                    }     
                    else{
                        $price = get_post_meta( $post->ID, 'price_all', true ); 
                        $price_fin = number_format($price, 0, ',', ' ');

                        echo $price_fin . ' ' . $currency;
                    }
                    
                ?>
                <span class="info__sub">
                    <?php 
                        if( $value === 'month_price' ) echo LangDicts::$dict['ProgramMonthlyPrice_text'];
                        else echo LangDicts::$dict['ProgramPrice_text'];
                    ?>
                </span>
            </p>
        </div>
    </div>
</div>