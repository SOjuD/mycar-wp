<?php

$title = get_the_title();

$slider_template = '';

$thumb_template = '';

foreach (get_field('galereya') as $elem) {
    $activeClass = $counter == 0 ? 'active' : '';
    $slider_template .= "<div class='swiper-slide'>
                                <a class='sngle-slide' href='" . $elem['url'] . "' data-fancybox='images' >
                                    <img src='" . $elem['sizes']['large'] . "' alt='$title' loading='lazy'/>
                                </a>
                            </div>";

    $thumb_template .= "<div class='single-thumbnail $activeClass'>
                                <img src='" . $elem['sizes']['thumbnail'] . "' data-slide='" . $counter++ . "' alt='$title' loading='lazy' />
                            </div>";
};

?>

<div class="col-12 col-md-6 col-lg-5">

    <div class="swiper-container single-slider">
        <div class="swiper-wrapper">
            <?php echo $slider_template; ?>
        </div>
    </div>

    <div class="single-thumbs d-flex flex-wrap">
        <?php echo $thumb_template; ?>
    </div>

</div>