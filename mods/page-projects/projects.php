<?php get_template_part('mods/site-header/site', 'header'); ?>
    <div class="flex-content">
        <div class="projects-container wrapper">
            <a href="#" class="single-project">
                <div class="project__img-container">
                    <img class="project__img" src="<?php echo get_template_directory_uri(); ?>/img/dev-studio.jpg" alt="Bionic Dev Studio">
                </div>
                <div class="project-info">
                    <h2 class="project__title">BU Dev Studio</h2>
                    <p class="project__about">BU DevStudio – комерційний проект з розробки програмного забезпечення, а також один з майданчиків для працевлаштування випускників програм і проектів BIONIC. При BU DevStudio функціонує інтернатура, в якій кращі випускники BIONIC School поглиблюють свої знання з технологій і знайомляться з основами командної розробки на реальних проектах.</p>
                    <span class="project__more btn">
                        <?php echo LangDicts::$dict['More']; ?>
                    </span>
                </div>
            </a>
            <a href="#" class="single-project">
                <div class="project__img-container">
                    <img class="project__img" src="<?php echo get_template_directory_uri(); ?>/img/summer-camp.jpg" alt="Bionic Summer Camp">
                </div>               
                <div class="project-info">
                    <h2 class="project__title">BIONIC Summer Camp</h2>
                    <p class="project__about">Summer Camp – це освітня інтенсивна програма від BIONIC School, яка дозволяє учасникам отримати необхідні знання в обраній IT-технології, засвоїти та практично застосувати їх працюючи в команді над справжнім проектом, а також пройти низку програм та тренінгів з розвитку особистісних навичок та компетенцій.
                        BIONIC Summer Camp - твій перший крок на шляху до успішної кар’єри в IT-індустрії.</p>
                    <span class="project__more btn">
                        <?php echo LangDicts::$dict['More']; ?>
                    </span>
                </div>
            </a>
            <a href="#" class="single-project">
                <div class="project__img-container">
                    <img class="project__img" src="<?php echo get_template_directory_uri(); ?>/img/data-science.jpg" alt="Bionic Data Science">
                </div>               
                <div class="project-info">
                    <h2 class="project__title">Data Science</h2>
                    <p class="project__about">Data Science – це освітня програма від BIONIC School, у межах якої учасники навчаться працювати з великими даними та використовувати Python для аналізу даних та збору статистики.
                        BIONIC Summer Camp - твій перший крок на шляху до успішної кар’єри в IT-індустрії.</p>
                    <span class="project__more btn">
                        <?php echo LangDicts::$dict['More']; ?>
                    </span>
                </div>
            </a>
        </div>


    </div>
<?php get_template_part('mods/site-footer/site', 'footer'); ?>