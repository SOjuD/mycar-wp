<?php global $customizer_params; ?>
        <footer id="contacts" class="footer contacts">
            <div class="container">
                <div class="row">
                    <div class="col-12 d-none d-lg-block">
                        <?php get_template_part('./components/navigation/navigation-primary/navigation-primary') ?>
                    </div>
                    <div class="col-12 col-md-4 col-lg-3">
                        <div class="p1_semi contacts-title">Телефоны</div>
                        <div class="c1 d-flex align-items-baseline">
                            <a href="tel:<?php echo strPhone( $customizer_params['phone-a1'] ) ?>" class="phone c1_semi"><?php echo $customizer_params['phone-a1'] ?></a> 
                            A1
                        </div>
                        <div class="c1 d-flex align-items-baseline">
                            <a href="tel:<?php echo strPhone( $customizer_params['phone-mts'] ) ?>" class="phone c1_semi"><?php echo $customizer_params['phone-mts'] ?></a> 
                            MTC
                        </div>
                        <div class="c1 d-flex align-items-baseline">
                            <a href="tel:<?php echo strPhone( $customizer_params['phone-life'] ) ?>" class="phone c1_semi"><?php echo $customizer_params['phone-life'] ?></a> 
                            Life
                        </div>
                    </div>
                    <div class="col-12 col-md-4 col-lg-3 time">
                        <div class="p1_semi contacts-title">Время работы</div>
                        <div class="c1">
                            <?php echo $customizer_params['time'] ?>
                        </div>
                    </div>
                    <div class="col-12 col-md-4 col-lg-3 adress">
                        <div class="p1_semi contacts-title">Адрес</div>
                        <div class="c1">
                            <?php echo $customizer_params['adress'] ?>
                        </div>
                        <div class="p1_semi contacts-title">Социальные сети:</div>
                        <a href="<?php echo $customizer_params['instagram'] ?>" class="instaIcon">
                            <?php get_template_part('./icons/instagram'); ?>
                        </a>
                    </div>
                    <div class="col-12 col-md-4 col-lg-3">
                        <div class="p1_semi contacts-title">Юридический адрес</div>
                        <div class="c1">
                            <?php echo $customizer_params['jur-adress'] ?>
                        </div>
                    </div>
                    <div class="col-12 dev-by d-flex justify-content-center">
                        <div class="c1">Сайт разработан 
                            <a class="c1" href="http://mediarama.by/">mediarama.by</a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600;700&display=swap" rel="stylesheet">
    </body>
    <?php 
        get_template_part('./components/navigation/contacts/contacts');
        get_template_part('./components/navigation/navigation-mobile/navigation-mobile');
        get_template_part('./components/modal/modal');
        wp_footer(); 
    ?>
</html>