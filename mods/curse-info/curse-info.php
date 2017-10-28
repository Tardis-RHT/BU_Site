<div class="wrapper curse-info">
    <div class="info-row info-row--first">
        <div class="info-wrap--lg">
            <p class="info__main info__main--color">
            <?php 
            
            $date = strtotime(get_post_meta('start' ));
            echo date_i18n('d F', $date );

            ?>
                <!-- 30 октября -->
                <span class="info__sub">
                    старт
                </span>
            </p>
        </div>
        <div class="info-wrap--lg">
            <p class="info__main">
            <?php echo get_post_meta( $post->ID, 'time', true ); ?>
                <!-- 19:00-21:00 -->
                <span class="info__sub">
                <?php echo get_post_meta( $post->ID, 'days', true ); ?>
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