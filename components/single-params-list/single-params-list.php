<?php

$counter = 0;

$colors = '';

foreach (get_field("color") as $color) {
    if ($colors == '') $colors .= $color;
    else $colors .= ", " . $color;
}

?>




<div class="col-12 col-md-7">
    <div class="d-flex align-items-end justify-content-between justify-content-md-start">
        <div class="single-param c2_semi">
            <?php
            get_template_part('./icons/fuel');
            the_field("fuel");
            ?>
        </div>
        <div class="single-param c2_semi">
            <?php
            get_template_part('./icons/engine');
            echo get_field("engine_val")." см3";
            ?>
        </div>
        <div class="single-param c2_semi">
            <?php
            get_template_part('./icons/transmission');
            the_field("gearbox");
            ?>
        </div>
    </div>
    <ul class="single-param-list">
        <li class="single-param-item">
            <span class="single-param-name p1_semi">Год выпуска:</span>
            <span class="single-param-value p1"><?php the_field("year") ?></span>
        </li>
        <li class="single-param-item">
            <span class="single-param-name p1_semi">Тип кузова: </span>
            <span class="single-param-value p1"><?php the_field("body_type") ?></span>
        </li>
        <li class="single-param-item">
            <span class="single-param-name p1_semi">Цвет:</span>
            <span class="single-param-value p1"><?php echo $colors; ?></span>
        </li>
        <?php if ( get_field("vin") ) : ?>
            <li class="single-param-item">
                <span class="single-param-name p1_semi">Vin:</span>
                <span class="single-param-value p1">
                    <?php 
                    $vin = str_split(get_field("vin"));
                    $vin[8]  = '*';
                    $vin[11] = '*';
                    $vin[12] = '*';
                    $vin[13] = '*';
                    $vin[14] = '*';
                    echo implode($vin);
                    ?>
                </span>
            </li>
        <?php endif; ?>
        <li class="single-param-item">
            <span class="single-param-name p1_semi">Пробег:</span>
            <span class="single-param-value p1"><?php the_field("mileage") ?></span>
        </li>
        <li class="single-param-item">
            <span class="single-param-name p1_semi">Кол-во дверей:</span>
            <span class="single-param-value p1"><?php the_field("doors-count") ?></span>
        </li>
        <li class="single-param-item">
            <span class="single-param-name p1_semi">Привод:</span>
            <span class="single-param-value p1"><?php the_field("drive") ?></span>
        </li>
    </ul>
</div>