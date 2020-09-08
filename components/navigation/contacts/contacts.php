<?php global $customizer_params; ?>

<ul id="slide-out-contacts" class="sidenav mobileContacts">
    <li class="mobileContacts-item d-flex justify-content-between">
        <div class="p1_semi">A1</div>
        <a href="tel:<?php echo strPhone( $customizer_params['phone-a1'] ) ?>" class="phone c2_semi"><?php echo $customizer_params['phone-a1'] ?></a>
    </li>
    <li class="mobileContacts-item d-flex justify-content-between">
        <div class="p1_semi">MTC</div>
        <a href="tel:<?php echo strPhone( $customizer_params['phone-mts'] ) ?>" class="phone c2_semi"><?php echo $customizer_params['phone-mts'] ?></a>
    </li>
    <li class="mobileContacts-item d-flex justify-content-between">
        <div class="p1_semi">Life</div>
        <a href="tel:<?php echo strPhone( $customizer_params['phone-life'] ) ?>" class="phone c2_semi"><?php echo $customizer_params['phone-life'] ?></a>
    </li>
    <li class="mobileContacts-item d-flex justify-content-start">
        <button class="mainButton modal-trigger" data-target="modalForm" data-description="Заказать звонок">Заказать звонок</button>
    </li>
    <li class="adress d-flex align-items-center mobileContacts-item">
        <?php get_template_part('./icons/map') ?>
        <div class="c2_semi">
            <?php echo $customizer_params['adress'] ?>
        </div>
    </li>
    <li class="time d-flex align-items-center mobileContacts-item">
        <?php get_template_part('./icons/clock') ?>
        <div class="c2_semi">
            <?php echo $customizer_params['time'] ?>
        </div>
    </li>
    <li class="social d-flex align-items-center mobileContacts-item">
        <a href="<?php echo $customizer_params['instagram'] ?>" target="_blank" role="author">
            <?php get_template_part('./icons/instagram') ?>
        </a>
    
    </li>
</ul>