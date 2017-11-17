<?php if (get_field('teacher')){ ?>

<!-- <p><?php echo LangDicts::$dict['teachers'] ?></p>-->
<?php echo $teacher ?>
<div class="trainers-container">
    <?php $teachers = get_field('teacher');
        foreach($teachers as $teacher){
            echo '<div class="trainer">' 
                . $teacher[user_avatar] . '
                <span class="trainer__position">Тренер</span>
                <h3 class="trainer__name">' . $teacher[user_firstname] . ' ' . $teacher[user_lastname] . '</h3>
                <p class="trainer__work">' . get_user_meta($teacher[ID], placeOfWork, true ) . '</p>
                <div class="trainer__about">' . $teacher[user_description] . '
                </div>
            </div>';
    // <div class="trainer">
    //     <img class="trainer__photo" src="https://secure.gravatar.com/avatar/ace8e80e05aaf36e3752d8a202ec87c3?s=96&d=mm&r=g" alt="">
    //     <span class="trainer__position">Тренер</span>
    //     <h3 class="trainer__name">Константин Константиновский</h3>
    //     <p class="trainer__work">Software Engineer @ Infopulse</p>
    //     <div class="trainer__about">
    //         Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam quia cumque vero autem cum, obcaecati eos itaque quasi! Quos ea, excepturi voluptatum magni sint nam totam minima repudiandae natus omnis.
    //     </div>
    // </div>
        }
    ?>
</div>

<?php } ?>