<?php 
global $customizer_params, $rate, $credit_percent, $leasing_percent;

$price = get_field("price");

$priceBYN = round(get_field("price") * $rate);

$min_pay_leasing = round(($priceBYN * 0.6) * (($credit_percent * pow((1 + $credit_percent), 36)) / (pow((1 + $credit_percent), 36) - 1)));

$min_pay_credit = round(($priceBYN * 0.6) * (($leasing_percent * pow((1 + $leasing_percent), 60)) / (pow((1 + $credit_percent), 60) - 1)));
?>

<div class="col-12 col-md-6 col-lg-7">
    <div class="row single-params">
        <?php get_template_part( './components/single-params-list/single-params-list' ) ?>
        <div class="col-12 col-md-5 d-none d-lg-block">
            <div class="c1 adress">
                <?php echo $customizer_params['adress'] ?>
            </div>
            <a href="tel:<?php echo strPhone( $customizer_params['phone-a1'] ) ?>" class="phone c1"><?php echo $customizer_params['phone-a1'] ?></a>
            <a href="tel:<?php echo strPhone( $customizer_params['phone-mts'] ) ?>" class="phone c1"><?php echo $customizer_params['phone-mts'] ?></a>
            <a href="tel:<?php echo strPhone( $customizer_params['phone-life'] ) ?>" class="phone c1"><?php echo $customizer_params['phone-life'] ?></a>
        </div>
        <div class="col-12 col-lg-7">
            <button class="mainButton_large_light modal-trigger" data-target="modalForm" data-description="Получить консультацию <?php echo $title; ?>">Получить консультацию</button> 
            <a href="<?php echo get_page_link( 21 ); ?>" class="mainButton_large">Купить в лизинг от <?php echo $min_pay_leasing ." р/мес"; ?></a> 
            <a href="<?php echo get_page_link( 19 ); ?>" class="mainButton_large">Купить в кредит от <?php echo $min_pay_credit ." р/мес"; ?></a> 
        </div>
        <div class="col-12 col-lg-5">
            <?php if( get_field('diagnosticheskaya_karta') ): ?>
                <a href="<?php the_field('diagnosticheskaya_karta') ?>" class="mainButton_invert">Отчет о диагностике</a> 
            <?php endif; ?>
            <button class="mainButton_invert modal-trigger" data-target="modalForm" data-description="Предложить авто в зачет">Предложить авто в зачет</button> 
        </div>
    </div>
</div>