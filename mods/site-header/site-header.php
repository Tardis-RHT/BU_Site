<header class="header-container">
    <div class="wrapper header">
    <?php buTheme_custom_logo() ?>
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
    </div>
    
</header>