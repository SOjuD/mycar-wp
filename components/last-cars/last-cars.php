<section class="lastCars">
    <div class="container">
        <div class="secTitle">Новые поступления</div>
        <?php 
        set_query_var( 'params', [
            'cat_id' => 32,
            'posts_count' => 9,
        ] );  
        get_template_part( './components/car-carousel/car-carousel' );
        wp_reset_query();
        ?>
    </div>
</section>