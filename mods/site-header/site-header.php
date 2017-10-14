<header class="wrapper header">
    <a href="<?php get_home_url() ?>" class="logo">
        <img src="<?php echo get_template_directory_uri() ?>/img/logo.png" alt="Bionic University" class="logo__img">
    </a>
    <ul class="languages">
        <li class="languages__item">
            <a href="#rus" class="languages__is-current">Рус</a>
        </li>
        <li class="languages__item">
            <a href="#ukr">Укр</a>
        </li>
        <li class="languages__item">
            <a href="#eng">Eng</a>
        </li>
    </ul>
    <nav class="main-menu">
        <?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
    </nav>
</header>