<div class="trainersArr-container wrapper post__content">
    <?php $teachers = get_field('trainer');
        foreach($teachers as $teacher){
            echo '<div class="trainer">' 
                . $teacher[user_avatar] . '
                <div>
                    <span class="trainer__position">' . LangDicts::$dict['teacher'] . '</span>
                    <h3 class="trainer__name">' . $teacher[user_firstname] . ' ' . $teacher[user_lastname] . '</h3>
                    <p class="trainer__work">' . get_user_meta($teacher[ID], placeOfWork, true ) . '</p>
                    <div class="trainer__about">' . $teacher[user_description] . '
                    </div>
                </div>
            </div>';
        }
    ?>
</div>