<section class="bestOffer">
    <div class="container">
        <div class="secTitle">Лучшие предложения</div>
        <?php 
        set_query_var( 'params', [
            'cat_id' => 28,
            'posts_count' => -1,
            ] );  
        get_template_part( './components/car-carousel/car-carousel' );
        wp_reset_query();
        ?>
    </div>
</section>