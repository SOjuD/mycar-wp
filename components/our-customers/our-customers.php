<?php

$slider_template = '';

foreach (get_field('photo-gallery', 162) as $elem) {
    $slider_template .= "<div class='swiper-slide'>
                            <a class='ourCustomers-slide' href='" . $elem['url'] . "' data-fancybox='ourCustomers-images' >
                                <img src='" . $elem['sizes']['large'] . "' alt='$title' loading='lazy'/>
                            </a>
                        </div>";
};
?>
<section class="ourCustomers">
    <div class="container">
        <div class="secTitle">Наши покупатели</div>
        <div class="row">
            <div class="col-12">
                <div class="swiper-wrap ourCustomers-carousel">
                    <div class="swiper-container swiper-ourCustomers">
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