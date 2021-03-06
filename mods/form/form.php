<div class="post-img form-img">
    <div class="post-img__container">
        <img class="post-img__inner" <?php buTheme_src_set() ?> >
        <form 
            action="<?php echo get_template_directory_uri(); ?>/thankyou/" 
            method="GET"
            target="_blank"
            class="form" id="mainForm">
            <div>
                <label for="name" class="form__label">
                    <?php echo LangDicts::$dict['Name'];?>
                </label>
                <input type="text" class="form__input" id="name" name="name"
                    placeholder="<?php echo LangDicts::$dict['exp_name'];?>" required>
            </div>    
            <div>
                <label for="surname" class="form__label">
                    <?php echo LangDicts::$dict['Surname'];?>
                </label>
                <input type="text" class="form__input" id="surname" name="surname"
                    placeholder="<?php echo LangDicts::$dict['exp_surname'];?>" required>
            </div>
            <div>
                <label for="tel" class="form__label">
                    <?php echo LangDicts::$dict['Phone'];?>
                </label>
                <input type="tel" class="form__input" id="tel" name="tel" placeholder="+38(___)___-__-__" 
                    pattern="\D[0-9]{2}\s\D[0-9]{3}\D\s[0-9]{3}\s\D\s[0-9]{2}\s\D\s[0-9]{2}" required>
            </div>
            <div>
                <label for="email" class="form__label">
                <?php echo LangDicts::$dict['Email'];?>
                </label>
                <input type="email" class="form__input" id="email" name="email" placeholder="your@email.com" required>
            </div>
            <input type="text" hidden value="<?php echo get_the_title() ?>" name="title" id="title">
            <button type="submit" class="form__btn btn btn--action"><?php echo LangDicts::$dict['Apply'];?> </button>
        </form>
    </div>				
</div>

<script>
    var error_text = '<?php echo LangDicts::$dict['error_text'];?>';
    var current_url = '&<?php 
        $url = get_the_title();
        $current_url=str_replace(" ","",$url);
        echo $current_url;?>';
</script>