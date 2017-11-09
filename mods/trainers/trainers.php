<p>Teacher:</p>
<ul>
    <?php
        $teachers = get_field('teacher');
        foreach($teachers as $teacher){
        // print_r($teacher);
            echo '<li>' . $teacher[user_firstname] . ' ';
            echo $teacher[user_lastname] . '</li>';
            echo '<li>' . $teacher[user_avatar] . '</li>';
            echo '<li>' . $teacher[user_description] . '</li>';
        }
    ?>
</ul>