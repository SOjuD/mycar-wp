<?php

$slider_template = '';

foreach (get_field('photo-gallery', 212) as $elem) {
    $slider_template .= "<div class='swiper-slide'>
                            <a class='ourBlanckReviews-slide' href='" . $elem['url'] . "' data-fancybox='ourBlanckReviews-images' >
                                <img src='" . $elem['sizes']['large'] . "' alt='$title' loading='lazy'/>
                            </a>
                        </div>";
};
?>
<section class="ourBlanckReviews">
    <div class="container">
        <div class="secTitle">Бланки с вашими отзывами</div>
        <div class="row">
            <div class="col-12">
                <div class="swiper-wrap ourBlanckReviews-carousel">
                    <div class="swiper-container swiper-ourBlanckReviews">
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