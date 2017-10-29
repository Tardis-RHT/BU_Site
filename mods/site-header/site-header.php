<header class="header-container">
    <div class="wrapper header">
        <?php buTheme_custom_logo() ?>
        <?php qtranxf_generateLanguageSelectCode($type='text'); ?>
        <nav class="main-menu">
            <?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
        </nav>
    </div>
</header>