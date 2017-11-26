<?php if (get_field('teacher') && (count(get_field('teacher')) == 1)){ ?>

<div class="trainers-container">
    <?php $teachers = get_field('trainer');
        foreach($teachers as $teacher){
            // print_r($teacher);
            echo '<div class="trainer">' 
                . $teacher[user_avatar] . '
                <span class="trainer__position">' . LangDicts::$dict['teacher'] . '</span>
                <h3 class="trainer__name">' . $teacher[user_firstname] . ' ' . $teacher[user_lastname] . '</h3>
                <p class="trainer__work">' . get_user_meta($teacher[ID], placeOfWork, true ) . '</p>
                <div class="trainer__about">' . $teacher[user_description] . '
                </div>
            </div>';
        }
    ?>
</div>

<?php } ?>