<?php get_header(); ?>
<?php global $customizer_params; ?>
<main>
    <section class="contactsPage">
        <div class="container">
            <div class="secTitle mb-4">Контакты</div>
            <div class="row ">
            <div class="col-12 col-md-3 col-lg-3 col-xl-4 mb-4">
                <div class="p1_semi mb-2"> Адрес </div>
                <div class="c1">
                    <?php echo $customizer_params['adress'] ?>
                </div>
                    <div class="p1_semi contacts-title my-4">Телефоны</div>
                        <div class="c1 d-flex align-items-baseline">
                            <a href="tel:<?php echo strPhone( $customizer_params['phone-a1'] ) ?>" class="phone p1_semi pr-1"><?php echo $customizer_params['phone-a1'] ?></a>
                            A1
                        </div>
                        <div class="c1 d-flex align-items-baseline">
                            <a href="tel:<?php echo strPhone( $customizer_params['phone-mts'] ) ?>" class="phone p1_semi pr-1"><?php echo $customizer_params['phone-mts'] ?></a>
                            MTC
                        </div>
                        <div class="c1 d-flex align-items-baseline">
                            <a href="tel:<?php echo strPhone( $customizer_params['phone-life'] ) ?>" class="phone p1_semi pr-1"><?php echo $customizer_params['phone-life'] ?></a>
                            Life
                        </div>
                        <div class="p1_semi mb-2 mt-4"> Время работы 
                        </div>
                    <div class="p1_semi">
                    <?php echo $customizer_params['time'] ?>
                
                    </div>
                    <div class="p1_semi contacts-title  mb-2 mt-4">Юридический адрес</div>
                            <div class="c1 ">
                                <?php echo $customizer_params['jur-adress'] ?>
                            </div>
                  
                  
                </div>
            <div class="col-12 col-md-6 col-lg-6 col-xl-7  map-style"><?php echo $customizer_params['map'] ?></div>
            </div>
        
            
        </div>
    </section>
</main>
<?php get_footer(); ?>