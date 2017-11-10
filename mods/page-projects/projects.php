<?php get_template_part('mods/site-header/site', 'header'); ?>
    <div class="flex-content">
        <div class="projects-container wrapper">
        <?php 
            global $post;
            $args = array (
                'posts_per_page' => 0, 
                'category_name' => 'projects', 
                'order' => 'ASC'
            );
            $projects = get_posts( $args );
            foreach( $projects as $post ){ setup_postdata($post);
        ?>
            <a href="<?php if (get_field("link")) echo get_field("link");else echo get_permalink(); ?>" class="single-project">
                <div class="project__img-container">
                    <img class="project__img" <?php buTheme_src_set() ?>>
                </div>
                <div class="project-info">
                    <h2 class="project__title">
                        <?php echo get_the_title() ?>
                    </h2>
                    <p class="project__about">
                        <?php echo the_excerpt() ?>
                    </p>
                    <span class="project__more btn">
                        <?php echo LangDicts::$dict['More']; ?>
                    </span>
                </div>
            </a>
            <?php
                }
                wp_reset_postdata();
            ?>
        </div>
    </div>
<?php get_template_part('mods/site-footer/site', 'footer'); ?>