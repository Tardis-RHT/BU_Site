<div class="curse-header form-img">
    <div class="curse-header_container">
        <img class="curse__post-img" <?php buTheme_src_set() ?> >
        <form action="<?php echo get_template_directory_uri(); ?>/mods/form/action.php" class="form" id="mainForm">
        <div>
            <label for="name" class="form__label">Имя 
                <span class="label--required">*</span>
            </label>
            <input type="text" class="form__input" id="name" placeholder="Тарас" required>
        </div>    
        <div>
            <label for="surname" class="form__label">Фамилия 
                <span class="label--required">*</span>
            </label>
            <input type="text" class="form__input" id="surname" placeholder="Шевченко" required>
        </div>
        <div>
            <label for="tel" class="form__label">Телефон 
                <span class="label--required">*</span>
            </label>
            <input type="tel" class="form__input" id="tel" placeholder="+38(050)123-45-67" 
                pattern="\D[0-9]{3}\s\D[0-9]{2}\D\s[0-9]{3}\s\D\s[0-9]{2}\s\D\s[0-9]{2}" required>
        </div>
        <div>
            <label for="email" class="form__label">E-mail 
                <span class="label--required">*</span>
            </label>
            <input type="email" class="form__input" id="email" placeholder="your@email.com" required>
        </div>
            <button type="submit" class="form__btn btn btn--action">Записаться </button>

            <div class="form-thankyou">
                <button class="close-btn">&#9747;</button>
                <h3>Ваша заявка принята</h3>
                <p>Мы свяжемся с Вами в ближайшее время для уточнения всех деталей</p>
            </div>
        </form>
    </div>				
</div>