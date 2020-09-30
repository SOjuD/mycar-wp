<?php

$slider_template = '';

foreach (get_field('photo-gallery', 226) as $elem) {
    $slider_template .= "<div class='swiper-slide'>
                            <img src='" . $elem['sizes']['large'] . "' alt='$title' loading='lazy'/>
                        </div>";
};
?>
<section class="ourPartners">
    <div class="container">
        <div class="secTitle">Наши партнеры</div>
        <div class="row">
            <div class="col-12">
                <div class="swiper-wrap ourPartners-carousel">
                    <div class="swiper-container swiper-ourPartners">
                        <div class="swiper-wrapper">
                            
                            <?php echo $slider_template; ?>
                        </div>
                        
                    </div>
                    <div class="swiper-button-prev"><?php get_template_part( './icons/left' ) ?></div>
                    <div class="swiper-button-next"><?php get_template_part( './icons/left' ) ?></div>
                </div>
            </div>
        </div>
    </div>
</section>