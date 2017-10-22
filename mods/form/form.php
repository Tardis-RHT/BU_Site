<div class="curse-header form-img">
    <div class="curse-header_container">
        <img class="curse__post-img" <?php buTheme_src_set() ?> >
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
            <input type="tel" class="form__input" id="tel" placeholder="+38(050)123-45-67" 
                pattern="\D[0-9]{3}\s\D[0-9]{2}\D\s[0-9]{3}\s\D\s[0-9]{2}\s\D\s[0-9]{2}" required>
            <label for="email" class="form__label">E-mail 
                <span class="label--required">*</span>
            </label>
            <input type="email" class="form__input" id="email" placeholder="your@email.com" required>
            <button type="button" class="form__btn btn btn--action">Записаться </button>

        </form>
    </div>				
</div>