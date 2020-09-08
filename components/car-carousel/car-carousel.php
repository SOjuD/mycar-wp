<?php
    $args = array(
        'numberposts' => $params['posts_count'],
        'cat'    => $params['cat_id'],

    );
    $loop  = new WP_Query ( $args );   


if(count( $loop->posts )):


?>

    <div class="swiper-wrap car-carousel">
        <div class="swiper-container swiper-cars">
            <div class="swiper-wrapper">

                <?php while($loop->have_posts()) : $loop->the_post(); ?>
                    <div class="swiper-slide">
                        <?php 
                            global $card_template;
                            get_template_part('./components/card/card'); 
                            echo $card_template;
                        ?>
                    </div>
                <?php endwhile; ?>
                
                <?php wp_reset_postdata(); ?>
            </div>
            
        </div>
        <div class="swiper-button-prev"><?php get_template_part( './icons/left' ) ?></div>
        <div class="swiper-button-next"><?php get_template_part( './icons/left' ) ?></div>
    </div>


<?php endif; ?>