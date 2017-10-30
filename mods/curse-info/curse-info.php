<div class="wrapper curse-info">
    <div class="info-row info-row--first">
        <div class="info-wrap--lg">
            <p class="info__main info__main--color">
            
    <!-- getimagesize($_SERVER['DOCUMENT_ROOT'].'/photo/img1.jpg'); -->
            <?php 
    if(get_locale() == 'ru_RU') include(dirname(__FILE__).'./languages/ru.php');
    elseif(get_locale() == 'en_US') include(dirname(__FILE__).'./languages/eng.php');
    elseif(get_locale() == 'uk') include(dirname(__FILE__).'./languages/ukr.php');
    ?>      
            <?php 
            include './mods/ru.php';
            // include_once(dirname(__FILE__).'/../../languages/ukr.php');
                // $dateformatstring = "j F";
                // $unixtimestamp = strtotime(get_field('start'));
                // $gmt = true;
                // echo date_i18n($dateformatstring, $unixtimestamp, $gmt);
                the_field('start');
            ?>
                <!-- 30 октября -->
                <span class="info__sub">
                <?php
                // include_once(dirname(__FILE__).'/../filename.php');
                
                echo LangDicts::$dict['Contacts'];
                 echo $start ?>
                </span>
            </p>
        </div>
        <div class="info-wrap--lg">
            <p class="info__main">
            <?php echo get_post_meta( $post->ID, 'time', true ); ?>
                <!-- 19:00-21:00 -->
                <span class="info__sub">
                <?php the_field('week'); ?>
                    <!-- пн, ср, пт -->
                </span>
            </p>
        </div>
    </div>
    <div class="info-row">
        <div class="info-wrap--lg">
            <p class="info__main info__main--center">
            <?php echo get_post_meta( $post->ID, 'hours', true ); ?>
                <!-- 46 -->
                <span class="info__sub">
                    часов
                </span>
            </p>
        <!-- </div>
        <div class="info-wrap--sm"> -->
            <p class="info__main info__main--center">
            <?php echo get_post_meta( $post->ID, 'month', true ); ?>
                <!-- 1.5 -->
                <span class="info__sub">
                    месяца
                </span>
            </p>
        </div>
        <div class="info-wrap--lg">
            <p class="info__main">
            <?php echo get_post_meta( $post->ID, 'price', true ); ?>
                <!-- 6 200 грн -->
                <span class="info__sub">
                    стоимость курса
                </span>
            </p>
        </div>
    </div>
</div>