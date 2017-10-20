<div class="curse-header">
    <div class="curse-header_container">
        <img class="curse__post-img" alt="Post logo image"
            <?php $thumb_id = get_post_thumbnail_id();?>
            src="<?php wp_get_attachment_image_url( $thumb_id ) ?>"
            srcset="<?php echo wp_get_attachment_image_srcset( $thumb_id, 'full' ) ?>"
            sizes="<?php echo wp_get_attachment_image_sizes( $thumb_id, 'full' ) ?>"                    
        >
        <form action="" class="form">
            <input type="text" class="form__name">
            <input type="text" class="form__surname">
            <input type="tel" class="form__tel">
            <input type="email" class="form__email">
            <button type="submit" class="form__btn btn--action">Записаться<button>

        </form>
    </div>				
</div>