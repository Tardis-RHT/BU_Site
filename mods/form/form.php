<div class="curse-header form-img">
    <div class="curse-header_container">
        <img class="curse__post-img" alt="Post logo image"
            <?php $thumb_id = get_post_thumbnail_id();?>
            src="<?php wp_get_attachment_image_url( $thumb_id ) ?>"
            srcset="<?php echo wp_get_attachment_image_srcset( $thumb_id, 'full' ) ?>"
            sizes="<?php echo wp_get_attachment_image_sizes( $thumb_id, 'full' ) ?>"                    
        >
        <form action="" class="form">
            <label for="name" class="form__label">Имя 
                <span class="label--required">*</span>
            </label>
            <input type="text" class="form__input" id="name" placeholder="Тарас" required>
            <label for="surname" class="form__label">Фамилия 
                <span class="label--required">*</span>
            </label>
            <input type="text" class="form__input" id="surname" placeholder="Шевченко" required>
            <label for="tel" class="form__label">Телефон 
                <span class="label--required">*</span>
            </label>
            <input type="tel" class="form__input" id="tel" placeholder="+38(050)123-45-67" required>
            <label for="email" class="form__label">E-mail 
                <span class="label--required">*</span>
            </label>
            <input type="email" class="form__input" id="email" placeholder="your@email.com" required>
            <input type="submit" class="form__btn btn btn--action" value="Записаться">

        </form>
    </div>				
</div>