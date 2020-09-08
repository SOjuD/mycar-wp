<? $slider = new WP_Query(['post_type' => 'slider' ]); 
    if($slider->have_posts()):
?>

    <section class="swiper-container header-slider">
        <div class="swiper-wrapper">
            <? while( $slider->have_posts() ) : $slider->the_post() ?>
                <div class="swiper-slide">
                    <div class="slide d-flex align-items-center" style="background-image: url(<?php the_post_thumbnail_url(); ?>)">
                        <div class="container">
                            <? the_content(); ?>
                        </div>
                    </div>
                </div>
            <? endwhile; ?>
        </div>
        <div class="swiper-pagination header-pagination w-100 d-flex justify-content-center"></div>
    </section>

<? 
    endif;
    wp_reset_postdata(); 
?>