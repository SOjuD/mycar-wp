<?php global $customizer_params; ?>

<section class="single-map">
    <div class="container">
        <div class="secTitle">
            Место осмотра автомобиля
            <div class="p1_semi"><?php echo $customizer_params['adress'] ?></div>
        </div>
        <div class="single-map-wrap">
            <?php echo $customizer_params['map'] ?>
        </div>
    </div>
</section>